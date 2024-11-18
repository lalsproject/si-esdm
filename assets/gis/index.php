<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="css/leaflet.css">
        <link rel="stylesheet" href="css/qgis2web.css"><link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/MarkerCluster.css">
        <link rel="stylesheet" href="css/MarkerCluster.Default.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <style>
        html, body, #map {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
        }
        </style>
        <title></title>
    </head>
    <body>

    <?php 

        
        if(!empty($_GET['urls']))
        {
            $iup = file_get_contents(urldecode($_GET['urls']).'Welcome/api_iup_logam?'.md5(date('d/m/y')));
            $nonlo = file_get_contents(urldecode($_GET['urls']).'Welcome/api_non_logam?'.md5(date('d/m/y')));
            $kontrak = file_get_contents(urldecode($_GET['urls']).'Welcome/api_kontrak?'.md5(date('d/m/y')));
            // echo $data;
            echo '<script>
                    var json_IUPLOGAM_4 = {
                    "type": "FeatureCollection",
                    "name": "iup",
                    "crs": { "type": "name", "properties": { "name": "urn:ogc:def:crs:OGC:1.3:CRS84" } },
                    "features": '.$iup.'}
                </script>';

            echo '<script>
                    var json_NONLOGAMBATUAN_5 = {
                    "type": "FeatureCollection",
                    "name": "NONLOGAMBATUAN_5",
                    "crs": { "type": "name", "properties": { "name": "urn:ogc:def:crs:OGC:1.3:CRS84" } },
                    "features": '.$nonlo.'}

            </script>';

            echo '<script>
                   var json_KONTRAKKARYA_6 = {
                    "type": "FeatureCollection",
                    "name": "contoh file",
                    "crs": { "type": "name", "properties": { "name": "urn:ogc:def:crs:OGC:1.3:CRS84" } },
                    "features": '.$kontrak.'}

            </script>';
            }
        // echo json_encode($data);
        
    ?>
        <div id="map">
        </div>
        <script src="js/qgis2web_expressions.js"></script>
        <script src="js/leaflet.js"></script>
        <script src="js/leaflet.rotatedMarker.js"></script>
        <script src="js/leaflet.pattern.js"></script>
        <script src="js/leaflet-hash.js"></script>
        <script src="js/Autolinker.min.js"></script>
        <script src="js/rbush.min.js"></script>
        <script src="js/labelgun.min.js"></script>
        <script src="js/labels.js"></script>
        <script src="js/leaflet.markercluster.js"></script>
        <script>
        var map = L.map('map', {
            zoomControl:true, maxZoom:28, minZoom:1
        }).fitBounds([[1.0713417611749116,124.40166840650234],[1.686395027888482,125.53157671381511]]);
        var hash = new L.Hash(map);
        map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps"></a><a href="https://qgis.org">QGIS</a>');
        var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
        var bounds_group = new L.featureGroup([]);
        function setBounds() {
        }
        map.createPane('pane_OpenStreetMap_0');
        map.getPane('pane_OpenStreetMap_0').style.zIndex = 400;
        var layer_OpenStreetMap_0 = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            pane: 'pane_OpenStreetMap_0',
            opacity: 1.0,
            attribution: '',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 19
        });
        layer_OpenStreetMap_0;
        map.createPane('pane_GoogleSatelliteHybrid_1');
        map.getPane('pane_GoogleSatelliteHybrid_1').style.zIndex = 401;
        var layer_GoogleSatelliteHybrid_1 = L.tileLayer('https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', {
            pane: 'pane_GoogleSatelliteHybrid_1',
            opacity: 1.0,
            attribution: '',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 19
        });
        layer_GoogleSatelliteHybrid_1;
        map.createPane('pane_GoogleSatellite_2');
        map.getPane('pane_GoogleSatellite_2').style.zIndex = 402;
        var layer_GoogleSatellite_2 = L.tileLayer('https://mt1.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
            pane: 'pane_GoogleSatellite_2',
            opacity: 1.0,
            attribution: '',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 18
        });
        layer_GoogleSatellite_2;
        map.createPane('pane_GoogleMaps_3');
        map.getPane('pane_GoogleMaps_3').style.zIndex = 403;
        var layer_GoogleMaps_3 = L.tileLayer('https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
            pane: 'pane_GoogleMaps_3',
            opacity: 1.0,
            attribution: '',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 19
        });
        layer_GoogleMaps_3;
        map.addLayer(layer_GoogleMaps_3);
        function pop_IUPLOGAM_4(feature, layer) {
            var popupContent = '<table class="table table-hover">\
                   \
                    <tr>\
                        <th scope="row">Luas</th>\
                        <td>' + (feature.properties['Luas'] !== null ? autolinker.link(feature.properties['Luas'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Tahapan</th>\
                        <td>' + (feature.properties['Tahapan'] !== null ? autolinker.link(feature.properties['Tahapan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">SK</th>\
                        <td>' + (feature.properties['SK'] !== null ? autolinker.link(feature.properties['SK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Nomor SK</th>\
                        <td>' + (feature.properties['Nomor_SK'] !== null ? autolinker.link(feature.properties['Nomor_SK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Tgl SK</th>\
                        <td>' + (feature.properties['Tgl_SK'] !== null ? autolinker.link(feature.properties['Tgl_SK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Komoditas</th>\
                        <td>' + (feature.properties['Komoditas'] !== null ? autolinker.link(feature.properties['Komoditas'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Mineral</th>\
                        <td>' + (feature.properties['Mineral'] !== null ? autolinker.link(feature.properties['Mineral'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Nama Perusahaan</th>\
                        <td>' + (feature.properties['nama_perusahaan'] !== null ? autolinker.link(feature.properties['nama_perusahaan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Alamat </th>\
                        <td colspan="2">' + (feature.properties['alamat'] !== null ? autolinker.link(feature.properties['alamat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="3">' + (feature.properties['Gambar'] !== null ? autolinker.link(feature.properties['Gambar'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_IUPLOGAM_4_0() {
            return {
                pane: 'pane_IUPLOGAM_4',
        rotationAngle: 0.0,
        rotationOrigin: 'center center',
        icon: L.icon({
            iconUrl: 'markers/blue-marker.svg',
            iconSize: [38.0, 38.0]
        }),
                interactive: true,
            }
        }
        map.createPane('pane_IUPLOGAM_4');
        map.getPane('pane_IUPLOGAM_4').style.zIndex = 404;
        map.getPane('pane_IUPLOGAM_4').style['mix-blend-mode'] = 'normal';
        var layer_IUPLOGAM_4 = new L.geoJson(json_IUPLOGAM_4, {
            attribution: '',
            interactive: true,
            dataVar: 'json_IUPLOGAM_4',
            layerName: 'layer_IUPLOGAM_4',
            pane: 'pane_IUPLOGAM_4',
            onEachFeature: pop_IUPLOGAM_4,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.marker(latlng, style_IUPLOGAM_4_0(feature));
            },
        });
        var cluster_IUPLOGAM_4 = new L.MarkerClusterGroup({showCoverageOnHover: false,
            spiderfyDistanceMultiplier: 2});
        cluster_IUPLOGAM_4.addLayer(layer_IUPLOGAM_4);

        bounds_group.addLayer(layer_IUPLOGAM_4);
        cluster_IUPLOGAM_4.addTo(map);
        function pop_NONLOGAMBATUAN_5(feature, layer) {
            var popupContent = '<table class="table table-hover">\
                    \
                    <tr>\
                        <th scope="row">Luas</th>\
                        <td>' + (feature.properties['Luas'] !== null ? autolinker.link(feature.properties['Luas'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Tahapan</th>\
                        <td>' + (feature.properties['Tahapan'] !== null ? autolinker.link(feature.properties['Tahapan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">SK</th>\
                        <td>' + (feature.properties['SK'] !== null ? autolinker.link(feature.properties['SK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Nomor SK</th>\
                        <td>' + (feature.properties['Nomor_SK'] !== null ? autolinker.link(feature.properties['Nomor_SK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Tgl SK</th>\
                        <td>' + (feature.properties['Tgl_SK'] !== null ? autolinker.link(feature.properties['Tgl_SK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Komoditas</th>\
                        <td>' + (feature.properties['Komoditas'] !== null ? autolinker.link(feature.properties['Komoditas'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Mineral</th>\
                        <td>' + (feature.properties['Mineral'] !== null ? autolinker.link(feature.properties['Mineral'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Nama Perusahaan</th>\
                        <td>' + (feature.properties['nama_perusahaan'] !== null ? autolinker.link(feature.properties['nama_perusahaan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Alamat </th>\
                        <td colspan="2">' + (feature.properties['alamat'] !== null ? autolinker.link(feature.properties['alamat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="3">' + (feature.properties['Gambar'] !== null ? autolinker.link(feature.properties['Gambar'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_NONLOGAMBATUAN_5_0() {
            return {
                pane: 'pane_NONLOGAMBATUAN_5',
        rotationAngle: 0.0,
        rotationOrigin: 'center center',
        icon: L.icon({
            iconUrl: 'markers/red-marker.svg',
            iconSize: [38.0, 38.0]
        }),
                interactive: true,
            }
        }
        map.createPane('pane_NONLOGAMBATUAN_5');
        map.getPane('pane_NONLOGAMBATUAN_5').style.zIndex = 405;
        map.getPane('pane_NONLOGAMBATUAN_5').style['mix-blend-mode'] = 'normal';
        var layer_NONLOGAMBATUAN_5 = new L.geoJson(json_NONLOGAMBATUAN_5, {
            attribution: '',
            interactive: true,
            dataVar: 'json_NONLOGAMBATUAN_5',
            layerName: 'layer_NONLOGAMBATUAN_5',
            pane: 'pane_NONLOGAMBATUAN_5',
            onEachFeature: pop_NONLOGAMBATUAN_5,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.marker(latlng, style_NONLOGAMBATUAN_5_0(feature));
            },
        });
        var cluster_NONLOGAMBATUAN_5 = new L.MarkerClusterGroup({showCoverageOnHover: false,
            spiderfyDistanceMultiplier: 2});
        cluster_NONLOGAMBATUAN_5.addLayer(layer_NONLOGAMBATUAN_5);

        bounds_group.addLayer(layer_NONLOGAMBATUAN_5);
        cluster_NONLOGAMBATUAN_5.addTo(map);
        function pop_KONTRAKKARYA_6(feature, layer) {
            var popupContent = '<table class="table table-hover">\
                    \
                    <tr>\
                        <th scope="row">Luas</th>\
                        <td>' + (feature.properties['Luas'] !== null ? autolinker.link(feature.properties['Luas'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Tahapan</th>\
                        <td>' + (feature.properties['Tahapan'] !== null ? autolinker.link(feature.properties['Tahapan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">SK</th>\
                        <td>' + (feature.properties['SK'] !== null ? autolinker.link(feature.properties['SK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Nomor SK</th>\
                        <td>' + (feature.properties['Nomor_SK'] !== null ? autolinker.link(feature.properties['Nomor_SK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Tgl SK</th>\
                        <td>' + (feature.properties['Tgl_SK'] !== null ? autolinker.link(feature.properties['Tgl_SK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Komoditas</th>\
                        <td>' + (feature.properties['Komoditas'] !== null ? autolinker.link(feature.properties['Komoditas'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Mineral</th>\
                        <td>' + (feature.properties['Mineral'] !== null ? autolinker.link(feature.properties['Mineral'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Nama Perusahaan</th>\
                        <td>' + (feature.properties['nama_perusahaan'] !== null ? autolinker.link(feature.properties['nama_perusahaan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Alamat </th>\
                        <td colspan="2">' + (feature.properties['alamat'] !== null ? autolinker.link(feature.properties['alamat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="3">' + (feature.properties['Gambar'] !== null ? autolinker.link(feature.properties['Gambar'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_KONTRAKKARYA_6_0() {
            return {
                pane: 'pane_KONTRAKKARYA_6',
        rotationAngle: 0.0,
        rotationOrigin: 'center center',
        icon: L.icon({
            iconUrl: 'markers/cc-marker.svg',
            iconSize: [38.0, 38.0]
        }),
                interactive: true,
            }
        }
        map.createPane('pane_KONTRAKKARYA_6');
        map.getPane('pane_KONTRAKKARYA_6').style.zIndex = 406;
        map.getPane('pane_KONTRAKKARYA_6').style['mix-blend-mode'] = 'normal';
        var layer_KONTRAKKARYA_6 = new L.geoJson(json_KONTRAKKARYA_6, {
            attribution: '',
            interactive: true,
            dataVar: 'json_KONTRAKKARYA_6',
            layerName: 'layer_KONTRAKKARYA_6',
            pane: 'pane_KONTRAKKARYA_6',
            onEachFeature: pop_KONTRAKKARYA_6,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.marker(latlng, style_KONTRAKKARYA_6_0(feature));
            },
        });
        var cluster_KONTRAKKARYA_6 = new L.MarkerClusterGroup({showCoverageOnHover: false,
            spiderfyDistanceMultiplier: 2});
        cluster_KONTRAKKARYA_6.addLayer(layer_KONTRAKKARYA_6);

        bounds_group.addLayer(layer_KONTRAKKARYA_6);
        cluster_KONTRAKKARYA_6.addTo(map);
        var baseMaps = {};
        L.control.layers(baseMaps,{'<img src="legend/KONTRAKKARYA_6.png" /> KONTRAK KARYA': cluster_KONTRAKKARYA_6,'<img src="legend/NONLOGAMBATUAN_5.png" /> NON LOGAM & BATUAN': cluster_NONLOGAMBATUAN_5,'<img src="legend/IUPLOGAM_4.png" /> IUP LOGAM': cluster_IUPLOGAM_4,"Google Maps": layer_GoogleMaps_3,"Google Satellite": layer_GoogleSatellite_2,"Google Satellite Hybrid": layer_GoogleSatelliteHybrid_1,"OpenStreetMap": layer_OpenStreetMap_0,}).addTo(map);
        setBounds();
        resetLabels([layer_IUPLOGAM_4]);
        map.on("zoomend", function(){
            resetLabels([layer_IUPLOGAM_4]);
        });
        map.on("layeradd", function(){
            resetLabels([layer_IUPLOGAM_4]);
        });
        map.on("layerremove", function(){
            resetLabels([layer_IUPLOGAM_4]);
        });
        </script>
    </body>
</html>
