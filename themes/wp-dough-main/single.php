<?php

$title = get_the_title();
$content = get_the_content();

render('views/templates/post-detail.php', ['title' => $title, 'content' => $content]);