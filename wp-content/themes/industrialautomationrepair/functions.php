<?php 
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

if ( is_admin() ) {
    register_nav_menus( array('primary_menu' => __( 'Primary Menu', 'text_domain' ) ) );
    add_theme_support( 'post-thumbnails');
     add_theme_support( 'custom-header');
}

if( function_exists('acf_add_options_page') ) {
        acf_add_options_page(array(
            'page_title'    => 'Theme General Settings',
            'menu_title'    => 'Theme Settings',
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));
}

?>