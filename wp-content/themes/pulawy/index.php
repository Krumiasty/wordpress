<?php
get_header();
?>
           
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
    /*            var punkt  = new google.maps.LatLng(51.418886, 21.969609);  
                var opcjeMarkera =
                {
                    position: punkt,
                    map: mapa,
                    draggable: true,
                    clickable: true,
                }
                var marker = new google.maps.Marker(opcjeMarkera);*/
            } 
        -->
        </script>  
        <div id="mapka" style="width: 700px; height: 500px; border: 1px solid black; background: gray;">  
        <!-- tu będzie mapa -->  
        </div> 
        <div>
              <div>
               <?php
                //  var i = 0;
                $custom_fields = get_post_custom(2);
                $my_custom_field = $custom_fields['_my_meta'];
                foreach ( $my_custom_field as $key => $value ) 
                {
                    echo $value[1][0] . "<br />";
                }
                $my_meta = get_post_meta($post->ID,’_my_meta’,TRUE);
                echo $my_meta['number'];
               // while()
             //   {
             //       if($value[i] >)
            //    }
              /*  $meta_value = get_post_custom_values( '_my_meta' );
                foreach ( $meta_value as $key => $value ) 
                {
                    echo "$key  => $value ( '_my_meta' )<br />"; 
                }
                */
               ?>
                </div>
            <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
            <script type="text/javascript">  
        	   window.onload = mapaStart();
               var marker;

        /*        function placeMarker(location)
                {
                    if ( marker )
                    {
                        marker.setPosition(location);
                    } 
                    else 
                    {
                        marker = new google.maps.Marker(
                        {
                        position: location,
                        map: mapa
                        }
                        );
                    }
                }

                google.maps.event.addListener(mapa, 'click', function(event) 
                {
                    placeMarker(event.latLng);
                }
                );*/
              
                var tmp = new Array(51.418886, 21.969609);
                var myLatlng = new google.maps.LatLng(tmp[0],tmp[1]);
                alert(tmp);
                marker = new google.maps.Marker(
                {
                    position: myLatlng,
                    map: mapa,
                }
                );
            </script>
        </div>   
<?php
get_footer();
?>
