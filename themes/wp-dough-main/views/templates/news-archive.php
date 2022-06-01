<?php
/** @var string $title */
/** @var array $newsItemCollection */
?>

<div class="news-archive">
    <?php if($title): ?>
        <h1><?php echo $title; ?></h1>
    <?php endif; ?>

    <?php if($newsItemCollection): ?>
        <?php render('views/organisms/news-item-list.php', compact('newsItemCollection')); ?>
    <?php endif; ?>
</div>