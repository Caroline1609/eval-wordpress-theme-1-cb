<?php

/**
 * Register theme menus.
 */

function cb_add_thumbnails() {
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'cb_add_thumbnails');


function tp_caroline_biehler_register_menus() {

    register_nav_menus( array(
        'primary' => __( 'Menu Principal', 'tp-caroline-biehler' ),
        'footer'  => __( 'Menu Pied de Page', 'tp-caroline-biehler' ),


    ) );

    register_sidebar([
        'id' => 'main-sidebar',
        'name' => 'Sidebar Accueil',
        'before_widget' => '<div class="tp-caroline-biehler-widget">',
        'after_widget' => '</div>',
    ]);
}
add_action( 'after_setup_theme', 'tp_caroline_biehler_register_menus' );

