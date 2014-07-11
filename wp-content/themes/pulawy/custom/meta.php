<div class="my_meta_control">
      <div id="mapka" style="width: 700px; height: 500px; border: 1px solid black; background: gray;">  
        <!-- tu będzie mapa -->  
        </div> 
     <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
      <script type="text/javascript">  
         window.onload = mapaStart();
            var mapa; // obiekt globalny
            var flag = true;
            function mapaStart() 
            { 
                // tworzymy mapę satelitarną i centrujemy w okolicy Pulaw na poziomie zoom = 10
                var wspolrzedne = new google.maps.LatLng(51.418886, 21.969609);
                var opcjeMapy = {
                    zoom: 10,
                    center: wspolrzedne,
                };
                mapa = new google.maps.Map(document.getElementById("mapka"), opcjeMapy);
                 
                // stworzenie markera
               // var punkt  = new google.maps.LatLng(51.418886, 21.969609);  
            /*    var opcjeMarkera =
                {
                    position: punkt,
                    map: mapa,
                    draggable: true,
                    clickable: true,
                }
                var marker = new google.maps.Marker(opcjeMarkera);
            */  
                
                google.maps.event.addListener(mapa, "click", function(event)
                {   
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
                            map: mapa,
                        }
                        );
                        var latlng_num = event.latLng;
                        flag = false;
                    }
                  
                    
                 /*   google.maps.event.addListener(marker, "click", function()
                    {
                        infowindow.open(mapa, marker);
                        
                    }
                    );*/

                    coords = document.getElementById("xx");
                    coords.value = latlng_num;
                }
                );
            }; 
       
        </script>
    <p> </p>
    <label>Współrzędne</label>
    <!-- " -->
    <p>
        <input id="xx" type="text" name="_my_meta[name]" value="<?php if(!empty($meta['name'])) echo $meta['name']; ?>"/>
    <!--    <span>wpowadzone współrzędne</span> -->
    </p>
 
    <label>Opis <span>(optional)</span></label>
 
    <p>
        <textarea name="_my_meta[description]" rows="3">
            <?php if(!empty($meta['description'])) echo $meta['description']; ?></textarea>
        <span>Enter in a description</span>
    </p>
 
</div>