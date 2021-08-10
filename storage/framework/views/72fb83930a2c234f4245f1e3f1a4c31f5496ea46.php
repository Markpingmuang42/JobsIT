<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="map.css">
    <title>Jobs Map</title>
</head>
<body>
    <div id="map"></div>
    <script>
        var map;
        var InforObj=[];
        var centerCords={
            lat: 22.654257,
            lng:88.439802
        };
        var icon = {
            event:{
                icon:iconBase + "parking_lot_maps.png",
            },
            restaurant:{
                icon:iconBase + "library_maps.png",
            },
        };

        var markersOnMap={
            {
                LatLng:[{
                    lat:22.654257,
                    lng:88.439802
                }],
                type:'event'
            },
            {
                LatLng:[{
                    lat:22.654257,
                    lng:88.439802
                }],
                type:'restaurant'
            },
        };

        window.onload=function(){
            initMap();
        };
        function addMarkerInfo(){
            for(var i=0; i<markersOnMap.length;i++){
                const marker = new google.maps.Marker({
                    position:markersOnMap[i].LatLng[0],
                    icon:icons[markersOnMap[i].type].icon,
                    map:map
                });
            }
        }
        function initMap(){
            map=new google.maps.Map(document.getElementById('map'),{
                zoom:15,
                center:centerCords
        });
        addMarkerInfo();
    }
//ใส่ Key API 
//vvv
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3W8H9ieyuK2lr5gX6IIjYK3nwGPeIZ0I&callback=initMap" 
asyuc defer></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\Jobs_IT\resources\views/Entrepreneur/index2.blade.php ENDPATH**/ ?>