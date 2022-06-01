<?php

// $title = get_the_title();
// $content = get_the_content();

// $review = get_the_terms(\get_post(), 'review');

// render('views/templates/review-detail.php', compact('title','content', 'review'));

$arguments = ['post_type' => 'review', 'numberposts' => 5, 'category' => 0, 'orderby' => 'date', 'order' => 'DESC'];
$listOfReviews = get_posts($arguments);



?>


<section class="cards" id="Categories">
            <h2 class="title">Last reviews</h2>
            <div class="content">
                <?php foreach($listOfReviews as $review): ?>
                <div class="card">
                    <div class="img-card">
                        <img src="https://blog.bungalowspecials.nl/wp-content/uploads/sites/14/2016/08/Klein-Pretpark-Toverland.jpg" alt="">
                    </div>
                    <div class="info">
                        <h1><?php echo $review->post_title ?></h1>
                        <p><?php echo $review->post_content ?></p>

                    </div>
                </div>

                <?php endforeach ?>
            </div>
        </section>