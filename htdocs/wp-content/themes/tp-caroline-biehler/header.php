<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name"); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?= get_stylesheet_uri(); ?>">
</head>
<body <?php body_class(); ?>>
    
    <?php wp_body_open(); ?>

<header>
    <nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Menu Principal', 'tp-caroline-biehler' ); ?>">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'menu',
            'fallback_cb'    => false,
        ) );
        ?>
    </nav>
</header>