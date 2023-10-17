@extends('layout.layout')

<link rel="stylesheet" href="../../AdminLTE-3.2.0/plugins/dropzone/min/dropzone.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

<link rel="stylesheet" href="../../shapefiles/gh-pages.css" />
<style>
    .dz-image img {
        width: 100%;
        height: 100%;
    }

    .dropzone.dz-started .dz-message {
        display: block !important;
    }

    .dz-image img {
        width: 100%;
        height: 100%;
    }

    .dropzone.dz-started .dz-message {
        display: block !important;
    }

    .dropzone {
        border: 2px dashed #028AF4 !important;
        ;
    }

    .dropzone .dz-preview.dz-complete .dz-success-mark {
        opacity: 1;
    }

    .dropzone .dz-preview.dz-error .dz-success-mark {
        opacity: 0;
    }

    .dropzone .dz-preview .dz-error-message {
        top: 144px;
    }

    .dropzone {
        border: 2px dashed #028AF4 !important;
        ;
    }

    .dropzone .dz-preview.dz-complete .dz-success-mark {
        opacity: 1;
    }

    .dropzone .dz-preview.dz-error .dz-success-mark {
        opacity: 0;
    }

    .dropzone .dz-preview .dz-error-message {
        top: 144px;
    }
</style>

@section('header')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Shapefiles</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@stop


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <a href='#' id='export'>Export Features</a>
            <div id="map" style="width: 100%; height: 760px;">
                <a href="https://www.maptiler.com" style="position:absolute;left:10px;bottom:10px;z-index:999;"><img
                        src="https://api.maptiler.com/resources/logo.svg" alt="MapTiler logo"></a>
                <div class="leaflet-bottom leaflet-right">
                    <!-- <input type="button" id="Save" value="Save" class="leaflet-control btn-primary btn-lg pull-right"  style="height: 50px; width: 100px; margin-bottom: 400px" />  -->
                </div>
            </div>
        </div>
    </div>
</div>
@stop

<script src="../../AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<script src="../../AdminLTE-3.2.0/plugins/dropzone/min/dropzone.min.js"></script>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js"></script>
<script src="../../shapefiles/catiline.js"></script>
<script src="https://unpkg.com/shpjs@latest/dist/shp.js"></script>
<script src="https://cdn.rawgit.com/calvinmetcalf/leaflet.shapefile/gh-pages/leaflet.shpfile.js"></script>
<script>


    var m;
    var drawnItems;
    $(function () {

        ///map
        var googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
            maxZoom: 50,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        });

        var googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
            maxZoom: 50,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        });

        var googleHybrid = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
            maxZoom: 50,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        });

        var googleTerrain = L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}', {
            maxZoom: 50,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        });

        var OSM = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
            maxZoom: 50,
            crossOrigin: true,
        });

        var baseLayers = {
            "Satellite View": googleSat,
            "Streets View": googleStreets,
            "Hybrid View": googleHybrid,
            "Terrain View": googleTerrain,
            "OpenStreetMap View": OSM,
        };

        m = L.map('map').setView([12.8797, 121.7740], 8);

        var layerControl = L.control.layers(baseLayers).addTo(m);

        var watercolor = L.tileLayer('http://{s}.tile.stamen.com/watercolor/{z}/{x}/{y}.jpg', {
            attribution: 'Map tiles by <a href="http://stamen.com">Stamen Design</a>, <a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a> &mdash; Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>'
        }).addTo(m);

        // var geojsonLayer = new L.GeoJSON.AJAX("../../uploads/gallery/drawnItems.geojson");
        // geojsonLayer.addTo(m);

        // var district_boundary = new L.geoJson();
        // district_boundary.addTo(m);

        // $.ajax({
        //     dataType: "json",
        //     url: "../../uploads/gallery/drawnItems.geojson",
        //     success: function (data) {
        //         $(data.features).each(function (key, data) {
        //             district_boundary.addData(data);
        //         });
        //     }
        // }).error(function () { });

        // const geojson = {"type":"FeatureCollection","features":[{"type":"Feature","properties":{},"geometry":{"type":"Polygon","coordinates":[[[-74.347962,42.731294],[-74.326678,42.723223],[-74.325648,42.738859],[-74.347962,42.731294]]]}},{"type":"Feature","properties":{},"geometry":{"type":"Point","coordinates":[-74.311917,42.733059]}},{"type":"Feature","properties":{},"geometry":{"type":"Point","coordinates":[-74.34041,42.747936]}},{"type":"Feature","properties":{},"geometry":{"type":"Point","coordinates":[-74.326678,42.754239]}}]}

        // L.geoJSON(geojson).bindPopup(function(layer) {
        //     console.log(layer.feature);
        //     return layer.feature.properties.name;
        // }).addTo(m);

        // L.geoJSON(geojson).addTo(m)


        drawnItems = L.featureGroup().addTo(m);
        var drawControl = new L.Control.Draw({
            draw: {
                circle: false,
                rectangle: false,
                polyline: true,
                polygon: true
            },
            edit: { featureGroup: drawnItems }
        }).addTo(m);

        m.on('draw:created', function (e) {
            var type = e.layerType;
            var layer = e.layer;
            var idIW = L.popup();
            var content = '<span><b>Shape Name</b></span><br/><input id="shapeName" type="text"/><br/><br/><span><b>Shape Description<b/></span><br/><textarea id="shapeDesc" cols="25" rows="5"></textarea><br/><br/><input type="button" id="okBtn" value="Save" onclick="saveIdIW()"/>';
            idIW.setContent(content);
            idIW.setLatLng(layer.getLatLng());
            idIW.openOn(m);
            drawnItems.addLayer(layer)
        });


        


        // var drawnItems = new L.FeatureGroup();
        // m.addLayer(drawnItems);
        // var drawControl = new L.Control.Draw({
        //     edit: {
        //         featureGroup: drawnItems
        //     }
        // });
        // m.addControl(drawControl);

        // m.on(L.Draw.Event.CREATED, function (e) {
        //     var type = e.layerType,
        //         layer = e.layer;
        //     if (type === 'marker') {
        //         // Do marker specific actions
        //     }
        //     // Do whatever else you need to. (save to db; add to map etc)
        //     m.addLayer(layer);
        // });

        document.getElementById('export').onclick = function (e) {
            // Extract GeoJson from featureGroup
            var data = drawnItems.toGeoJSON();
            // Stringify the GeoJson
            var convertedData = 'text/json;charset=utf-8,' + encodeURIComponent(JSON.stringify(data));
            // Create export
            document.getElementById('export').setAttribute('href', 'data:' + convertedData);
            document.getElementById('export').setAttribute('download', 'drawnItems.geojson');
        }

    });

    function saveIdIW() {
            var sName = $('#shapeName').val();
            var sDesc = $('#shapeDesc').val();
            var drawings = drawnItems.getLayers(); //drawnItems is a container for the drawn objects
            drawings[drawings.length - 1].title = sName;
            drawings[drawings.length - 1].content = sDesc;
            m.closePopup();
        };




</script>