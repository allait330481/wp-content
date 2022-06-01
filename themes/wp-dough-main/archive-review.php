<?php

$title = 'Nieuws archief';

$arguments = ['post_type' => 'review', 'numberposts' => 5, 'category' => 0, 'orderby' => 'date', 'order' => 'DESC'];
$reviewItemCollection = get_posts($arguments);

render('views/templates/review-archive.php', compact('title', 'reviewItemCollection'));