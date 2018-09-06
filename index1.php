<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document Dimensions</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
function jqUpdateSize(){
    // Get the dimensions of the viewport
    var width = jQuery(window).width();
    var height = jQuery(window).height();
    jQuery('#jqWidth').html("Window Width : "+width);      // Display the width
    jQuery('#jqHeight').html("Window Height : "+height);    // Display the height
	jQuery(".wrapper-body").css({"width":+width});
	
	var DocumentWidth = jQuery(document).width();
    var DocumentHeight = jQuery(document).height();
	jQuery('#docWidth').html("Document Width : "+DocumentWidth);      // Display the width
    jQuery('#docHeight').html("Document Height : "+DocumentHeight);    // Display the height
	
	
	
};
jQuery(document).ready(jqUpdateSize);    // When the page first loads
jQuery(window).resize(jqUpdateSize);     // When the browser changes size
</script>
</head>

<body>
<div id="jqWidth"></div>
<div id="jqHeight"></div>
<div id="docWidth"></div>
<div id="docHeight"></div>
</body>
</html>