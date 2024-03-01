@extends('layout.admin-layout')
<link rel="stylesheet" href="../../AdminLTE-3.2.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../../AdminLTE-3.2.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="../../AdminLTE-3.2.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="../../AdminLTE-3.2.0/plugins/bs-stepper/css/bs-stepper.min.css">
<link rel="stylesheet" href="../../AdminLTE-3.2.0/dist/css/bootstrap-side-modals.css">

@section('header')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0"> </h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">PROFILE</li>
        </ol>
      </div><!-- /.col -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div> 
@stop 
@section('content') 
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card card-secondary">
        <div class="card-header">
          <!-- <h3 class="card-title"> -->
          <p class="text-left" style="font-size: 24px; margin-bottom: 0px">Signatures</p>
          <!-- </h3> -->
        </div>
        <div class="card-body">
            <table class="table" id="signatures-list">
              <thead>
                <th width="40%">Name</th>
                <th width="30%">Region</th>
                <th width="30%">Signature</th>
              </thead>
            </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="view-modal" tabindex="-1" role="dialog" aria-labelledby="right_modal_lg">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4>view signature</h4>
            </div>
            <div class="modal-body">
              <img src="../../Signature/1/Eric.png" width="100%">
                <!-- /.card-body -->
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="upload-modal" tabindex="-1" role="dialog" aria-labelledby="right_modal_lg">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4>upload signature</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                  <div class="row">
                    <div class="col-md-10">
                      <input type="text" class="form-control" id="rd-id" hidden>
                      <input type="file" class="form-control" id="files" onchange="validateFileType()">
                    </div>
                    <div class="col-md-2">
                      <button type="button" class="btn btn-info btn-block" id="submit-upload">Upload</button>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>


@stop

<script src="../../AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<script src="../../AdminLTE-3.2.0/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../AdminLTE-3.2.0/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../AdminLTE-3.2.0/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../AdminLTE-3.2.0/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../AdminLTE-3.2.0/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../AdminLTE-3.2.0/plugins/jszip/jszip.min.js"></script>
<script src="../../AdminLTE-3.2.0/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../AdminLTE-3.2.0/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>

  $(function () {
    
    var table = $('#signatures-list').DataTable({
      destroy: true,
      processing: true,
      info: true,
      ordering: false,
      // scrollY: 800,
      deferRender: false,
      scroller: false,
      searching: true,
      bLengthChange: true,
      paging: true,
      serverSide: true,
      ajax: {
        "url": "{{route('/manager/get-signatures-list')}}",
        "type": "POST",
        "data": {
          usertype: 'manager',
          _token: '{{csrf_token()}}',
        },
      },
      columns: [
        {
          data: 'name',
          name: 'name',
        },
        {
          data: 'region',
          name: 'region',
        },
        {
          data: 'signature',
          name: 'signature',
        }
      ],
    });


    $("#submit-upload").on('click', function () {

      // Get the selected file
      var files = $("#files")[0].files;
      var id = $("#rd-id").val();

      var fd = new FormData();
      fd.append('id', id);
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
        url: "{{route('/upload/file/signature')}}",
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

          // if (response['success'] == 1) {

          //   var Toast = Swal.mixin({
          //     toast: true,
          //     position: 'top-end',
          //     showConfirmButton: false,
          //     timer: 1000,
          //     timerProgressBar: true,
          //     didOpen: (toast) => {
          //       toast.addEventListener('mouseenter', Swal.stopTimer)
          //       toast.addEventListener('mouseleave', Swal.resumeTimer)
          //     },
          //     didClose: (toast) => {
          //       location.reload();
          //     }
          //   });

          //   Toast.fire({
          //     icon: 'success',
          //     title: 'File uploaded'
          //   });

          // } else {

          //   alert(response['message']);

          // }

        }
      });

    });

  });

  function view(id){
    $.ajax({
      url: "{{route('/get/file/signature')}}",
      type: 'POST',
      data: {
        id : id,
        _token: '{{csrf_token()}}',
      },
      success: function (response) {
        console.log(response);
      }
    });

    $("#view-modal").modal();
  }

  function upload(id){
    $("#rd-id").val(id);
    $("#upload-modal").modal();
  }

  function deleteSignature(id){
    alert(id);
  }


  function validateFileType() {

    var selectedFile = document.getElementById('files').files[0];
    var allowedTypes = ['image/png'];

    if (!allowedTypes.includes(selectedFile.type)) {
      alert('Invalid file type. Please upload a PNG');
      document.getElementById('files').value = '';
    }
    
  }

</script>