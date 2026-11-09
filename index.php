<?php
declare(strict_types=1);

define('ROOT', __DIR__);
require ROOT . '/src/helpers.php';

// ---- request path (relative to the app's base path) -------------------------
$uri = rawurldecode(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/');
// PHP built-in server: let it serve real files (css, js, images ...) untouched
if (PHP_SAPI === 'cli-server' && $uri !== '/' && is_file(__DIR__ . $uri) && !str_ends_with($uri, '.php')) {
    return false;
}
$base = base_path();
if ($base !== '' && str_starts_with($uri, $base)) {
    $uri = substr($uri, strlen($base)) ?: '/';
}
$path = trim($uri, '/');
if ($path === 'index.php') {
    $path = '';
}

$routes = brandify(require ROOT . '/config/routes.php');
$blogs = brandify(require ROOT . '/data/blogs.php');

// ---- old *.html URLs -> clean URLs (301) ------------------------------------
if (str_ends_with($path, '.html')) {
    $redirects = require ROOT . '/config/redirects.php';
    if (isset($redirects[$path])) {
        redirect(base_path() . $redirects[$path]);
    }
}

// ---- generated files --------------------------------------------------------
if ($path === 'robots.txt') {
    header('Content-Type: text/plain; charset=utf-8');
    echo "User-agent: *\nAllow: /\n\nSitemap: " . site_url('sitemap.xml') . "\n";
    exit;
}
if ($path === 'sitemap.xml') {
    header('Content-Type: application/xml; charset=utf-8');
    echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n" . '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
    foreach (array_keys($routes) as $r) {
        echo '  <url><loc>' . e(site_url($r)) . "</loc></url>\n";
    }
    foreach ($blogs['order'] as $slug) {
        echo '  <url><loc>' . e(site_url('blogs/' . $slug)) . '</loc><lastmod>'
            . e(substr($blogs['posts'][$slug]['modified'], 0, 10)) . "</lastmod></url>\n";
    }
    echo "</urlset>\n";
    exit;
}

// ---- form endpoints (implemented in Phase 4) --------------------------------
if (preg_match('#^(save_contact/\d+|save-comment)$#', $path)) {
    header('Content-Type: application/json; charset=utf-8');
    http_response_code(503);
    echo json_encode(['errors' => ['form' => ['This form is not enabled yet. Please email us directly.']]]);
    exit;
}

// ---- blog post --------------------------------------------------------------
if (preg_match('#^blogs/([a-z0-9-]+)$#', $path, $m) && isset($blogs['posts'][$m[1]])) {
    $post = $blogs['posts'][$m[1]];
    $featured = array_map(fn ($s) => $blogs['posts'][$s], $blogs['featured']);
    $page = [
        'route' => $path, 'page' => 'blog-post', 'nav' => 'blogs', 'head' => true, 'scripts' => true,
        'title' => $post['meta_title'], 'description' => $post['meta_description'],
    ];
    render($page, function () use ($post, $featured) { include ROOT . '/templates/blog-post.php'; }, compact('post'));
    exit;
}

// ---- blog listing -----------------------------------------------------------
if ($path === 'blogs') {
    $page = $routes['blogs'] + ['route' => 'blogs'];
    $per = (int) $blogs['per_page'];
    $page_count = max(1, (int) ceil(count($blogs['order']) / $per));
    $page_no = max(1, min($page_count, (int) ($_GET['page'] ?? 1)));
    $page_posts = array_map(fn ($s) => $blogs['posts'][$s], array_slice($blogs['order'], ($page_no - 1) * $per, $per));
    render($page, function () use ($page_posts, $page_no, $page_count) {
        include ROOT . '/templates/blog-list.php';
    });
    exit;
}

// ---- static pages -----------------------------------------------------------
if (isset($routes[$path])) {
    $page = $routes[$path] + ['route' => $path];
    render($page, function () use ($page) { include ROOT . '/pages/' . $page['page'] . '.php'; });
    exit;
}

not_found();
