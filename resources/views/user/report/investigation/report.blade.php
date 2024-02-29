@extends('layout.layout')

<link rel="stylesheet" href="../../AdminLTE-3.2.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../../AdminLTE-3.2.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="../../AdminLTE-3.2.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="../../AdminLTE-3.2.0/plugins/bs-stepper/css/bs-stepper.min.css">
<link rel="stylesheet" href="../../AdminLTE-3.2.0/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css"> <!-- <link
  rel="stylesheet" href="../../AdminLTE-3.2.0/dist/css/modal-animation.css"> -->
<style>
  .loader {
    border: 16px solid #f3f3f3;
    /* Light grey */
    border-top: 16px solid #3498db;
    /* Blue */
    border-radius: 50%;
    width: 120px;
    height: 120px;
    animation: spin 2s linear infinite;
  }

  @keyframes spin {
    0% {
      transform: rotate(0deg);
    }

    100% {
      transform:
        rotate(360deg);
    }
  }

  .loading-overlay {
    display: none;
    background: rgba(26, 26, 26, 0.7);
    position: fixed;
    width: 100%;
    height: 100%;
    z-index: 5;
    top: 0;
  }

  .loading-overlay-image-container {
    display: none;
    position: fixed;
    z-index: 7;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  .loading-overlay-img {
    width: 50px;
    height: 50px;
    border-radius: 5px;
  }
</style>

@section('header')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <!-- <h1 class="m-0">Report</h1> -->
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Report</li>
        </ol>
      </div>
    </div>
  </div>
</div>
@stop


@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="card card-secondary">
          <div class="card-header">
            <p class="text-center" id="type-of-report-header" style="font-size: 24px; margin-bottom: 0px">Type of Report
            </p>
          </div>

          <div class="card-body p-0">
            <div class="card card-default" style="box-shadow: none;">

              <!-- <div class="card-header" style="height: 50px;">
                <em><b>
                  <p class="text-center text-lg">Law/s Applicable</p>
                </b></em>
              </div> -->

              <div class="card-body">

                <div class="form-group">
                  <label for="inputName" style="margin-bottom: 0px;">LAW/S APPLICABLE</label>
                  <input type="text" id="laws-applicable" class="form-control rounded-0">
                  <label for="inputName" style="margin-bottom: 0px; color:red; font-size:11px" id="laws-applicable-error"></label>
                </div>

                <div class="form-group">
                  <label for="inputName" style="margin-bottom: 0px;">NAME OF RESPONDENT</label>
                  <input type="text" id="name-of-respondent" class="form-control rounded-0">
                  <label for="inputName" style="margin-bottom: 0px; color:red; font-size:11px" id="name-of-respondent-error"></label>
                </div>

                <div class="form-group">
                  <label for="inputName" style="margin-bottom: 0px;">ADDRESS OF RESPONDENT</label>
                  <input type="text" id="address-of-respondent" class="form-control rounded-0">
                  <label for="inputName" style="margin-bottom: 0px; color:red; font-size:11px" id="address-of-respondent-error"></label>
                </div>

                <div class="form-group">
                  <label for="inputName" style="margin-bottom: 0px;">NATURE OF COMPLAINT</label>
                  <input type="text" id="nature-of-complaint" class="form-control rounded-0">
                  <label for="inputName" style="margin-bottom: 0px; color:red; font-size:11px" id="nature-of-complaint-error"></label>
                </div>
                        
                <div class="form-group">
                  <label for="inputName" style="margin-bottom: 0px;">COMPLAINANT</label>
                  <input type="text" id="complainant" class="form-control rounded-0">
                </div>

                <div class="form-group">
                  <label for="inputClientCompany" style="margin-bottom: 0px;">ADDRESS OF COMPLAINANT</label>
                  <input type="text" id="address-of-complainant" class="form-control rounded-0">
                  <label for="inputName" style="margin-bottom: 0px; color:red; font-size:11px" id="address-of-complainant-error"></label>
                </div>

                <div class="form-group">
                  <label for="inputName" style="margin-bottom: 0px;">DATE OF INSPECTION</label>
                  <div class="input-group date" id="set-date-of-inspection" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input rounded-0" data-target="#set-date-of-inspection"
                      id="date-of-inspection" placeholder="Enter Date" />
                    <div class="input-group-append" data-target="#set-date-of-inspection" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputClientCompany" style="margin-bottom: 0px;">PURPOSE OF INSPECTION</label>
                  <input type="text" id="purpose-of-inspection" class="form-control rounded-0">
                </div>

                <div class="form-group">
                  <label for="inputName" style="margin-bottom: 0px;">DATE OF SUBMISSION</label>
                  <div class="input-group date" id="set-date-of-submission" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input rounded-0" data-target="#set-date-of-submission"
                      id="date-of-submission" placeholder="Enter Date" />
                    <div class="input-group-append" data-target="#set-date-of-submission" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputClientCompany" style="margin-bottom: 0px;">BACKGROUND</label>
                  <textarea type="text" id="background" class="form-control rounded-0"></textarea>
                </div>

                <div class="form-group">
                  <label for="inputClientCompany" style="margin-bottom: 0px;">PROCEEDINGS AND FINDINGS</label> <button class="btn btn-success btn-sm" id="add-proceedings-and-findings"><i class="fa-solid fa-plus"></i></button>
                  <ol id="div-proceedings-and-findings">
                  </ol>
                </div>

                <div class="form-group">
                  <label for="inputClientCompany" style="margin-bottom: 0px;">PICTURES DURING INSPECTION</label>
                  <div class="row">
                    <div class="col-md-10">
                      <input type="file" class="form-control" id="files" onchange="validateFileType()">
                    </div>
                    <div class="col-md-2">
                      <button type="button" class="btn btn-info btn-block" id="submit-upload">Upload</button>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                      <div class="col-md-11">
                          <label style="margin-bottom: 0px;">Pictures</label>
                          <div class="form-group">
                              <div class="row" id="uploaded-pictures">
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="form-group">
                <label for="inputClientCompany" style="margin-bottom: 0px;">REMARKS</label>
                <textarea type="text" id="remarks" class="form-control rounded-0"></textarea>
              </div>

              <div class="form-group">
                <label for="inputClientCompany" style="margin-bottom: 0px;">RECOMMENDATIONS</label> 
                <button class="btn btn-success btn-sm" id="add-recommendations"><i class="fa-solid fa-plus"></i></button>
                <ol id="div-recommendations"></ol>
              </div>

            </div>
          </div>
        </div>
        <div class="card-footer">
          <button class="btn btn-success float-right btn-flat" id="submit-inspection">Save</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="loading-overlay">
  <div class="loading-overlay-image-container">
    <div class="loader"></div>
    Saving
  </div>
</div>
@stop

<script src="../../AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<script src="../../AdminLTE-3.2.0/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<script src="../../AdminLTE-3.2.0/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

  const reportFor = JSON.parse(sessionStorage.getItem("report-for"));
  const reportType = JSON.parse(sessionStorage.getItem("report-type"));

  $(function () {

    $('#set-date-of-inspection').datetimepicker({
      format: 'DD/MM/YYYY',
    });

    $('#set-date-of-submission').datetimepicker({
      format: 'DD/MM/YYYY',
    });

    var CompanyName = sessionStorage.getItem("company-name");
    var CompanyContact = sessionStorage.getItem("company-contact");
    var CompanyEmail = sessionStorage.getItem("company-email");
    var CompanyAddress = sessionStorage.getItem("company-address");
    var Longitude = sessionStorage.getItem("longitude");
    var Latitude = sessionStorage.getItem("latitude");

    $("#name-of-respondent").val(CompanyName);
    $("#address-of-respondent").val(CompanyAddress);

    var tor = sessionStorage.getItem("type-of-report");
    var text = 'Investigation Report';

    $("#type-of-report-header").text(text.toUpperCase());

    var type = sessionStorage.getItem("new-or-old");

    var idParameter = getUrlParameters("id", "", true);
    var emb_id = sessionStorage.getItem("emb-id");

    if ( idParameter != 0) {

      $.ajax({
        url: "{{route('/get-investigation-report')}}",
        type: 'POST',
        data: {
          report_id: idParameter,
          emb_id: emb_id,
          _token: '{{csrf_token()}}',
        },
        beforeSend: function () {

          $('.loading-overlay').show();
          $('.loading-overlay-image-container').show();
        },
        complete: function () {

          $('.loading-overlay').hide();
          $('.loading-overlay-image-container').hide();

        },
        success: function (response) {

          console.log(response)

          sessionStorage.setItem("report-for", response['report']['report_for'])

          $("#laws-applicable").val(response['report']['laws_applicable']);
          $("#name-of-respondent").val(response['report']['name_of_respondent']);
          $("#address-of-respondent").val(response['report']['address_of_respondent']);
          $("#nature-of-complaint").val(response['report']['nature_of_complaint']);
          $("#complainant").val(response['report']['complainant']);
          $("#address-of-complainant").val(response['report']['address_of_complaint']);
          $("#date-of-inspection").val(new Date(response['report']['date_of_inspection']).toLocaleDateString('en-GB'));
          $("#purpose-of-inspection").val(response['report']['purpose_of_inspection']);
          $("#date-of-submission").val(new Date(response['report']['date_of_submission']).toLocaleDateString('en-GB'));
          $("#background").val(response['report']['background']);
          $("#proceedings").val(response['report']['proceedings']);
          $("#remarks").val(response['report']['remarks']);

          $.each(response['paf'], function (index, value) {
            $("#div-proceedings-and-findings").append(`<li style="margin-bottom: 10px">
               <div class="row"><textarea class="form-control form-control-border border-width-2 col-md-11" style="height: 40px" name="proceedings-and-findings" >`+value['proceedings_and_findings']+`</textarea><button class="col-md-1 btn btn-danger" onclick="removeLi(this)" title="delete"><i class="fa-solid fa-trash"></i></button>
              </div></li>`);
          });

          $.each(response['reco'], function (index, value) {
            $("#div-recommendations").append(`<li style="margin-bottom: 10px">
               <div class="row"><textarea class="form-control form-control-border border-width-2 col-md-11" style="height: 40px" name="recommendations" >`+value['recommendations']+`</textarea><button class="col-md-1 btn btn-danger" onclick="removeLi(this)" title="delete"><i class="fa-solid fa-trash"></i></button>
              </div></li>`);
          });

        }

      });

      $.ajax({
            url: "{{route('/get/file/investigation')}}",
            type: 'POST',
            data: {
                emb_id : emb_id,
                id: idParameter,
                _token: '{{csrf_token()}}',
            },
            success: function (response) {

                $.each(response, function (index, value) {
                  console.log(value);
                    $("#uploaded-pictures").append(
                        `<div class="col-md-6">
                            <img src="../../`+value['file_path']+`" alt="Italian Trulli" style="width: 100%; height: 80%;">
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-danger" title="delete" onclick="deletePicture(`+value['id']+`)"><i class="fa-solid fa-trash"></i></button>
                        </div>`);

                    
                });
            },
        });

    }

    $("#submit-upload").on('click', function () {

      // Get the selected file
      var files = $("#files")[0].files;
      var emb_id = sessionStorage.getItem("emb-id");
      var idParameter = getUrlParameters("id", "", true);

      var fd = new FormData();
      fd.append('id', '');
      fd.append('file', files[0]);
      fd.append('_token', '{{csrf_token()}}');


      $.ajax({
        xhr: function () {
          var xhr = new window.XMLHttpRequest();
          xhr.upload.addEventListener("progress", function (evt) {
            if (evt.lengthComputable) {
              var percentComplete = ((evt.loaded / evt.total) * 100);
              $(".progress-bar").width(percentComplete + '%');
              $(".progress-bar").html(percentComplete + '%');
            }
          }, false);

          return xhr;
        },
        url: "{{route('/upload/file/investigation')}}",
        method: 'post',
        data: fd,
        contentType: false,
        processData: false,
        dataType: 'json',
        beforeSend: function () {
          $(".progress-bar").width('0%');
          $('#uploadStatus').html('<img src="images/loading.gif"/>');
        },
        error: function () {
          $('#uploadStatus').html('<p style="color:#EA4335;">File upload failed, please try again.</p>');
        },
        success: function (response) {

          if (response['success'] == 1) {

            var Toast = Swal.mixin({
              toast: true,
              position: 'top-end',
              showConfirmButton: false,
              timer: 1000,
              timerProgressBar: true,
              didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
              },
              didClose: (toast) => {
                location.reload();
              }
            });

            Toast.fire({
              icon: 'success',
              title: 'File uploaded'
            });

          } else {

            alert(response['message']);

          }

        },
      });

    });

    $("#add-proceedings-and-findings").on('click', function () {
      $("#div-proceedings-and-findings").append(`<li style="margin-bottom: 10px">
               <div class="row"><textarea class="form-control form-control-border border-width-2 col-md-11" style="height: 40px" name="proceedings-and-findings" ></textarea><button class="col-md-1 btn btn-danger" onclick="removeLi(this)" title="delete"><i class="fa-solid fa-trash"></i></button>
              </div></li>`);
    });

    $("#add-recommendations").on('click', function () {
      $("#div-recommendations").append(`<li style="margin-bottom: 10px">
               <div class="row"><textarea class="form-control form-control-border border-width-2 col-md-11" style="height: 40px" name="recommendations" ></textarea><button class="col-md-1 btn btn-danger" onclick="removeLi(this)" title="delete"><i class="fa-solid fa-trash"></i></button>
              </div></li>`);
    });


    $("#submit-inspection").on("click", function() {

      var lawsapplicable = $("#laws-applicable").val();
      var nameofrespondent = $("#name-of-respondent").val();
      var addressofrespondent = $("#address-of-respondent").val();
      var natureofcomplaint = $("#nature-of-complaint").val();
      var complainant = $("#complainant").val();
      var addressofcomplainant = $("#address-of-complainant").val();
      var dateofinspection = $("#date-of-inspection").val();
      var purposeofinspection = $("#purpose-of-inspection").val();
      var dateofsubmission = $("#date-of-submission").val();
      var background = $("#background").val();
      var proceedings = $("#proceedings").val();
      var remarks = $("#remarks").val();

      var paf = $('textarea[name="proceedings-and-findings"]').map(function (_, el) {
        return $(el).val();
      }).get();

      var reco = $('textarea[name="recommendations"]').map(function (_, el) {
        return $(el).val();
      }).get();

      $.ajax({
        url: "{{route('/save-investigation-report')}}",
        type: 'POST',
        data: {
          id: idParameter,
          emb_id: emb_id,
          lawsapplicable : lawsapplicable,
          nameofrespondent: nameofrespondent,
          addressofrespondent: addressofrespondent,
          natureofcomplaint: natureofcomplaint,
          complainant: complainant,
          addressofcomplainant: addressofcomplainant,
          dateofinspection: dateofinspection,
          purposeofinspection: purposeofinspection,
          dateofsubmission: dateofsubmission,
          background: background,
          proceedings: proceedings,
          remarks: remarks,
          withnov: sessionStorage.getItem("with-nov"),
          reportfor: reportFor,
          paf : paf,
          reco : reco,
          _token: '{{csrf_token()}}',
        },
        beforeSend: function () {

          $('.loading-overlay').show();
          $('.loading-overlay-image-container').show();
        },
        complete: function () {

          $('.loading-overlay').hide();
          $('.loading-overlay-image-container').hide();

        },
        success: function (response) {
          
          sessionStorage.setItem("id", response);
          window.history.replaceState(null, null, "?id=" + response + "&type=investigation");

          var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 1000,
            timerProgressBar: true,
            didOpen: (toast) => {
              toast.addEventListener('mouseenter', Swal.stopTimer)
              toast.addEventListener('mouseleave', Swal.resumeTimer)
            },
            didClose: (toast) => {
              // location.reload();
            }
          });

          Toast.fire({
            icon: 'success',
            title: 'Your work has been submitted'
          });

        }

      });
    });

  });

  function removeLi(data)
  {
    $(data).parent().parent().remove();
  }

  function deletePicture(id)
  {

    Swal.fire({
      title: "Do you want to delete this picture?",
      showDenyButton: false,
      showCancelButton: true,
      confirmButtonText: "Yes",
      cancelButtonText: "No",
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
        $.ajax({
          url: "{{route('/delete-investigation-picture')}}",
          type: 'POST',
          data: {
            id : id,
            _token: '{{csrf_token()}}',
          },
          success: function (response) {
            var Toast = Swal.mixin({
              toast: true,
              position: 'top-end',
              showConfirmButton: false,
              timer: 1000,
              timerProgressBar: true,
              didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
              },
              didClose: (toast) => {
                location.reload();
              }
            });

            Toast.fire({
              icon: 'success',
              title: 'Successfully deleted'
            });
          },
        });
      } else if (result.isDenied) {
        Swal.fire("cancel", "", "info");
      }
    });

    
  }


  function getUrlParameters(parameter, staticURL, decode) {

    var currLocation = (staticURL.length) ? staticURL : window.location.search,
      parArr = currLocation.split("?")[1].split("&"),
      returnBool = true;

    for (var i = 0; i < parArr.length; i++) {
      parr = parArr[i].split("=");
      if (parr[0] == parameter) {
        return (decode) ? decodeURIComponent(parr[1]) : parr[1];
        returnBool = true;
      } else {
        returnBool = false;
      }
    }

    if (!returnBool) return false;
  }

  function validateFileType() {

    var selectedFile = document.getElementById('files').files[0];
    var allowedTypes = ['image/jpeg', 'image/png', 'application/json'];

    if (!allowedTypes.includes(selectedFile.type)) {
      alert('Invalid file type. Please upload a JPEG, PNG, or GeoJSON file.');
      document.getElementById('files').value = '';
    }
    
  }

</script>