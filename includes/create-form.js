// JavaScript Document

function _ywfz_form()
{
	if((document.ywfz_form.ywfz_title.value).trim()=="")
	{
		alert("Please enter the title")
		document.ywfz_form.ywfz_title.focus();
		return false;
	}
	else if((document.ywfz_form.ywfz_watch.value).trim()=="")
	{
		alert("Please enter the video link.")
		document.ywfz_form.ywfz_watch.focus();
		return false;
	}
	else if((document.ywfz_form.ywfz_code.value).trim()=="")
	{
		alert("Please enter the video code.");
		document.ywfz_form.ywfz_code.focus();
		return false;
	}
	/*else if((document.ywfz_form.ywfz_imglink.value).trim()=="")
	{
		alert("Please enter the image link.");
		document.ywfz_form.ywfz_imglink.focus();
		return false;
	}*/
	else if(document.ywfz_form.ywfz_img.value=="")
	{
		alert("Please select the display image.")
		document.ywfz_form.ywfz_img.focus();
		return false;
	}	
	else if(document.ywfz_form.ywfz_status.value=="")
	{
		alert("Please select the display status.")
		document.ywfz_form.ywfz_status.focus();
		return false;
	}
	else if(document.ywfz_form.ywfz_sidebar.value=="")
	{
		alert("Please select the sidebar display.")
		document.ywfz_form.ywfz_sidebar.focus();
		return false;
	}
}
String.prototype.trim = function() 
{
	return this.replace(/^\s+|\s+$/g,"");
}