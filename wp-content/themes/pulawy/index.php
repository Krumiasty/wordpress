<?php
get_header();
?>
            
        <div id="mapka">  
        <!-- tu będzie mapa -->  
        </div> 

        </div>
            <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
            <script type="text/javascript">  

        	   mapaStart();

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
                    /* Restore original Post Data */
                wp_reset_postdata();

               ?>

            </script>
        </div>   
<?php
get_footer();
?>
