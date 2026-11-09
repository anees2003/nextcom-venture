<?php
declare(strict_types=1);

/** Brand/config value, dot paths allowed: brand('address.city'). */
function brand(string $key, mixed $default = ''): mixed
{
    static $cfg = null;
    $cfg ??= require ROOT . '/config/brand.php';
    $v = $cfg;
    foreach (explode('.', $key) as $part) {
        if (!is_array($v) || !array_key_exists($part, $v)) {
            return $default;
        }
        $v = $v[$part];
    }
    return $v;
}

/** HTML-escape. */
function e(mixed $v): string
{
    return htmlspecialchars((string) $v, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/** URL prefix when the site lives in a sub-folder ('' when served from the web root). */
function base_path(): string
{
    static $p = null;
    if ($p === null) {
        // Only trust SCRIPT_NAME when it is the front controller (the PHP dev server
        // rewrites it to the request path for URLs that look like files).
        $script = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '/index.php');
        $dir = basename($script) === 'index.php' ? dirname($script) : '/';
        $p = ($dir === '/' || $dir === '.') ? '' : rtrim($dir, '/');
    }
    return $p;
}

/** Path-only URL of a route: url('about-us') => /about-us ; url('') => / */
function url(string $route = ''): string
{
    return base_path() . '/' . ltrim($route, '/');
}

/** Path-only URL of a file under public/. */
function asset(string $path): string
{
    return base_path() . '/' . ltrim($path, '/');
}

/** Absolute URL (canonical, sitemap, JSON-LD). */
function site_url(string $path = ''): string
{
    return rtrim((string) brand('site_url'), '/') . '/' . ltrim($path, '/');
}

function canonical_url(string $route): string
{
    return site_url($route);
}

/** Returns 'active ' for the nav item that matches the current page, else ' '. */
function nav_class(string $id): string
{
    return (($GLOBALS['__nav'] ?? null) === $id) ? 'active ' : ' ';
}

function csrf_token(): string
{
    if (session_status() === PHP_SESSION_NONE && !headers_sent()) {
        session_start(['cookie_httponly' => true, 'cookie_samesite' => 'Lax']);
    }
    if (empty($_SESSION['csrf'])) {
        $_SESSION['csrf'] = bin2hex(random_bytes(20));
    }
    return $_SESSION['csrf'];
}

/** Render a full page: head + header + body + footer + scripts. */
function render(array $page, callable $body, array $vars = []): void
{
    csrf_token();
    $GLOBALS['__nav'] = $page['nav'] ?? null;
    $route = $page['route'] ?? '';
    extract($vars, EXTR_SKIP);
    include ROOT . '/templates/layout/head.php';
    include ROOT . '/templates/layout/header.php';
    $body();
    include ROOT . '/templates/layout/footer.php';
    include ROOT . '/templates/layout/scripts.php';
}

function not_found(): void
{
    http_response_code(404);
    $page = ['route' => '404', 'page' => '404', 'title' => 'Page Not Found | ' . e(brand('name')),
             'description' => 'The page you are looking for could not be found.', 'nav' => null];
    render($page, function () { include ROOT . '/pages/404.php'; });
}

function redirect(string $to, int $code = 301): never
{
    header('Location: ' . $to, true, $code);
    exit;
}
