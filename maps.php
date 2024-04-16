<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Flagra's Guide Map</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="https://api.mapbox.com/mapbox-gl-js/v3.2.0/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v3.2.0/mapbox-gl.js"></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.3.1/mapbox-gl-directions.js"></script>
    <link rel="stylesheet"
          href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.3.1/mapbox-gl-directions.css"
          type="text/css">

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
        style: 'mapbox://styles/mapbox/streets-v12',
        center: [11.869395, 54.768070],
        zoom: 12.4,
    });

    map.addControl(
        new MapboxDirections({
            accessToken: mapboxgl.accessToken,
            unit: 'metric',
            language: 'DA-DK',
        }),
        'top-left'
    );

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

    customMarkerEl.style.backgroundImage = 'url(images/paw.png)';
    customMarkerEl.style.backgroundSize = 'cover';
    customMarkerEl.style.width = '40px';
    customMarkerEl.style.height = '40px';
    customMarkerEl.style.borderRadius = '50%';

    customMarkerEl2.style.backgroundImage = 'url(images/waves4.png)';
    customMarkerEl2.style.backgroundSize = 'cover';
    customMarkerEl2.style.width = '40px';
    customMarkerEl2.style.height = '40px';
    customMarkerEl2.style.borderRadius = '50%';

    customMarkerEl3.style.backgroundImage = 'url(images/badebold1.png)';
    customMarkerEl3.style.backgroundSize = 'cover';
    customMarkerEl3.style.width = '40px';
    customMarkerEl3.style.height = '40px';
    customMarkerEl3.style.borderRadius = '50%';

    customMarkerEl4.style.backgroundImage = 'url(images/kogg1.png)';
    customMarkerEl4.style.backgroundSize = 'cover';
    customMarkerEl4.style.width = '40px';
    customMarkerEl4.style.height = '40px';
    customMarkerEl4.style.borderRadius = '50%';

    customMarkerEl5.style.backgroundImage = 'url(images/vippev3.png)';
    customMarkerEl5.style.backgroundSize = 'cover';
    customMarkerEl5.style.width = '40px';
    customMarkerEl5.style.height = '40px';
    customMarkerEl5.style.borderRadius = '50%';

    customMarkerEl6.style.backgroundImage = 'url(images/troeje3.png)';
    customMarkerEl6.style.backgroundSize = 'cover';
    customMarkerEl6.style.width = '40px';
    customMarkerEl6.style.height = '40px';
    customMarkerEl6.style.borderRadius = '50%';

    const popup1 = new mapboxgl.Popup({className: 'popup'}).setHTML(`
    <div class="popup">
    <div class="popup-content">
        <p>Dyr er så sjove!<br>Hvad er dit yndlingsdyr og hvorfor?</p>
        <div class="left"><img id="flagra" src="images/flagraleft.png" alt="flagra venstre"></div>
        <div>
            <button class="button" id="openPopupButton1">Ankommet?</button>
         </div>
        </div>
    </div>
`);
    const popup2 = new mapboxgl.Popup({className: 'popup'}).setHTML(`
<div class="popup">
<div class="popup-content">
        <img id="flagra" src="images/flagradown.png" alt="flagra ned"><br>
        <p>Kan du også høre den gode musik der kommer nede fra Kajen?<br>Kan du finde statuen på vej hen til Kajen?</p>
   <div><button class="button" id="openPopupButton2">Ankommet?</button></div>
    </div>
    </div>
`);
    const popup3 = new mapboxgl.Popup({className: 'popup'}).setHTML(`
<div class="popup">
<div class="popup-content">
        <p>Det er godt nok blevet varmt!<br>Måske et dyp i vandet kunne være godt.<br>Hvor mange GRÅ huse kan du finde på vejen hen til badebroen?</p>
       <div class="right"><img id="flagra"  src="images/flagraright.png" alt="flagra højre"></div>
<div><button class="button" id="openPopupButton3">Ankommet?</button></div>
</div>
</div>
`);
    const popup4 = new mapboxgl.Popup({className: 'popup'}).setHTML(`
<div class="popup">
<div class="popup-content">
        <p>Er du også blevet lidt sulten?<br>Kan du finde mig 15 gange inden vi når cafeen?<br>Måske jeg har en ekstra lille opgave.</p>
        <div class="right"><img id="flagra" src="images/flagraright.png" alt="flagra højre"></div>
<div><button class="button" id="openPopupButton4">Ankommet?</button></div>
</div>
</div>
`);
    const popup5 = new mapboxgl.Popup({className: 'popup'}).setHTML(`
<div class="popup">
<div class="popup-content">
        <p>Jeg elsker at være på legepladsen.<br>Hvor mange gange kan du finde mig på vejen derhen?</p>
        <div class="right"><img id="flagra" src="images/flagraright.png" alt="flagra højre"></div>
<div><button class="button" id="openPopupButton5">Ankommet?</button></div>
</div>
</div>
`);
    const popup6 = new mapboxgl.Popup({className: 'popup'}).setHTML(`
<div class="popup">
<div class="popup-content">
        <p>Så mange pæne ting, der ikke har noget sted at bo!<br>Der er 3 lyskryds inden du når hen til genbrugsbutikken.<br>Kan du finde dem alle sammen?</p>
        <div class="right"><img id="flagra" src="images/flagraright.png" alt="flagra højre"></div>
<div><button class="button" id="openPopupButton6">Ankommet?</button></div>
</div>
</div>
`);

    const marker1 = new mapboxgl.Marker(customMarkerEl)
        .setLngLat([11.890960, 54.766383])
        .setPopup(popup1)
        .addTo(map);


    const marker2 = new mapboxgl.Marker(customMarkerEl2)
        .setLngLat([11.862117, 54.770114])
        .setPopup(popup2)
        .addTo(map);


    const marker3 = new mapboxgl.Marker(customMarkerEl3)
        .setLngLat([11.848569, 54.782692])
        .setPopup(popup3)
        .addTo(map);


    const marker4 = new mapboxgl.Marker(customMarkerEl4)
        .setLngLat([11.863070, 54.772738])
        .setPopup(popup4)
        .addTo(map);

    const marker5 = new mapboxgl.Marker(customMarkerEl5)
        .setLngLat([11.8708083, 54.7706267])
        .setPopup(popup5)
        .addTo(map);

    const marker6 = new mapboxgl.Marker(customMarkerEl6)
        .setLngLat([11.878360, 54.769360])
        .setPopup(popup6)
        .addTo(map);


    popup1.on('open', () => {
        const button = popup1.getElement().querySelector('#openPopupButton1');
        if (button) {
            button.addEventListener('click', () => {

                popup1.remove();
                const newPopup = new mapboxgl.Popup({offset: 25});

                newPopup.setLngLat(popup1.getLngLat([11.890960, 54.766383]));
                newPopup.setHTML("<div class='popup'><div class='popup-content'><p>Vidste du godt at pingviner ikke kun har deres tuxido på for at se godt ud, men det hjælper dem faktisk med at gemme sig for farlige rovdyr der vil spise dem i vandet.</p><br><div class='left'><img id='flagra' src='images/flagraleft.png' alt='left'></div></div></div>");
                newPopup.addTo(map);
            });
        }
    });

    popup2.on('open', () => {
        const button = popup2.getElement().querySelector('#openPopupButton2');
        if (button) {
            button.addEventListener('click', () => {

                popup2.remove();
                const newPopup = new mapboxgl.Popup({offset: 25});

                newPopup.setLngLat(popup2.getLngLat([11.862117, 54.770114]));
                newPopup.setHTML("<div class='popup'><div class='popup-content'><img id='flagra' src='images/flagradown.png' alt='upsidedown'><br><p>Jeg glæder mig sådan til at komme ned til kajen for at høre musik, men faktisk kan jeg og alle mine flagermus-venner høre musikken hele 17 meter væk!" +
                    "<br>Det er cirka 243 mælkekartoner stillet op ved siden af hinanden!</p><br></div></div>");
                newPopup.addTo(map);
            });
        }
    });

    popup3.on('open', () => {
        const button = popup3.getElement().querySelector('#openPopupButton3');
        if (button) {
            button.addEventListener('click', () => {

                popup3.remove();
                const newPopup = new mapboxgl.Popup({offset: 25});

                newPopup.setLngLat(popup3.getLngLat([11.848569, 54.782692]));
                newPopup.setHTML("<div class='popup'><div class='popup-content'><p>Vidste du at vi flagermus ikke kun kan flyve, men faktisk også er ret gode til at svømme?<br>Hvad med dig? Vis mig om du er lige så god til at svømme som jeg er!</p><br><div class='right'><img id='flagra' src='images/flagraright.png' alt='right'></div></div></div>");
                newPopup.addTo(map);
            });
        }
    });

    popup4.on('open', () => {
        const button = popup4.getElement().querySelector('#openPopupButton4');
        if (button) {
            button.addEventListener('click', () => {

                popup4.remove();
                const newPopup = new mapboxgl.Popup({offset: 25});

                newPopup.setLngLat(popup4.getLngLat([11.863070, 54.772738]));
                newPopup.setHTML("<div class='popup'><div class='popup-content'><p>Nam! Så er det tid til at spise! Vidste du, at vi flagermuse elsker frugter, som for eksempel figner, mangoer og bananer?<br>Så unger - husk at gøre som flagermusen, og spis sundt!</p><br><div class='right'><img id='flagra' src='images/flagraright.png' alt='right'></div></div></div>");
                newPopup.addTo(map);
            });
        }
    });

    popup5.on('open', () => {
        const button = popup5.getElement().querySelector('#openPopupButton5');
        if (button) {
            button.addEventListener('click', () => {

                popup5.remove();
                const newPopup = new mapboxgl.Popup({offset: 25});

                newPopup.setLngLat(popup5.getLngLat([11.8708083, 54.7706267]));
                newPopup.setHTML("<div class='popup'><div class='popup-content'><p>Vidste du at man kan låne en fodbold eller petanquekugler på biblioteket på den anden side af vejen?<br>Man skal bare spørge pænt.</p><br><div class='right'><img id='flagra' src='images/flagraright.png' alt='right'></div></div></div>");
                newPopup.addTo(map);
            });
        }
    });

    popup6.on('open', () => {
        const button = popup6.getElement().querySelector('#openPopupButton6');
        if (button) {
            button.addEventListener('click', () => {

                popup6.remove();
                const newPopup = new mapboxgl.Popup({offset: 25});

                newPopup.setLngLat(popup6.getLngLat([11.878360, 54.769360]));
                newPopup.setHTML("<div class='popup'><div class='popup-content'><p>Vidste du at du kan aflevere dit gamle, hullede tøj til genbrug?<br>Selvom det måske ikke kan blive solgt i butikkerne bliver det genbrugt til at lave nyt stof og bliver på den måde til nyt tøj.</p><br><div class='right'><img id='flagra' src='images/flagraright.png' alt='right'></div></div></div>");
                newPopup.addTo(map);
            });
        }
    });
</script>
</body>
</html>