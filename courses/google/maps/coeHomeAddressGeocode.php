<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Google Maps API Example - Random Weather Map</title>

<script type="text/javascript"
   src="http://maps.google.com/maps/api/js?sensor=true"></script>

<script type="text/javascript">
   document.write('<script type="text/javascript" src="js/markermanager'
         + (document.location.search.indexOf('packed') > -1 ? '_packed' : '')
         + '.js"><' + '/script>');
</script>

<script type="text/javascript">
   //<![CDATA[

<?php 
   /*
   $json = file_get_contents( "http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/all_day.geojson");
   $phpVar = json_decode( $json );

   $mapCaption = $phpVar->metadata->title;
   $mapLocations = array();
   
   foreach ( $phpVar->features as $location )
   {
   	// printf( "<dd> Mag: %s<br>", $location->properties->mag );
   	// printf( "<dd> Place: %s<br>", $location->properties->place );
   	// printf( "<dd> Title: %s<br>", $location->properties->title );
   	// printf( "<dd> Lat: %s<br>", $location->geometry->coordinates[0] );
   	// printf( "<dd> Lng: %s<br><br>", $location->geometry->coordinates[1] );
   	// $mapLocation['mag'] = $location->properties->mag;
   	// $mapLocation['place'] = $location->properties->place;
   	$mapLocation['title'] = $location->properties->title;
   	$mapLocation['lng'] = $location->geometry->coordinates[0];
   	$mapLocation['lat'] = $location->geometry->coordinates[1];
   	
   	array_push( $mapLocations, $mapLocation );
   }

   $jsonLocations = json_encode( $mapLocations );
   // printf( "<pre>%s</pre>", json_encode( $mapLocations ) );
   // printf( "<pre>%s</pre>", print_r( $phpVar, TRUE ) );
    */
