<div align="left" style="padding-top:5px;padding-bottom:5px;"> 
<a href="options-general.php?page=youtube-with-fancy-zoom/youtube-with-fancy-zoom.php">Manage Page</a> 
<a href="options-general.php?page=youtube-with-fancy-zoom/ywfz_help.php">Help Page</a> 
<a href="options-general.php?page=youtube-with-fancy-zoom/ywfz_widget_setting.php">Widget Setting</a> 
</div>

<div class="wrap">
<table width="100%">
<tr>
<td>
<h2><?php echo wp_specialchars( "Youtube with fancy zoom - Help" ); ?></h2>
Plug-in created by <a target="_blank" href='http://gopi.coolpage.biz/demo/about/'>Gopi</a>. <br />
<a target="_blank" href='http://gopi.coolpage.biz/demo/2009/10/10/youtube-with-fancy-zoom/'>click here</a> to post suggestion or comments or how to improve this plugin.<br />
<a target="_blank" href='http://gopi.coolpage.biz/demo/2009/10/10/youtube-with-fancy-zoom/'>click here</a> to see LIVE demo.<br />
<a target="_blank" href='http://gopi.coolpage.biz/demo/2009/10/10/youtube-with-fancy-zoom/'>click here</a> To download my other plugins.

<h2><?php echo wp_specialchars( 'Remove admin page ad!' ); ?></h2>
This plugin have one ad in admin page only.
Clicking the ad will not affect the page, <br />To remove the ad follow the below step. <br />
1. Delete the extra.php file. <br />
2. youtube-with-fancy-zoom.php go to line 58 and remove "include_once("extra.php");". <br />
2. ywfz_help.php go to line 26 and remove "include_once("extra.php");". <br />
3. Thats it ad removal over!!
</td>
<td>
<?php
include_once("extra.php");
if (function_exists (gads)) gads();
?>
<br />See help page to remove this ad
</td>
</tr>
</table>
<h2><?php echo wp_specialchars( 'Paste the below code to your desired template location!' ); ?></h2>
We can use this plug-in in different way.<br />
1. Go to widget menu and drag and drop the "Youtube with fancy zoom" widget to your sidebar location. or <br />
2. Copy and past the below mentioned code to your desired template location.<br /><br />
<code style="padding:7px;">
&lt;?php if (function_exists (g_ywfz_show)) g_ywfz_show(); ?&gt;</code>

<!--<h2><?php //echo wp_specialchars( 'How to display this youtube video in page or post?!' ); ?></h2>
Use this code to post the video in page or post
<br /><br /><code style="padding:7px;">[youtube-with-fancy-zoom code="youtubecode"]</code><br />
<br />Example : [youtube-with-fancy-zoom code="Vc6V4b4VgOk"]-->


<h2><?php echo wp_specialchars( 'Form Help!' ); ?></h2>
If any problem in add/edit/delete record please see this help link 
<br />What is Title?
<br />What is Youtube watch link ?
<br />What is Youtube code?
<br />What is Thumbnail Image link?
<br />What is Display Image?
<br />What is Display Status?
<br />What is Sidebar Display?
<br />To answer all the question please see the plugin webpage.<br />
<br />Help : <a target="_blank" href='http://gopi.coolpage.biz/demo/2009/10/10/youtube-with-fancy-zoom/'>click here</a>
<br />Live demo : <a target="_blank" href='http://gopi.coolpage.biz/demo/2009/10/10/youtube-with-fancy-zoom/'>click here</a>
<br />Comments : <a target="_blank" href='http://gopi.coolpage.biz/demo/2009/10/10/youtube-with-fancy-zoom/'>click here</a>
<br />Suggestion : <a target="_blank" href='http://gopi.coolpage.biz/demo/2009/10/10/youtube-with-fancy-zoom/'>click here</a>
<!--<strong>Title :</strong> This is title text for your youtube video. 
<br /><br /><strong>Youtube watch link :</strong> This is the youtube video link.
<br />Ex : http://www.youtube.com/watch?v=Vc6V4b4VgOk
<br /><br /><strong>Youtube code :</strong> This is to create youtube thumbnail.
<br />If (http://www.youtube.com/watch?v=Vc6V4b4VgOk) this is your youtube video 
<br />then "Vc6V4b4VgOk" this is your youtube code.
<br />Simply the query string "v" is your youtube code.
<br /><br /><strong>Thumbnail Image link (Your Thumbnail) :</strong> Put your own thumbnail image link(optional)
<br />To display your own thumbnail image put your image in this field and set Display Image = Your Thumbnail.
<br /><br /><strong>Display Image :</strong> You can set what image to display at thumbnail using this field.
<br />Your Thumbnail = This will display the image from your given link.
<br />Youtube Thumbnail = This will display the image from youtube.
<br /><br /><strong>Display Status :</strong> This is for record display status. 
<br />Put this YES always then only the record display at front end.
<br /><br /><strong>Sidebar Display :</strong> Put this YES always then only the record will display on widget,
<br />The record contain Sidebar Display = YES will display at widget.
<br /><br /><br />-->
<br />
<div align="left" style="padding-top:5px;padding-bottom:5px;"> 
<a href="options-general.php?page=youtube-with-fancy-zoom/youtube-with-fancy-zoom.php">Manage Page</a> 
<a href="options-general.php?page=youtube-with-fancy-zoom/ywfz_help.php">Help Page</a> 
<a href="options-general.php?page=youtube-with-fancy-zoom/ywfz_widget_setting.php">Widget Setting</a> 
</div>
</div>
