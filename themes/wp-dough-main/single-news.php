<?php

$title = get_the_title();
$content = get_the_content();

$newsCategories = get_the_terms(\get_post(), 'newsCategory');

render('views/templates/news-detail.php', compact('title','content', 'newsCategories'));