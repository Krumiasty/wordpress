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

<div id="mapka">  
	<!-- tu będzie mapa -->  
</div> 

<div id="tresc">
<?php
	while(have_posts() ):the_post();
	the_content();
	endwhile;
?>
</div>
<div id="galeria">
<?php
	while(have_posts() ):the_post();
	the_secondary_content();
	endwhile;
?>

</div>

<div id="player">

</div>
<div id="myElement">Loading the player...</div>
<script type="text/javascript">
    jwplayer("myElement").setup({
        file: "<?php
if (have_posts())
{
	while ( have_posts() )
	{
		the_post();
		foreach( get_cfc_meta( 'my_meta_player' ) as $key => $value )
		{
			$tmp = the_cfc_field( 'my_meta_player','film', false, $key );
			echo  $tmp;
		}
	}
}	
else
{
	echo 'post not found';
}
?>",
        image: "<?php
if (have_posts())
{
	while ( have_posts() )
	{
		the_post();
		foreach( get_cfc_meta( 'my_meta_player' ) as $key => $value )
		{
			$tmp = the_cfc_field( 'my_meta_player','grafika', false, $key );
			echo  $tmp;
		}
	}
}	
else
{
	echo 'post not found';
}
?>",
        width: 640,
        height: 360
    });
</script>

<div id="ws">
<?php
	if (have_posts())
	{		
		while (have_posts())
		{
			the_post();
			$ws = get_post_meta($post->ID, 'my_meta_ws', true);
			if($ws ==! 0)
			{
				$kodmeta= get_post_meta($post-> ID, 'my_meta_ws', true );
				$urlkod= $kodmeta[0]['wirtualny-spacer'];
				if($kodmeta ==! 0 && $urlkod ==! 0)
				{
					foreach ($ws as $spacer)
					{
						$urlgraf= wp_get_attachment_image_src($spacer['ikona'],full);
						echo '<li><a class="fancybox-iframe" href =" '.$urlkod.'"><img src="'.$urlgraf[0].'"></a></li>';
					}
				}
			}	
		}
	}
?>
</div>
	<script type="text/javascript">  

	mapaStart();
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
				echo 'drawMarker' . $tmp_meta .', null ,{});';
			}
		}
	}
/* Restore original Post Data */
wp_reset_postdata();

?>
</script>

<?php 
	get_footer();
?>