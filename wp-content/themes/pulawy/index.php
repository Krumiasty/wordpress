<?php
get_header();
?>
           
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
        <div id="mapka" style="width: 700px; height: 500px; border: 1px solid black; background: gray;">  
        <!-- tu będzie mapa -->  
        </div> 
        <div>
              <div>
               
                </div>
            <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
            <script type="text/javascript">  

        	   window.onload = mapaStart();
               var marker;

                <?php
                $args=array(
                'post_type'=> 'page',
                );

                // The Query
                $the_query = new WP_Query( $args );

                // The Loop
                if ( $the_query->have_posts() ) 
                {
                    
                    while ( $the_query->have_posts() ) 
                    {
                        $the_query->the_post();

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
        </div>   
<?php
get_footer();
?>
