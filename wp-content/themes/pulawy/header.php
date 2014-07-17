
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->

<html xmlns="http://www.w3.org/1999/xhtml" 
<?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/swfobject.js"></script>
​<script src="<?php bloginfo('template_url');?>/jwplayer/jwplayer.js" ></script>
<script>jwplayer.key="L6lzKGL1KIp8mjLpIA/naiTuF5MfyBf4iCoYMQ==";</script>
<?php wp_head(); ?>

	<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />        
    
</head>
<body>
	<div id="wrapper">
		<div id="menu">

		</div> <!--menu-->
   <script type="text/javascript">  
    var mapa; // obiekt globalny
 	function mapaStart() 
    { 
        // tworzymy mapę satelitarną i centrujemy w okolicy Pulaw na poziomie zoom = 11
        var wspolrzedne = new google.maps.LatLng(51.418886, 21.969609);
        var opcjeMapy = {
            zoom: 11,
            center: wspolrzedne,
        };
        mapa = new google.maps.Map(document.getElementById("mapka"), opcjeMapy);    
    } 
    function drawMarker(lat, lng, options)
    {
        options.position = new google.maps.LatLng(lat, lng);

        options.map = mapa;
        var marker = new google.maps.Marker(options);
    }
    </script>
