@extends('layout.layout')

<link rel="stylesheet" href="../../AdminLTE-3.2.0/plugins/dropzone/min/dropzone.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css" />
<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.6.4/leaflet.css" />
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
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">
                        Upload Shapefiles
                        <!-- <p class="text-center">Upload Shapefiles</p> -->
                    </h3>
                </div>
                <div class="card-body">
                    <!-- <img src="../../uploads/gallery/EMBNCR-1053620-171506/1-1688450182.png" alt="Italian Trulli"> -->
                    <a id="company-name" name="company-name"></a>
                    <br />
                    <form method="post" action="{{ url('image/upload')}}" enctype="multipart/form-data" class="dropzone"
                        id="dropzone">
                        {{ csrf_field() }}
                        <input name="company_name" id="company_name" hidden>
                        <input value="{{ $ID }}" name="emb_id" id="emb_id" hidden>
                        <div class="dz-default dz-message">
                            <h4>Drop Files here or click to upload</h4>
                        </div>
                    </form>
                    <div id="list-all-uploaded"></div>
                    <table class="table table-bordered">
                        <thead>
                            <th>Name</th>
                            <th>Size</th>
                            <th>Date uploaded</th>
                        </thead>
                        <tbody id="shapefiles-table-body"></tbody>
                    </table>
                </div>
            </div>

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
<script src="http://cdn.leafletjs.com/leaflet-0.6.4/leaflet.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js"></script>
<script src="../../shapefiles/catiline.js"></script>
<script src="https://unpkg.com/shpjs@latest/dist/shp.js"></script>
<script src="https://cdn.rawgit.com/calvinmetcalf/leaflet.shapefile/gh-pages/leaflet.shpfile.js"></script>
<script>

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

        var m = L.map('map').setView([12.8797, 121.7740], 8);
        var watercolor = L.tileLayer('http://{s}.tile.stamen.com/watercolor/{z}/{x}/{y}.jpg', {
            attribution: 'Map tiles by <a href="http://stamen.com">Stamen Design</a>, <a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a> &mdash; Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>'
        }).addTo(m);

        L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
            attribution: 'Map tiles by <a href="http://stamen.com">Stamen Design</a>, <a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a> &mdash; Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>'
        }).addTo(m);

        // var shpfile = new L.Shapefile('../../shapefiles/Key_Biodiversity_Areas.zip', {}); 
        // var shpfile = new L.Shapefile('../../shapefiles/Protected_Areas.zip', {}); 
        console.log(shpfile);
        shpfile.addTo(m);
        // console.log(emb_id + "/" + file_name + '.zip');

        var overlayMaps = {
                        googleSat, googleStreets, googleHybrid, googleTerrain, OSM
                    };

                    L.control.layers(null, overlayMaps).addTo(m);


        ///
        var emb_id = '{{ $ID }}';
        var CompanyName = sessionStorage.getItem("company-name");
        $("#company-name").text(CompanyName);
        $("#company_name").val(CompanyName);

        var file_name = '';

        $.ajax({
            url: "{{ url('getimages')}}",
            type: 'POST',
            dataType: 'json',
            data: {
                emb_id: emb_id,
                _token: '{{csrf_token()}}',
            },
            dataType: 'json',
            success: function (data) {
                $.each(data, function (key, value) {

                    var details = `<tr>
                            <td>`+ value.file_name + `</td>
                            <td>`+ value.file_size + `</td>
                            <td>`+ value.updated_at + `</td>
                        </tr>`;

                    file_name = value.file_name;

                    var shpfile = new L.Shapefile("../../uploads/gallery/" + emb_id + "/" + value.file_name, {});

                    shpfile.addTo(m);

                    var overlayMaps = {
                        googleSat, googleStreets, googleHybrid, googleTerrain, OSM
                    };

                    L.control.layers(null, overlayMaps).addTo(m);

                    $("#shapefiles-table-body").append(details);
                });

            }
        });











        // required to show
        // .shp
        //     .shx
        //     .dbf
        //     .prj
        //     .sbn
        //     .sbx
        //     .shp.xml
        Dropzone.options.dropzone =
        {
            maxFiles: 5,
            maxFilesize: 4,
            //~ renameFile: function(file) {
            //~ var dt = new Date();
            //~ var time = dt.getTime();
            //~ return time+"-"+file.name;    // to rename file name but i didn't use it. i renamed file with php in controller.
            //~ },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: false,
            timeout: 50000,
            init: function () {

                // Get images
                var myDropzone = this;
                $.ajax({
                    url: "{{ url('getimages')}}",
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        // ID: ID,
                        _token: '{{csrf_token()}}',
                    },
                    dataType: 'json',
                    success: function (data) {
                        $.each(data, function (key, value) {
                            var file = { name: value.name, size: value.size };
                            myDropzone.options.addedfile.call(myDropzone, file);
                            myDropzone.options.thumbnail.call(myDropzone, file, value.path);
                            myDropzone.emit("complete", file);
                        });
                    }
                });
            },
            removedfile: function (file) {
                if (this.options.dictRemoveFile) {
                    return Dropzone.confirm("Are You Sure to " + this.options.dictRemoveFile, function () {
                        if (file.previewElement.id != "") {
                            var name = file.previewElement.id;
                        } else {
                            var name = file.name;
                        }
                        //console.log(name);
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type: 'POST',
                            url: "{{ url('image/delete')}}",
                            data: { filename: name },
                            success: function (data) {
                                alert(data.success + " File has been successfully removed!");
                            },
                            error: function (e) {
                                console.log(e);
                            }
                        });
                        var fileRef;
                        return (fileRef = file.previewElement) != null ?
                            fileRef.parentNode.removeChild(file.previewElement) : void 0;
                    });
                }
            },

            success: function (file, response) {
                file.previewElement.id = response.success;
                //console.log(file); 
                // set new images names in dropzone’s preview box.
                var olddatadzname = file.previewElement.querySelector("[data-dz-name]");
                file.previewElement.querySelector("img").alt = response.success;
                olddatadzname.innerHTML = response.success;
            },
            error: function (file, response) {
                if ($.type(response) === "string")
                    var message = response; //dropzone sends it's own error messages in string
                else
                    var message = response.message;
                file.previewElement.classList.add("dz-error");
                _ref = file.previewElement.querySelectorAll("[data-dz-errormessage]");
                _results = [];
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i];
                    _results.push(node.textContent = message);
                }
                return _results;
            }

        };


    });



</script>