?>

   var locationsOrig = [ 
      "North Liberty, IA",
      "Iowa City, IA",
      "Kearney, NE",
      "Iola, KS",
      "Columbia, MO",
      "Longmont, CO"
   ];

   var locations = <?= $jsonLocations ?>;
   var IMAGES = [ 'sun', 'rain', 'snow', 'storm' ];
   var ICONS = [];
   var map = null;
   var mgr = null;
   var delay = 100;

   function setupMap() {
      var myOptions = {
         zoom : 3,
         center : new google.maps.LatLng(62.6630188, -157.544551),
         mapTypeId : google.maps.MapTypeId.ROADMAP
      };
      
      map = new google.maps.Map(document.getElementById('map'), myOptions);

      setupWeatherMarkers();
   }

   function getWeatherIcon() {
      var i = Math.floor(IMAGES.length * Math.random());

      if (!ICONS[i]) {
         var iconImage = new google.maps.MarkerImage('images/' + IMAGES[i]
               + '.png', new google.maps.Size(32, 32), new google.maps.Point(0,
               0), new google.maps.Point(0, 32));

         var iconShadow = new google.maps.MarkerImage('images/' + IMAGES[i]
               + '.png', new google.maps.Size(32, 59), new google.maps.Point(0,
               0), new google.maps.Point(0, 32));

         var iconShape = {
            coord : [ 1, 1, 1, 32, 32, 32, 32, 1 ],
            type : 'poly'
         };

         ICONS[i] = {
            icon : iconImage,
            shadow : iconShadow,
            shape : iconShape
         };

      }
      return ICONS[i];
   }

   function getRandomPoint() {
      var lat = 48.25 + (Math.random() - 0.5) * 14.5;
      var lng = 11.00 + (Math.random() - 0.5) * 36.0;
      return new google.maps.LatLng(Math.round(lat * 10) / 10, Math
            .round(lng * 10) / 10);
   }

   function getWeatherMarkers(n) {
      var batch = [];
      for (var i = 0; i < n; ++i) {
         var tmpIcon = getWeatherIcon();

         batch.push(new google.maps.Marker({
            position : getRandomPoint(),
            shadow : tmpIcon.shadow,
            icon : tmpIcon.icon,
            shape : tmpIcon.shape,
            title : 'Weather marker'
         }));
      }
      return batch;
   }


   function getMarkerData(data) {
      var batch = [];
      var tooltip;
      var lat;
      var lng;
      var weight;
         
      // Marker sizes are expressed as a Size of X,Y
      // where the origin of the image (0,0) is located
      // in the top left of the image.

      // Origins, anchor positions and coordinates of the marker
      // increase in the X direction to the right and in
      // the Y direction down.
      var image = {
         // Image name and location
         url : 'images/earthquakeWhite.png',
         // This marker is 20 pixels wide by 32 pixels tall.
         size : new google.maps.Size(32, 37),
         // The origin for this image is 0,0.
         origin : new google.maps.Point(0, 0),
         // The anchor for this image is the base of the flagpole at 0,32.
         anchor : new google.maps.Point(16, 37)
      };

      for (var i = 0; i < data.length; ++i) {
         // tmpIcon = getWeatherIcon();
         tooltip = data[i]['title'];
         lng = data[i]['lng'];
         lat = data[i]['lat'];
         weight = i;

         if ( i == 0 )
         {
            console.log( tooltip );
            console.log( lng );
            console.log( lat );
            console.log( weight );
         }

         var latLng = new google.maps.LatLng(lat, lng);

         var marker = new google.maps.Marker({
            position: latLng,
            map: map,
            icon: image,
            title: tooltip,
            zIndex: weight
         });

         var circle = new google.maps.Circle({
            center: latLng,
            radius: 20000,
            strokeColor: "#000000",
            strokeOpacity: 0.8,
            strokeWeight: 2,
            fillColor: "#FF0000",
            fillOpacity: 0.4,
            map: map
         });
         
         batch.push( marker );
      }

      return batch;
   }

   function getMarkerDataOrig(data) {
      var batch = [];
      var latLng = [];
      var tooltip;
      // var location;
      var weight;
         
      // Marker sizes are expressed as a Size of X,Y
      // where the origin of the image (0,0) is located
      // in the top left of the image.

      // Origins, anchor positions and coordinates of the marker
      // increase in the X direction to the right and in
      // the Y direction down.
      var image = {
         // Image name and location
         url : 'images/earthquakeWhite.png',
         // This marker is 20 pixels wide by 32 pixels tall.
         size : new google.maps.Size(32, 37),
         // The origin for this image is 0,0.
         origin : new google.maps.Point(0, 0),
         // The anchor for this image is the base of the flagpole at 0,32.
         anchor : new google.maps.Point(16, 37)
      };

      // var location = {};
      
      var geocoder = new google.maps.Geocoder();

      for (var i = 0; i < data.length; ++i) {
         // tmpIcon = getWeatherIcon();
         tooltip = data[i];
         address = data[i];
         weight = i;
         // latLng = codeAddress( address );
         // var location = new codeAddress( address );
         // lat = results[0].geometry.location.lat();
         // lng = results[0].geometry.location.lng();

         var lat = null;
         var lng = null;

         geocoder.geocode( { 'address': address }, function( results, status ) {
            if ( status == google.maps.GeocoderStatus.OK ) {
               var location = results[0].geometry.location;

               console.log( address + ": " + location );
               // lat = results[0].geometry.location.lat();
               // lng = results[0].geometry.location.lng();
               // console.log( "Inside: " + lat + ", " + lng );
               // console.log( "Inside: " + location );
               // console.log( lat );
               // console.log( lng );
               // return( location );
               // return [ lat, lng ];
               // var location = new google.maps.LatLng(latLng[0], latLng[1]);

               var marker = new google.maps.Marker({
                  position: location,
                  map: map,
                  icon: image,
                  title: tooltip,
                  zIndex: weight
               });

               var circle = new google.maps.Circle({
                  center: location,
                  radius: 20000,
                  strokeColor: "#000000",
                  strokeOpacity: 0.8,
                  strokeWeight: 2,
                  fillColor: "#FF0000",
                  fillOpacity: 0.4,
                  map: map
               });
               
               batch.push( marker );
            }
            else
            {
               console.log("Geocode was not successful: " + status );
            }
         });

         // console.log( tooltip );
         // console.log( "Outside: " + latLng );
      }

      return batch;
   }

   function codeAddress( address )
   {
      var geocoder = new google.maps.Geocoder();
      var location = {};
      var lat = null;
      var lng = null;

      geocoder.geocode( { 'address': address }, function( results, status ) {
         if ( status == google.maps.GeocoderStatus.OK ) {
            location = results[0].geometry.location;
            lat = results[0].geometry.location.lat();
            lng = results[0].geometry.location.lng();
            console.log( "Inside: " + lat + ", " + lng );
            // console.log( "Inside: " + location );
            // console.log( lat );
            // console.log( lng );
            // return( location );
            // return [ lat, lng ];
         }
         else
         {
            console.log("Geocode was not successful: " + status );
         }
      });

      // return( location );
      // return [ lat, lng ];
      callback( location );
   }
   
   function setupWeatherMarkers() {
      mgr = new MarkerManager(map);

      google.maps.event.addListener(mgr, 'loaded', function() {
         // mgr.addMarkers(getMarkerData(locations), 0);
         mgr.addMarkers(getMarkerDataOrig(locationsOrig), 0);

         mgr.refresh();
      });
   }
   
   //]]>
</script>
</head>

<body onload="setupMap()">

   <div id="map" style="margin: 5px auto; width: 100%;"></div>

   <div style="text-align: center; font-size: large;">
      <?= $mapCaption ?>
   </div>
</body>
</html>

