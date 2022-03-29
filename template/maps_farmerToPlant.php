<!DOCTYPE html>
<html lang="en">
    <style>
        #map {
            position: absolute;
            top: 0;
            bottom: 0;
            width: 100%;
        }
        .marker {
            background-image: url('image/christmas-tree.png');
            background-size: cover;
            width: 25px;
            height: 25px;
            cursor: pointer;
        }
        .farmer {
            background-image: url('image/farmer.png');
            background-size: contain;
            background-repeat: no-repeat;
            width: 25px;
            height: 25px;
            cursor: pointer;
        }
        .mapboxgl-popup {
            max-width: 200px;
        }
        .mapboxgl-popup-content {
            text-align: center;
            font-family: 'Open Sans', sans-serif;
        }
    </style>
    <div id="map"></div>
    <script>
    mapboxgl.accessToken = 'pk.eyJ1IjoicGlqYXJjYW5kcmEyMiIsImEiOiJja3piOXJqc2Mwam43MndzNmU3c25ldzluIn0.nlbdAfQ7gqC5CeDWKZcPrA';
    dataPlantMentah = JSON.parse(localStorage.getItem("dataPlantManager"))
    dataPlant = dataPlantMentah.filter(dataPlantMentah => dataPlantMentah.id_petani == "0");
    
    var objects = {};features = [];
    for (var x = 0; x < dataPlant.length; x++) {
        lokasi = dataPlant[x]['lokasi_tanaman'].split(", ");
        objects = {
                'type': 'Feature',
                'geometry': {
                'type': 'Point',
                'coordinates': [parseFloat(lokasi[1]), parseFloat(lokasi[0])]
                },'properties': {
                    'title': dataPlant[x]['nama_tanaman'],
                    'id_tanaman': dataPlant[x]['id_tanaman'],
                    'description': dataPlant[x]['deskripsi'],
                    'id_pengelola': dataPlant[x]['id_pengelola']
                    }
                }
        features.push(objects)
    }
    console.log(features)
    const geojson = {
        'type': 'FeatureCollection',
        'features': features
    };
    
    console.log(geojson)
    const map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/satellite-v9',
        center: [115.200076, -8.381955],
        zoom: 8
    });
    
    // add markers to map
    for (const feature of geojson.features) {
        // create a HTML element for each feature
        const el = document.createElement('div');
        el.className = 'marker';
        
        // make a marker for each feature and add it to the map
        new mapboxgl.Marker(el)
        .setLngLat(feature.geometry.coordinates)
        .setPopup(new mapboxgl.Popup({ offset: 25 }) // add popups
        .setHTML(`<h3 style="color:black">${feature.properties.title}</h3>
        <p>${feature.properties.description}</p>
        <button data-bs-dismiss="modal" onclick="addFarmerToPlant('${feature.properties.id_tanaman}')" class="btn btn-success">GIVE JOB</button>`))
        .addTo(map);
    }
</script>
</html>