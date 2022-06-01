<?php
/** @var array $newsItemCollection */
?>

<ul class="news-item-list">
    <?php foreach($newsItemCollection as $newsItem): ?>
        <?php render('views/molecules/news-item-list-item.php', compact('newsItem'))?>
    <?php endforeach; ?>
</ul>
