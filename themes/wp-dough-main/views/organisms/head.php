<head>
    <meta charset="utf-8">
    <title><?php wp_title('', true, 'right'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- STYLESHEETS -->
    <link href="<?php echo get_stylesheet_directory_uri() . '/assets/css/style.css'; ?>" rel="stylesheet">

    <!-- JAVASCRIPT -->
    <script src="<?php echo get_stylesheet_directory_uri() . '/assets/js/script.js'; ?>" type="text/javascript"></script>

    <?php wp_head(); ?>

    <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">
</head>
