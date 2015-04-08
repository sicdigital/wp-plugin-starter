<?php
/* 
Plugin Name: SIC Plugin Starter
Plugin URI: http://sicdigital.com
Description: SIC Digital Starter Plugin
Author: Michael Chacon
Version: 1.0 
Author URI: http://www.sicdigital.com
*/  

//Set Plugin Paths
define('PlUGGIN_DIR', plugin_dir_url(__FILE__) );	
define( 'PlUGGIN_PATH', plugin_dir_path(__FILE__) );


//Include Admin Styles
add_action( 'wp_head', 'enqueue_scripts' );

function enqueue_scripts() {
    wp_enqueue_style( 'bootstrap', PLUGGIN_PATH . '/css/main.min.css' );
}

?>