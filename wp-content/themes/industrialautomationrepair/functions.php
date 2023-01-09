<?php 
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

if ( is_admin() ) {
    register_nav_menus( array('primary_menu' => __( 'Primary Menu', 'text_domain' ) ) );
    add_theme_support( 'post-thumbnails'); add_theme_support( 'custom-header');
    add_action('admin_menu','actions_recent_bids_add_admin_page');
    add_action( 'admin_enqueue_scripts', 'Custome_Css_Insert');
}
function Custome_Css_Insert(){
    wp_enqueue_script('jquery306', get_stylesheet_directory_uri( __FILE__).'/assets/js/jquery.min.js',[]);
    wp_enqueue_style('Bootrapp5',get_stylesheet_directory_uri( __FILE__).'/assets/css/bootstrap.min.css', []);
    wp_enqueue_script('Bootrapp5js', get_stylesheet_directory_uri( __FILE__).'/assets/js/bootstrap.bundle.min.js',['jquery306']);
    wp_enqueue_script('Cusyomjs', get_stylesheet_directory_uri( __FILE__).'/assets/js/Custom.js',['jquery306']);
}

function actions_recent_bids_add_admin_page(){
    add_menu_page(
          'social Site Management',
          'Site Managemnet',
          'manage_options',
          'social-Site-Management',
          'wp_Site_manament',
          'dashicons-admin-site',
           56
    );

    add_submenu_page(
          'social-Site-Management',               // parent slug
          'social Site Management',                      // page title
          'social Site Management',                      // menu title
          'manage_options',                   // capability
          'social-Site-Management'
    );


    add_submenu_page(
          'social-Site-Management',               // parent slug
          'Site Support',                // page title
          'Site Support',                // menu title
          'manage_options',                   // capability
          'Site-Support',  // slug
          'acutions_customers_spendings_list' // callback
    );

    add_submenu_page(
          'social-Site-Management',          // parent slug
          'Customer Bids',               // page title
          'Customer Bids',               // menu title
          'manage_options',              // capability
          'wc-acutions-customers-bids',  // slug
          'acutions_customers_bids_list' // callback
    );
}
add_action( 'wp_enqueue_scripts', 'AddCSS', 10 );
function AddCSS(){
    
}

function wp_Site_manament(){    
    ob_start();
    require get_stylesheet_directory(__FILE__).'/page/wp_Site_manament.php';
    return ob_get_contents();
    ob_clean(); 
}

function acutions_customers_spendings_list(){
    echo "acutions_customers_spendings_list";
}




?>