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
        center: [11.869395, 54.768070],
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

    customMarkerEl.style.backgroundImage = 'url(images/paw.png)'; // Replace PATH_TO_YOUR_IMAGE with the path to your custom marker image
    customMarkerEl.style.backgroundSize = 'cover';
    customMarkerEl.style.width = '40px'; // Adjust width as needed
    customMarkerEl.style.height = '40px'; // Adjust height as needed
    customMarkerEl.style.borderRadius = '50%';

    customMarkerEl2.style.backgroundImage = 'url(images/waves4.png)'; // Replace PATH_TO_YOUR_IMAGE with the path to your custom marker image
    customMarkerEl2.style.backgroundSize = 'cover';
    customMarkerEl2.style.width = '40px'; // Adjust width as needed
    customMarkerEl2.style.height = '40px'; // Adjust height as needed
    customMarkerEl2.style.borderRadius = '50%';

    customMarkerEl3.style.backgroundImage = 'url(images/badebold1.png)'; // Replace PATH_TO_YOUR_IMAGE with the path to your custom marker image
    customMarkerEl3.style.backgroundSize = 'cover';
    customMarkerEl3.style.width = '40px'; // Adjust width as needed
    customMarkerEl3.style.height = '40px'; // Adjust height as needed
    customMarkerEl3.style.borderRadius = '50%';

    customMarkerEl4.style.backgroundImage = 'url(images/kogg1.png)'; // Replace PATH_TO_YOUR_IMAGE with the path to your custom marker image
    customMarkerEl4.style.backgroundSize = 'cover';
    customMarkerEl4.style.width = '40px'; // Adjust width as needed
    customMarkerEl4.style.height = '40px'; // Adjust height as needed
    customMarkerEl4.style.borderRadius = '50%';

    customMarkerEl5.style.backgroundImage = 'url(images/vippev3.png)'; // Replace PATH_TO_YOUR_IMAGE with the path to your custom marker image
    customMarkerEl5.style.backgroundSize = 'cover';
    customMarkerEl5.style.width = '40px'; // Adjust width as needed
    customMarkerEl5.style.height = '40px'; // Adjust height as needed
    customMarkerEl5.style.borderRadius = '50%';

    customMarkerEl6.style.backgroundImage = 'url(images/troeje3.png)'; // Replace PATH_TO_YOUR_IMAGE with the path to your custom marker image
    customMarkerEl6.style.backgroundSize = 'cover';
    customMarkerEl6.style.width = '40px'; // Adjust width as needed
    customMarkerEl6.style.height = '40px'; // Adjust height as needed
    customMarkerEl6.style.borderRadius = '50%';


    const marker1 = new mapboxgl.Marker(customMarkerEl)
        .setLngLat([11.890960, 54.766383])
        .addTo(map);


    const marker2 = new mapboxgl.Marker(customMarkerEl2)
        .setLngLat([11.862117, 54.770114])
        .addTo(map);


    const marker3 = new mapboxgl.Marker(customMarkerEl3)
        .setLngLat([11.848569, 54.782692])
        .addTo(map);


    const marker4 = new mapboxgl.Marker(customMarkerEl4)
        .setLngLat([11.863070, 54.772738])
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
