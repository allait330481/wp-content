<?php
/** @var WP_Post $newsItem */

$categories = get_the_terms(get_post($newsItem->ID), 'newsCategory');
?>

<li>
    <strong>Titel: </strong> <?php echo $newsItem->post_title; ?>
    <ul>
        <li>
            <strong>Datum: </strong> <?php echo date('d-m-Y', strtotime($newsItem->post_date)); ?>
        </li>
        <li>
            <strong>Content: </strong> <?php echo $newsItem->post_content; ?>
        </li>
        <li>
            <strong>Categories: </strong>
            <?php render('views/organisms/category-list.php', compact('categories')); ?>
        </li>
    </ul>
</li>
