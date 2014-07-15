<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage pulawy
 * @since Twenty Fourteen 1.0
 */

get_header();?> 
<script type="text/javascript">  
            var mapa; // obiekt globalny
            function mapaStart() 
            { 
                // tworzymy mapę satelitarną i centrujemy w okolicy Szczecina na poziomie zoom = 10
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
        <div id="mapka" style="width: 700px; height: 500px; border: 1px solid black; background: gray;">  
        <!-- tu będzie mapa -->  
        </div> 
<script type="text/javascript">  

    window.onload = mapaStart();
	<?php
        if ( have_posts() ) 
        {
                    
            while ( have_posts() ) 
            {
                the_post();

                $tmp = get_post_meta($post ->ID, '_my_meta', true);
                foreach($tmp as $tmp_meta)
                {
                    $tmp_meta = substr($tmp_meta, 0, (strlen($tmp_meta)-1));
                    echo 'drawMarker' . $tmp_meta .', {});';
                }
            }
        }
        else 
        {
            echo 'no posts found';
        }
        /* Restore original Post Data */
        wp_reset_postdata();

	?>
	</script>
	<div>

	<!--	<script type="text/javascript">  
		<?php
	/*	if ( have_posts() )
		{
			while( have_posts() )
			{
				$tmp2 = get_post_meta($post ->ID, 'my_meta_gallery', true);
        		foreach($tmp2 as $tmp_meta2)
        		{
          			echo $tmp_meta2 ;
       		 	}
			}
		}
		else
		{
			echo 'no posts found';
		} */
		?>
</script> -->
</div>
<?php
while(have_posts() ):the_post();
	the_content();
endwhile;
?>

<div>

		<?php
		if (have_posts())
		{

		
			while ( have_posts() )
			{
				the_post();
                $tmp = get_post_meta($post ->ID, 'my_meta_player', true);
                foreach($tmp as $tmp_meta)
                {
                	$tmp_metaa = wp_get_attachment_image_src( $tmp_meta[0]['film'], 'full' );
                     echo $tmp_metaa;
                }
			}
		}	
		else
		{
			echo 'post not found';
		}
		?>

	<script type="text/javascript">
	var flashvars = {};
	
		/* flv player parameters */		
		flashvars.playerpath = ""; 				
		flashvars.contentpath = "../flvplayer/content";	
		
		flashvars.video = "demo-video.flv";
		flashvars.preview = "demo-preview.jpg";						
		
	    flashvars.skin = "skin-applestyle.swf";
		flashvars.skincolor = "0x2c8cbd";
		flashvars.skinscalemaximum = "1";				
	
		flashvars.captions = "demo-captions.xml";
		
		// ...
		//see documentation for all the parameters
		
		
		/* end */		
					
		var params = {};
			params.scale = "noscale";
			params.allowfullscreen = "true";
			params.salign = "tl";   
   		 	params.base = ".";  
		
		var attributes = {};
			attributes.align = "left";   
		   
		
	/* embed flv player */			
	// adapt the path to flvplayer.swf and expressInstall.swf
	// adapt the display size of the flash file	
	swfobject.embedSWF("../flvplayer/flvplayer.swf", "videoPlayer", "650", "530", "9.0.28", "../flvplayer/expressInstall.swf", flashvars, params, attributes);
	/* end */	
	
	</script>
	
</div>
<?php get_footer();

?>