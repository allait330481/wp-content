<?php
/*
 * Template Name: Allaith
 */

$content = get_the_content();

render('views/templates/custom.php', compact('title', 'content'));

$arguments = ['post_type' => 'review', 'numberposts' => 100, 'category' => 0, 'orderby' => 'date', 'order' => 'DESC'];
$listOfReviews = get_posts($arguments);

?>
 <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<header>

<a href="#" class="logo">Perpark</a>

<nav class="navbar">
        <a class="active" href="http://www.allaith-330481.nl/">Home</a>
        <a href="http://www.allaith-330481.nl/al-reviews/">Reviews</a>
        <a href="about-us.html">about us</a>
    </nav>
<div class="icons">
    <i class="fas fa-bars" id="menu-bars"></i>
    <i class="fas fa-search" id="search-icon"></i>
</div>

</header>



<section class="cards" id="Categories">
            <h2 class="title">Al reviews</h2>
            <div class="content">
                <?php foreach($listOfReviews as $review): ?>
                <div class="card">
                <div class="img-card">
                    <?php $img = get_field('image', $review->ID);
                    ?>
                        <img src="<?php echo $img['url']; ?>" alt="">
                    </div>
                    <div class="info">
                        <h1><?php echo $review->post_title ?></h1>
                        <p><?php echo $review->post_content ?></p>
                        <p class="email-card"><?php echo get_field('email', $review->ID)?></p>

                        <a href="<?php echo get_field('url', 'email', $review->ID)?>"><button class="button-85" role="button">Naar site</button></a>
                    </div>
                </div>

                <?php endforeach ?>
            </div>
        </section>


