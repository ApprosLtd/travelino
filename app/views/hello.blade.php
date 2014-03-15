<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="/packages/bootstrap/css/bootstrap.min.css">
    
</head>
<body>
  <div class="container">
    <div class="row" style="margin: 20px 0;">
      <div class="col-lg-3">
        <ul>
        <?
        if (isset($regions) AND count($regions) > 0) {
            foreach ($regions AS $region) {
                $lang   = $region->lang();
                $center = $region->center();
        ?>
          <li><a data-lat="<?= $center->lat ?>" data-lng="<?= $center->lng ?>" data-coordinates="<?= $region->coordinates() ?>" class="item" href="<?= $region->RegionID ?>"><?= $lang ? $lang->RegionName : '<span style="color:red">' . $region->RegionName . '</span>' ?></a></li>
        <?
            }
        }
        ?>
        </ul>
      </div>
      <div class="col-lg-9 content">
        <div id="map-canvas" style="height: 500px;"></div>
      </div>
    </div>
  </div>
  
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
  <script>
    
    var map, bermudaTriangle;
    
    google.maps.event.addDomListener(window, 'load', function(){
        map = new google.maps.Map(document.getElementById('map-canvas'), {
            zoom: 5,
            center: new google.maps.LatLng(24.886436490787712, -70.2685546875),
            mapTypeId: google.maps.MapTypeId.TERRAIN
        });
    });
    
    function setPologin(coordinates){
        
        coordinates = coordinates.split(':');
        
        var triangleCoords = [];
        
        $.each(coordinates, function(index, coordinate){
            coordinate = coordinate.split(';');            
            triangleCoords.push( new google.maps.LatLng(coordinate[0], coordinate[1]) );
        });
        
        bermudaTriangle = new google.maps.Polygon({
            paths: triangleCoords,
            strokeColor: '#FF0000',
            strokeOpacity: 0.8,
            strokeWeight: 3,
            fillColor: '#FF0000',
            fillOpacity: 0.35
        });
        
        bermudaTriangle.setMap(map);
    }
  
    $('.item').on('click', function(){
        
        map.setCenter( new google.maps.LatLng($(this).data('lat'), $(this).data('lng')) );
        
        setPologin( $(this).data('coordinates') );
        
        return false;
    });
  </script>
  
</body>
</html>
