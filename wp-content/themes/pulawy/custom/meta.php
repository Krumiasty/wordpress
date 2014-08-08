<div class="my_meta_control">
      <div id="mapka" style= "height:500px; width:100%;">  
        <!-- tu będzie mapa -->  
        </div> 
     <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
      <script type="text/javascript">  

      // window.onload = mapaStart();
            var mapa; // obiekt globalny
            var flag = true;
            var oldflag = true;
            function mapaStart() 
            { 
                // tworzymy mapę satelitarną i centrujemy w okolicy Pulaw na poziomie zoom = 11
                var wspolrzedne = new google.maps.LatLng(51.418886, 21.969609);
                var opcjeMapy = {
                    zoom: 11,
                    center: wspolrzedne,
                };
                mapa = new google.maps.Map(document.getElementById("mapka"), opcjeMapy);

                if(oldflag)
                {
                    <?php if(!empty($meta['name'])) 
                        ?> var oldpos = new google.maps.LatLng<?php echo $meta['name']; ?>;
                    var oldmarker = new google.maps.Marker(
                    {
                        position: oldpos
                    }
                    );

                    var infowindow = new google.maps.InfoWindow(
                    {
                        content:"stary znacznik .  "
                    }
                    );

                    google.maps.event.addListener(oldmarker, 'mouseover', function()
                    {
                        infowindow.open(mapa, oldmarker);
                    }
                    );

                    google.maps.event.addListener(oldmarker, 'mouseout', function()
                    {
                        infowindow.close(mapa, oldmarker);
                    }
                    );
                oldmarker.setMap(mapa);
                oldflag = false;
                }
               


                google.maps.event.addListener(mapa, "click", function(event)
                {   
                    if(oldflag == false)
                    {
                        oldmarker.setMap(null);
                    }
                    if(flag == false)
                    {
                        marker.setMap(null);
                        flag = true;
                    }
                    while(flag)
                    {
                        marker = new google.maps.Marker(
                        {
                            position: event.latLng,
                        }
                        );
                        marker.setMap(mapa);

                        var infowindow = new google.maps.InfoWindow(
                        {
                            content:"nowy znacznik .   "
                        }
                        );

                        google.maps.event.addListener(marker, 'mouseover', function()
                        {
                            infowindow.open(mapa, marker);
                        }
                        );

                        google.maps.event.addListener(marker, 'mouseout', function()
                        {
                            infowindow.close(mapa, marker);
                        }
                        );
                        var latlng_num = event.latLng;
                        flag = false;
                    }
                  
                    coords = document.getElementById("xx");
                    coords.value = latlng_num;
                }
                );
            }; 
        google.maps.event.addDomListener(window, 'load', mapaStart);
        </script>
    <p> </p>
    <label>Współrzędne</label>
    <p>
        <input id="xx" type="text" name="_my_meta[name]" value="<?php if(!empty($meta['name'])) 
                                                                        echo $meta['name']; ?>"/>
    <!--    <span>wpowadzone współrzędne</span> -->
    </p>
    <label>Opis</label>
    <p>
        <textarea name="_my_meta[description]" rows="3">
            <?php 
            if(!empty($meta['description'])) 
                echo $meta['description'];
                 ?>
        </textarea>
    </p>
</div>