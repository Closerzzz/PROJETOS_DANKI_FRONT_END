window.onload = function(){

     var map;

     function initiallize(){
        var mapProp = {
            center:new google.maps.LatLng(-23.68851122834717, -46.627858581412355),
            scrollwheel:false,
            zoom:12,
            MapTypeId:google.maps.MapTypeId.ROADMAP
        }
        map = new google.maps.Map(document.getElementById("map"),mapProp);
     }
     function addMarker(lat,long,icon,content){
        var latLng  = {'lat':lat,'lng':long};
        var marker = new google.maps.Marker({
            position:latlng,
            map:map,
            icon:icon
        });

        var infoWindow = new gooogle.maps.infoWindow({
            contet:content,
            maxWidth:200,
            pixelOffset: new google.maps.Size(0,20)
        });
        google.maps.event.addListener(marker,'click',function(){
            infoWindow.open(map,marker)
        });
     }
     var conteudo = '<p style = "color:black;font-size:13px;paddding 10px 0">Meu endereço</p>';

     initiallize();
     addMarker(-23.689080, -46.628190,'',conteudo);
}