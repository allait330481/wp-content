<?php
/** @var string $title */
/** @var string $content */
/** @var array $newsCategories */
?>

<div class="news">
    <?php if($title): ?>
        <h1><?php echo $title; ?></h1>
    <?php endif; ?>
    <?php if($content): ?>
        <?php echo $content; ?>
    <?php endif; ?>

    <?php if($newsCategories): ?>
        <h2>Categorieën: </h2>
        <?php render('views/organisms/category-list.php', ['categories' => $newsCategories]); ?>
    <?php endif; ?>
</div>