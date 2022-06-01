<?php

$title = 'Nieuws archief';

$arguments = ['post_type' => 'news', 'numberposts' => 5, 'category' => 0, 'orderby' => 'date', 'order' => 'DESC'];
$newsItemCollection = get_posts($arguments);

render('views/templates/news-archive.php', compact('title', 'newsItemCollection'));