<?php
get_header();
?>




<!--
<?php
// The Query
$args= array(
'post_type' => 'post',
	);
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) 
{
	echo '<ul>';
	while ( $the_query->have_posts() )
	{
		$the_query->the_post();	
?>
		<div id = "mapka">
		<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
		src="https://maps.google.pl/maps?ie=UTF8&amp;ll=51.42552,21.974668&amp;spn=0.150921,0.41851&amp;t=m&amp;z=12&amp;output=embed"></iframe><br />
		<small><a href="https://maps.google.pl/maps?ie=UTF8&amp;ll=51.42552,21.974668&amp;spn=0.150921,0.41851&amp;t=m&amp;z=12&amp;source=embed" style="color:#0000FF;text-align:left">Wyświetl większą mapę</a></small>
		</div>
		<div id = "2">
			<b><?php the_title();?></b>
		</div>
		<div id = "3">
			33333
		</div>
		<?php 
		echo '<li>' . get_the_title() . '</li>';
	}
	echo '</ul>';
} else 
{
	echo '// no posts found';
}
/* Restore original Post Data */
wp_reset_postdata();
?>!-->
           
        <script type="text/javascript">  
        <!--
            var mapa; // obiekt globalny
            function mapaStart() 
            { 
                // tworzymy mapę satelitarną i centrujemy w okolicy Szczecina na poziomie zoom = 10
                var wspolrzedne = new google.maps.LatLng(51.418886, 21.969609);
                var opcjeMapy = {
                    zoom: 10,
                    center: wspolrzedne,
           //         mapTypeId: google.maps.MapTypeId.SATELLITE
                };
                mapa = new google.maps.Map(document.getElementById("mapka"), opcjeMapy);
                 
                // stworzenie markera
                var punkt  = new google.maps.LatLng(51.418886, 21.969609);  
                var opcjeMarkera =
                {
                    position: punkt,
                    map: mapa,
                    draggable: true,
                    clickable: true,
                }
                var marker = new google.maps.Marker(opcjeMarkera);
            } 
        -->
        </script>  
        <div id="mapka" style="width: 700px; height: 500px; border: 1px solid black; background: gray;">  
        <!-- tu będzie mapa -->  
        </div> 
        <div>
        	
        </div>   
<?php
get_footer();
?>
