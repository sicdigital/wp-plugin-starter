
<?php
/**
 * All Admin settings for This Pluggin Belong Here
 *
 *
 * @package 
 * @since 1.0
 *
 */

//Include Admin Styles
add_action( 'admin_enqueue_scripts', 'wpct_scripts' );	

function wpct_scripts() {
	wp_enqueue_style( 'admin-styles', WPCT_DIR . '/interface/wpct-styles.css' );
}

//Add Menu Pages
add_action('admin_menu', 'wpct_menu_page');
function wpct_menu_page() {	
  //Adds Calls Main Menu Page
  add_menu_page('Plugin Settings', 'Calls', 'manage_options', 'sic', '', WPCT_DIR . '/interface/images/phone-icon.png');
  //Reporting
  add_submenu_page( 'sic', 'Dashboard', 'Dashoard', 'manage_options', 'sic', 'sic_dashboard');
  //Import/Export
  add_submenu_page( 'sic', 'Import/Export', 'Import/Export', 'manage_options', 'sic_import_export', 'wpct_io_page');
  //Settings
  add_submenu_page( 'sic', 'Settings page title', 'Settings', 'manage_options', 'sic_settings', 'wpct_settings_page');
  //Help
  add_submenu_page( 'sic', 'Help', 'Help', 'manage_options', 'wpct-help', 'sic_help_page');
  
}

function sic_dashboard(){
	
	echo '<div class="wrap"><h2>Dashboard</h2></div>';

}//wpct_dashboard


function sic_help_page(){
                echo '<div class="wrap">
                <h2>Help</h2>
                </div>';
}

function sic_io_page(){
                echo '<div class="wrap">
                <h2>Import/Export</h2>
                </div>';
}

// class wpctSettings(){

// }//wpctSettings

function sic_settings_page(){
	
	if(!empty($_REQUEST['twilio_sid']) && !empty($_REQUEST['twilio_token']))
		{
			$twilio_sid = $_REQUEST['twilio_sid'];
			$twilio_token = $_REQUEST['twilio_token'];

			update_option("twilio_sid", $twilio_sid );
			update_option("twilio_token", $twilio_token );
		}

		$twilio_sid_option = get_option("twilio_sid");
		$twilio_token_option = get_option("twilio_token");

	echo '<div class="wrap">
		<h2>Settings</h2>';
?>      
	<form name="frm_rss" action="<?=get_option("siteurl")?>/wp-admin/admin.php?page=twilio"   method="post" enctype="multipart/form-data">
	<label for="twilio_sid">SID</label>
	<input type="text" name="twilio_sid" id="sid" size="65" value="<?php echo $twilio_sid_option?>"/>
	
	<label for="twilio_sid">Token</label>
	<input type="text" name="twilio_token" id="token" size="65" value="<?=$twilio_token_option?>"/>
	<input type="submit" value="SAVE" name="twilio_submit" />  
	</form>

<?php echo '</div>'; }