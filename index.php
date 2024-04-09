<?php
require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="utf-8">
	
	<title>Flagra's Guide</title>

    <meta name="robots" content="All">
	<meta name="author" content="Udgiver">
	<meta name="copyright" content="Information om copyright">
	
	<link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="https://api.mapbox.com/mapbox-gl-js/v3.2.0/mapbox-gl.css" rel="stylesheet">

    <script type="module" src="./index.js"></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/v3.2.0/mapbox-gl.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<div class="row justify-content-center">
    <div id="map">
    </div>
</div>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoidG9uMDAxIiwiYSI6ImNsdXMyZjJocjBnMHkya24wcXgwY2Z6Z3IifQ.IBOKpqMvOrn3_6oxvapjsA';
    const map = new mapboxgl.Map({
        container: 'map',
        // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
        style: 'mapbox://styles/mapbox/streets-v12',
        center: [11.8729232, 54.767849],
        zoom: 12.5
    });

    const customMarkerEl = document.createElement('div');
    customMarkerEl.className = 'custom-marker';

    const customMarkerEl2 = document.createElement('div');
    customMarkerEl2.className = 'custom-marker';

    const customMarkerEl3 = document.createElement('div');
    customMarkerEl3.className = 'custom-marker';

    const customMarkerEl4 = document.createElement('div');
    customMarkerEl4.className = 'custom-marker';

    const customMarkerEl5 = document.createElement('div');
    customMarkerEl5.className = 'custom-marker';

    const customMarkerEl6 = document.createElement('div');
    customMarkerEl6.className = 'custom-marker';

    const marker1 = new mapboxgl.Marker(customMarkerEl)
        .setLngLat([11.8905921, 54.7668023])
        .addTo(map);

    const marker2 = new mapboxgl.Marker(customMarkerEl2)
        .setLngLat([11.862117, 54.770114])
        .addTo(map);

    const marker3 = new mapboxgl.Marker(customMarkerEl3)
        .setLngLat([11.848688, 54.7826153])
        .addTo(map);

    const marker4 = new mapboxgl.Marker(customMarkerEl4)
        .setLngLat([11.8615789, 54.7732872])
        .addTo(map);

    const marker5 = new mapboxgl.Marker(customMarkerEl5)
        .setLngLat([11.8708083, 54.7706267])
        .addTo(map);

    const marker6 = new mapboxgl.Marker(customMarkerEl6)
        .setLngLat([11.878360, 54.769360])
        .addTo(map);



</script>

</body>
</html>
