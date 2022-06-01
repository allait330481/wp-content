<?php
/** @var array $categories */
?>

<ul>
    <?php foreach($categories as $category): ?>
        <?php render('views/molecules/category-list-item.php', compact('category'))?>
    <?php endforeach; ?>
</ul>
