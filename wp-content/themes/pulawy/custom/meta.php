<div class="my_meta_control">
      <div id="mapka" style="width: 700px; height: 500px; border: 1px solid black; background: gray;">  
        <!-- tu będzie mapa -->  
        </div> 
     <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
      <script type="text/javascript">  
        <!--
            var mapa; // obiekt globalny
            function mapaStart() 
            { 
             //  alert('goo');
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
            } ;
        mapaStart();
        </script>
    <p> </p>
 
    <label>Name</label>
 
    <p>
        <input type="text" name="_my_meta[name]" value="<?php if(!empty($meta['name'])) echo $meta['name']; ?>"/>
        <span>Enter in a name</span>
    </p>
 
    <label>Description <span>(optional)</span></label>
 
    <p>
        <textarea name="_my_meta[description]" rows="3">
            <?php if(!empty($meta['description'])) echo $meta['description']; ?></textarea>
        <span>Enter in a description</span>
    </p>
 
</div>