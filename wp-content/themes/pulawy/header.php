
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN'
	'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage pulawy
 * @since Twenty Fourteen 1.0
 */
wp_head();
?>
<html xmlns="http://www.w3.org/1999/xhtml" 
<?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />        
</head>
<body onload="mapaStart()">
