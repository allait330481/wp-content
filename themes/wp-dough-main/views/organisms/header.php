<?php
$menuItems = wp_get_nav_menu_items('Main Menu');
?>

<header class="header navbar">

    <?php if($menuItems): ?>
    <ul class="menu">

        <?php foreach($menuItems as $item): ?>
        <li class="menu-item">
            <a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
        </li>
        <?php endforeach; ?>

    </ul>
    <?php endif; ?>

</header>