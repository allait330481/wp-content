<?php
/*
 * Template Name: Custom
 */

$title = get_the_title();
$content = get_the_content();

render('views/templates/custom.php', compact('title', 'content'));
?>
