
<?php
/*
Plugin Name: Youtube with fancy zoom
Plugin URI: http://gopi.coolpage.biz/demo/2009/10/10/youtube-with-fancy-zoom/
Description: Youtube with fancy zoom is a media viewing application that supports webs most popular youtube video. 
This is a jQuery based fancy zoom.  
Author: Gopi.R
Version: 2.0
Author URI: http://gopi.coolpage.biz/demo/about/
Donate link: http://gopi.coolpage.biz/demo/2009/10/10/youtube-with-fancy-zoom/
*/

global $wpdb, $wp_version;
define("WP_G_YWFZ_TABLE", $wpdb->prefix . "g_ywfz");

function g_ywfz_show() 
{
	include_once("inc/ywfz_widget.php");
}

function g_ywfz_install() 
{
	global $wpdb;
	
	if($wpdb->get_var("show tables like '". WP_G_YWFZ_TABLE . "'") != WP_G_YWFZ_TABLE) 
	{
		$wpdb->query("
			CREATE TABLE `". WP_G_YWFZ_TABLE . "` (
				`ywfz_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
				`ywfz_title` VARCHAR( 1024 ) NOT NULL ,
				`ywfz_watch` VARCHAR( 1024 ) NOT NULL ,
				`ywfz_code` VARCHAR( 100 ) NOT NULL ,
				`ywfz_img` VARCHAR( 200 ) NOT NULL ,
				`ywfz_size` VARCHAR( 10 ) NOT NULL ,
				`ywfz_imglink` VARCHAR( 1024 ) NOT NULL ,
				`ywfz_status` VARCHAR( 10 ) NOT NULL ,
				`ywfz_sidebar` VARCHAR( 10 ) NOT NULL ,
				`ywfz_expire` DATE NOT NULL
				) ENGINE = MYISAM ;
			");
		$sSql = "insert into `". WP_G_YWFZ_TABLE . "` set `ywfz_title`='MJ Moon Walk', ";
		$sSql = $sSql . "`ywfz_watch`='http://www.youtube.com/watch?v=s7MmEMrCRfc', ";
		$sSql = $sSql . "`ywfz_code`='s7MmEMrCRfc', ";
		$sSql = $sSql . "`ywfz_img`='Youtube Thumbnail', ";
		$sSql = $sSql . "`ywfz_size`='0', `ywfz_imglink`='', ";
		$sSql = $sSql . "`ywfz_status`='Yes', `ywfz_sidebar`='Yes';";
		$wpdb->query($sSql);
		$sSql = "insert into `". WP_G_YWFZ_TABLE . "` set";
		$sSql = $sSql . " `ywfz_title`='Obama Nobel Peace Prize Winner',";
		$sSql = $sSql . "`ywfz_watch`='http://www.youtube.com/watch?v=LxvApfkScLg',";
		$sSql = $sSql . "`ywfz_code`='LxvApfkScLg',";
		$sSql = $sSql . "`ywfz_img`='Youtube Thumbnail', ";
		$sSql = $sSql . "`ywfz_size`='0', `ywfz_imglink`='', ";
		$sSql = $sSql . "`ywfz_status`='Yes', `ywfz_sidebar`='Yes';";
		$wpdb->query($sSql);
	}
	
	add_option('g_ywfz_title', "Youtube Video");
	add_option('g_ywfz_width', "200");
	add_option('g_ywfz_height', "150");
	add_option('g_ywfz_rand', "5");
}

function g_ywfz_widget($args) 
{
	extract($args);
	echo $before_widget . $before_title;
	echo get_option('g_ywfz_title');
	echo $after_title;
	g_ywfz_show();
	echo $after_widget;
}

function g_ywfz_admin_option() 
{
	include_once("extra.php");
	?>
    <div class="wrap">
    <?php
    $title = __('Youtube with fancy zoom');
    $mainurl = get_option('siteurl')."/wp-admin/options-general.php?page=youtube-with-fancy-zoom/youtube-with-fancy-zoom.php";
    ?>
    <h2><?php echo wp_specialchars( $title ); ?></h2>
    <?php
	global $wpdb;
    $AID=@$_GET["AID"];
    $AC=@$_GET["AC"];
    $rand=$_GET["rand"];
    $submittext = "Insert";
	if($AC <> "DEL" and trim($_POST['ywfz_title']) <>"") { include_once("inc/ywfz_insert.php"); }
    if($AC=="DEL" && $AID > 0) { include_once("inc/ywfz_delete.php"); }
    if($AID<>"" and $AC <> "DEL")
    {
        $data = $wpdb->get_results("select * from ".WP_G_YWFZ_TABLE." where ywfz_id=$AID limit 1");
        if ( empty($data) ) 
        {
            echo "";
            return;
        }
        $data = $data[0];
        //encode strings
        if ( !empty($data) ) $ywfz_title_x = htmlspecialchars(stripslashes($data->ywfz_title)); 
        if ( !empty($data) ) $ywfz_watch_x = htmlspecialchars(stripslashes($data->ywfz_watch));
        if ( !empty($data) ) $ywfz_code_x = htmlspecialchars(stripslashes($data->ywfz_code));
        if ( !empty($data) ) $ywfz_img_x = htmlspecialchars(stripslashes($data->ywfz_img));
		if ( !empty($data) ) $ywfz_size_x = htmlspecialchars(stripslashes($data->ywfz_size));
		if ( !empty($data) ) $ywfz_imglink_x = htmlspecialchars(stripslashes($data->ywfz_imglink));
		if ( !empty($data) ) $ywfz_status_x = htmlspecialchars(stripslashes($data->ywfz_status));
		if ( !empty($data) ) $ywfz_sidebar_x = htmlspecialchars(stripslashes($data->ywfz_sidebar));
		if ( !empty($data) ) $ywfz_id_x = htmlspecialchars(stripslashes($data->ywfz_id));
        $submittext = "Update";
    }
    ?>
    <?php include_once("inc/ywfz_form.php"); ?>
	<div align="left" style="padding-top:5px;"> 
	<a href="options-general.php?page=youtube-with-fancy-zoom/youtube-with-fancy-zoom.php">Manage Page</a> 
	<a href="options-general.php?page=youtube-with-fancy-zoom/ywfz_help.php">Help Page</a> 
	<a href="options-general.php?page=youtube-with-fancy-zoom/ywfz_widget_setting.php">Widget Setting</a> 
	</div>
    <?php include_once("inc/ywfz_manage.php"); ?>
</div>
    <?php
}

function g_ywfz_control()
{
	echo '<p>Youtube with fancy zoom.<br> To change the setting go to Youtube with fancy zoom link under SETTING TAB.';
	echo '<br><a href="options-general.php?page=youtube-with-fancy-zoom/ywfz_widget_setting.php">';
	echo 'click here</a>.</p>';
	
}

function g_ywfz_widget_init() 
{
  	register_sidebar_widget(__('Youtube with fancy zoom'), 'g_ywfz_widget');   
	if(function_exists('register_sidebar_widget')) 	
	{
		register_sidebar_widget('Youtube with fancy zoom', 'g_ywfz_widget');
	}
	if(function_exists('register_widget_control')) 	
	{
		register_widget_control(array('Youtube with fancy zoom', 'widgets'), 'g_ywfz_control');
	} 
}

function g_ywfz_deactivation() 
{
	delete_option('g_ywfz_title');
	delete_option('g_ywfz_width');
	delete_option('g_ywfz_height');
	delete_option('g_ywfz_rand');
}

function g_ywfz_add_to_menu() 
{
	add_options_page('Youtube with fancy zoom', 'Youtube with fancy zoom', 7, __FILE__, 'g_ywfz_admin_option' );
	add_options_page('Software', '', 0, "youtube-with-fancy-zoom/ywfz_help.php",'' );
	add_options_page('Software', '', 0, "youtube-with-fancy-zoom/ywfz_widget_setting.php",'' );
}

add_action('admin_menu', 'g_ywfz_add_to_menu');
add_action("plugins_loaded", "g_ywfz_widget_init");
register_activation_hook(__FILE__, 'g_ywfz_install');
register_deactivation_hook(__FILE__, 'g_ywfz_deactivation');
add_action('init', 'g_ywfz_widget_init');

//function g_ywfz_shortcode($atts) 
//{
//	include_once("inc/ywfz_shortcode.php");
//}

//add_shortcode('youtube-with-fancy-zoom', 'g_ywfz_shortcode');



//http://www.youtube.com/watch?v=Vc6V4b4VgOk
//http://img.youtube.com/vi/qqXi8WmQ_WM/2.jpg

?>
