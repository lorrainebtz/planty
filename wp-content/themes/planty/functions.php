<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    // Chargement du style.css du thème parent Twenty Twenty
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du css/theme.css du theme enfant pour nos personnalisations
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}



/* HOOK FILTERS */


add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );
function add_extra_item_to_nav_menu( $items, $args ) {
    if (is_user_logged_in() && $args->menu === 'Principal') {
        $items .= '<li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://localhost:8888/Planty/wp-admin">Admin</a></li><li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://localhost:8888/Planty/commander/">Commander</a></li>';
    }
    elseif (!is_user_logged_in() && $args->menu === 'Principal') {
        $items .= '<li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://localhost:8888/Planty/commander/">Commander</a></li>';
    }
    return $items;
}

