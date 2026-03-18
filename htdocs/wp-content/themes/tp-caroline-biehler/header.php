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

    <h3>bonjour je suis l'header</h3>
    <hr>
    
    <?php wp_body_open(); ?>

<header>
    
</header>