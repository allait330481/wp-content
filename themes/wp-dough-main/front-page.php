<?php
/** config for home template **/

$title = get_the_title();
$content = get_the_content();

$homeButton = ['url' => get_home_url(), 'title' => 'Klik hier voor de homepage', 'class' => null];
$adminButton = ['url' => get_home_url() . '/wp-admin', 'title' => 'Klik om in de admin dashboard te komen', 'class' => 'admin-btn'];
$buttonGroup = [$homeButton, $adminButton];

render('views/templates/home.php', ['title' => $title, 'content' => $content, 'buttonGroup' => $buttonGroup]);





