<?php
// Bootstrap pagination for the blog listing. Expects $page_no and $page_count.
$pageHref = fn (int $n): string => url('blogs') . ($n > 1 ? '?page=' . $n : '');
?>
<ul class="pagination all-pagination">
    <nav>
        <ul class="pagination">
<?php if ($page_no <= 1): ?>
            <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                <span class="page-link" aria-hidden="true">&lsaquo;</span>
            </li>
<?php else: ?>
            <li class="page-item">
                <a class="page-link" href="<?= e($pageHref($page_no - 1)) ?>" rel="prev" aria-label="&laquo; Previous">&lsaquo;</a>
            </li>
<?php endif; ?>
<?php for ($i = 1; $i <= $page_count; $i++): ?>
<?php if ($i === $page_no): ?>
            <li class="page-item active" aria-current="page"><span class="page-link"><?= $i ?></span></li>
<?php else: ?>
            <li class="page-item"><a class="page-link" href="<?= e($pageHref($i)) ?>"><?= $i ?></a></li>
<?php endif; ?>
<?php endfor; ?>
<?php if ($page_no >= $page_count): ?>
            <li class="page-item disabled" aria-disabled="true" aria-label="Next &raquo;">
                <span class="page-link" aria-hidden="true">&rsaquo;</span>
            </li>
<?php else: ?>
            <li class="page-item">
                <a class="page-link" href="<?= e($pageHref($page_no + 1)) ?>" rel="next" aria-label="Next &raquo;">&rsaquo;</a>
            </li>
<?php endif; ?>
        </ul>
    </nav>
</ul>
