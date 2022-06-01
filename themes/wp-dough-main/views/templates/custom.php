<?php
/** @var string $title */
/** @var string $content */
?>

<div class="custom">

    <?php if($title): ?>
        <h1><?php echo $title; ?></h1>
    <?php endif; ?>

    <hr>

    <?php if($content): ?>
        <?php echo $content; ?>
    <?php endif; ?>

</div>
