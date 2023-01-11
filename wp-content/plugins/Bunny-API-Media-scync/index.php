<?php
/*
Plugin Name: Bunny API 
Plugin URI: https://www.advancedcustomfields.com
Description: Bunny api Scync
Version: 1.0
Author: Exotica IT Solutions Pvt. Ltd.
Author URI: https://www.advancedcustomfields.com
*/

define('plugin_dir_path', plugin_dir_path(__FILE__));
define('plugin_dir_url', plugin_dir_url(__FILE__));
define('plugin_asssets', plugin_dir_url.'assets/');
require_once plugin_dir_path.'includes/functions.php';
require_once plugin_dir_path.'includes/ajax.php';
require_once plugin_dir_path.'vendor/autoload.php';
add_action( 'admin_menu', 'my_custom_menu' );
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );


?>