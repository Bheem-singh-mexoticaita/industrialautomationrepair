<?php
if ( !defined( 'ABSPATH' ) ) exit;
if ( is_admin() ) {
    
function my_custom_menu(){
    add_menu_page('Bunny API', 'Bunny API', 'manage_options', 'my-menu', 'my_menu_output' );
}

function load_custom_wp_admin_style(){
    wp_enqueue_style( 'bootrapp5', plugin_asssets.'css/bootstrap.min.css', false, '5.2.0' );
    wp_enqueue_script( 'bootrapp5Jquery', plugin_asssets.'js/bootstrap.bundle.min.js', false );
    wp_enqueue_script( 'Appjs', plugin_asssets.'js/app.js', false );

}

}
function my_menu_output(){
    ob_start();   require plugin_dir_path.'pages/setting.php'; return ob_get_contents(); ob_clean();
}

?>