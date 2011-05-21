<div class="wrap">
<h2><?php echo wp_specialchars( 'Youtube with fancy zoom - Widget Setting' ); ?></h2>
<?php
global $wpdb, $wp_version;

$g_ywfz_title = get_option('g_ywfz_title');
$g_ywfz_width = get_option('g_ywfz_width');
$g_ywfz_height = get_option('g_ywfz_height');
$g_ywfz_rand = get_option('g_ywfz_rand');
if ($_POST['g_ywfz_submit']) 
{
		$g_ywfz_title = stripslashes($_POST['g_ywfz_title']);
		$g_ywfz_width = stripslashes($_POST['g_ywfz_width']);
		$g_ywfz_height = stripslashes($_POST['g_ywfz_height']);
		$g_ywfz_rand = stripslashes($_POST['g_ywfz_rand']);
		update_option('g_ywfz_title', $g_ywfz_title );
		update_option('g_ywfz_width', $g_ywfz_width );
		update_option('g_ywfz_height', $g_ywfz_height );
		update_option('g_ywfz_rand', $g_ywfz_rand );
		//echo $g_ywfz_title . '--' . $g_ywfz_width. '--' . $g_ywfz_height. '--' . $g_ywfz_width . '<br>';
}
//echo $g_ywfz_title . '--' . $g_ywfz_width. '--' . $g_ywfz_height. '--' . $g_ywfz_width . '<br>';
echo '<table width="100%" border="0" cellspacing="5" cellpadding="0">';
echo '<tr>';
echo '<td align="left">';
echo '<form name="form_ywfz" method="post" action="">';
echo '<p>Sidebar Title :<br><input  style="" type="text" value="';
echo $g_ywfz_title . '" name="g_ywfz_title" id="g_ywfz_title" /></p>';
echo '<p>Thumbnail Width:<br><input  style="" type="text" value="';
echo $g_ywfz_width . '" name="g_ywfz_width" id="g_ywfz_width" /></p>';
echo '<p>Thumbnail Height:<br><input  style="" type="text" value="';
echo $g_ywfz_height . '" name="g_ywfz_height" id="g_ywfz_height" /></p>';
echo '<p>Number of video:<br><input  style="" type="text" value="';
echo $g_ywfz_rand . '" name="g_ywfz_rand" id="g_ywfz_rand" /></p>';
echo '<input type="submit" id="g_ywfz_submit" name="g_ywfz_submit" lang="publish" class="button-primary"" value="Update Widget Setting" />';
echo '</form>';
echo '</form>';
echo '</td>';
echo '<td align="center">';
if (function_exists (timepass)) timepass();
echo '</td>';
echo '</tr>';
echo '</table>';
?>
<div align="left" style="padding-top:5px;padding-bottom:5px;"> 
<a href="options-general.php?page=youtube-with-fancy-zoom/youtube-with-fancy-zoom.php">Manage Page</a> 
<a href="options-general.php?page=youtube-with-fancy-zoom/ywfz_help.php">Help Page</a> 
<a href="options-general.php?page=youtube-with-fancy-zoom/ywfz_widget_setting.php">Widget Setting</a> 
</div>
<h2><?php echo wp_specialchars( 'Notes' ); ?></h2>
The record with  Display Status = YES and Sidebar Display = YES will display in this widget.
<h2><?php echo wp_specialchars( "Youtube with fancy zoom - Help" ); ?></h2>
Plug-in created by <a target="_blank" href='http://www.gopiplus.com/work/'>Gopi</a>. <br />
<a target="_blank" href='http://www.gopiplus.com/work/2010/07/18/youtube-with-fancy-zoom/'>Click here</a> to post suggestion or comments or feedback.<br />
<a target="_blank" href='http://www.gopiplus.com/work/2010/07/18/youtube-with-fancy-zoom/'>Click here</a> to see LIVE demo.<br />
<a target="_blank" href='http://www.gopiplus.com/work/2010/07/18/youtube-with-fancy-zoom/'>Click here</a> to download my other plugins.<br />
<a target="_blank" href='http://www.gopiplus.com/work/2010/07/18/youtube-with-fancy-zoom/'>Click here</a> to read more info
</div>