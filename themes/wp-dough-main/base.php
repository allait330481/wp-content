<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<?php render('views/organisms/head.php'); ?>

<body <?php body_class(); ?>>
<div id="dough">

    <?php do_action('get_header'); ?>

    <?php render('views/organisms/header.php'); ?>
    <main class="main" role="main">
        <?php include templatePath(); ?>
    </main>

    <?php render('views/organisms/footer.php'); ?>
</div>

<?php wp_footer(); ?>
</body>
</html>