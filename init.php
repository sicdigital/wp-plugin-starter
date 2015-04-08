<?php
/* 
Plugin Name: Clear Clinic Labs Dashboard
Plugin URI: http://www.clearcliniclabs.com
Description: Contains all of the features of the clear clinic labs dashboard. 
Author: Michael Chacon
Version: 1.0 
Author URI: http://www.sicdigital.com
*/  

//Set Plugin Paths
define('PlUGGIN_DIR', plugin_dir_url(__FILE__) );	
define( 'PlUGGIN_PATH', plugin_dir_path(__FILE__) );

//Includes Admin Settings
//require(PlUGGIN_PATH . '/settings/admin.php');


register_activation_hook( __FILE__, 'cc_labs_activate' );

function cc_labs_activate() {

    
    $pages = array(
        array(
            'post_title' => 'Member Dashboard',
            'post_name' => 'Member Dashboard',
            'post_slug' => 'member-dashboard',
            'post_content' => 'Welcome to your member dashboard.',
            'post_status' => 'publish',
            'post_author' => 1,
            'post_type' => 'page',
        ),
        array(
            'post_title' => 'My Progress',
            'post_name' => 'My Progress',
            'post_slug' => 'progress',
            'post_content' => 'Welcome to your member dashboard.',
            'post_parent' =>  $cc_labs_pages[0],
            'post_status' => 'publish',
            'post_author' => 1,
            'post_type' => 'page' 
         ),
       array(
            'post_title' => 'My Regimen',
            'post_name' => 'My Regimen',
            'post_slug' => 'regimen',
            'post_content' => 'Welcome to your member dashboard.',
            'post_parent' =>  $cc_labs_pages[0],
            'post_status' => 'publish',
            'post_author' => 1,
            'post_type' => 'page'  
         ),
         array(
            'post_title' => 'Personal Acne Coach',
            'post_name' => 'Personal Acne Coach',
            'post_slug' => 'personal-acne-coach',
            'post_content' => 'Welcome to your member dashboard.',
            'post_parent' =>  $cc_labs_pages[0],
            'post_status' => 'publish',
            'post_author' => 1,
            'post_type' => 'page')
         );


foreach($pages as $page){
    
    $page_exists = get_page_by_title( $page['post_title'] );

    if( $page_exists == null ) {
        
        // Page doesn't exist, so lets add it
        $insert = wp_insert_post( $page );
        
        if( $insert ) {
            // Page was inserted ($insert = new page's ID)
            $cc_labs_pages[] = $insert;
            // var_dump($cc_labs_pages);
        }//insert
    
    } //Page doesnt exist

    else {
        // Page already exists
    }


    //if we have created any new pages, then flush...
    if ( $newpages ) {
        wp_cache_delete( 'all_page_ids', 'pages' );
        $wp_rewrite->flush_rules();
    }

    }//foreach

}
//Template fallback
add_action("template_redirect", 'cc_labs_redirect');

function cc_labs_redirect() {
    global $wp;
   
//Set myAccount Custom Page Template 

if (is_page('member-dashboard')) {

    if (file_exists(dirname( __FILE__ ) . '/interface/' . 'member-dashboard.php')) {

        $return_template = dirname( __FILE__ ) . '/interface/' . 'member-dashboard.php';

    }

    do_theme_redirect($return_template);

}//if member-dashboard 

if (is_page('my-progress')) {

    if (file_exists(dirname( __FILE__ ) . '/interface/' . 'progress.php')) {

        $return_template = dirname( __FILE__ ) . '/interface/' . 'progress.php';

    }

    do_theme_redirect($return_template);

}//if my-progress

if (is_page('my-regimen')) {

    if (file_exists(dirname( __FILE__ ) . '/interface/' . 'regimen.php')) {

        $return_template = dirname( __FILE__ ) . '/interface/' . 'regimen.php';

    }

    do_theme_redirect($return_template);

}//if regimen

if (is_page('personal-acne-coach')) {

    if (file_exists(dirname( __FILE__ ) . '/interface/' . 'personal-acne-coach.php')) {

        $return_template = dirname( __FILE__ ) . '/interface/' . 'personal-acne-coach.php';

    }

    do_theme_redirect($return_template);

}//if regimen

}//cc_labs_redirect


function do_theme_redirect($url) {
    global $post, $wp_query;
  
    if (have_posts()) {
        include($url);
        die();
    } 

    else {
        $wp_query->is_404 = true;
    }

}//do_theme_redirect

//Include Admin Styles
add_action( 'cc_dashboard_head', 'cc_labs_scripts' );  

function cc_labs_scripts() {
    wp_enqueue_style( 'bootstrap', PLUGGIN_PATH . '/interface/css/bootstrap.css' );
    wp_enqueue_style( 'cc_plugins', PLUGGIN_DIR . '/interface/css/plugins.css' );
    wp_enqueue_style( 'cc_main', PLUGGIN_DIR . '/interface/css/main.css' );
    wp_enqueue_style( 'cc_themes', PLUGGIN_DIR . '/interface/css/themes.css' );

}

?>