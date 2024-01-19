@extends('layout.layout')

<link rel="stylesheet" href="../../AdminLTE-3.2.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../../AdminLTE-3.2.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="../../AdminLTE-3.2.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="../../AdminLTE-3.2.0/plugins/bs-stepper/css/bs-stepper.min.css">

<style>
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
        <h1 class="m-0"></h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Report</li>
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
      <div class="card card-secondary">
        <div class="card-header">
          <!-- <h3 class="card-title"> -->
          <p class="text-left" style="font-size: 24px; margin-bottom: 0px">NOTICE OF VIOLATION LIST</p>
          <!-- </h3> -->
        </div>
        <div class="card-body">
          <!-- <div class="form-group"> -->
          <table class="table table" id="nov-list">
            <thead>
              <th>Case Number</th>
              <th>Name</th>
              <th>Company Name</th>
              <th>Violation_For</th>
              <th>Action</th>
            </thead>
          </table>
          <!-- </div> -->
        </div>
      </div>
    </div>
  </div>
</div>

<div class="loading-overlay"></div>
<div class="loading-overlay-image-container">
  <div class="loader"></div>
  Loading...
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
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  });

  sessionStorage.clear();
      localStorage.clear();

  $(function () {

    var table = $('#nov-list').DataTable({
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
        "url": "{{route('getNOVList')}}",
        "type": "POST",
        "data": {
          _token: '{{csrf_token()}}',
        },
      },
      columns: [
        {
          data: 'case_number',
          name: 'case_number',
        },
        {
          data: 'name',
          name: 'name',
        },
        {
          data: 'company_name',
          name: 'company_name',
        },
        {
          data: 'violation_for',
          name: 'violation_for',
        },
        {
          data: 'action',
          name: 'action',
        },
      ],
    });

  });


  function viewNOV(ID) {
    sessionStorage.clear();
    sessionStorage.setItem("nov-id", ID);
    location.href = "/nov";
  }

  function deleteNOV(ID) {
    Swal.fire({
      title: "Do you want to delete this notice of violation?",
      showDenyButton: false,
      showCancelButton: true,
      confirmButtonText: "Yes",
      cancelButtonText: "No",
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
        $.ajax({
        url: "{{route('/delete-nov')}}",
        type: 'POST',
        data: {
          id: ID,
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

          if(response == 'success') {
            Swal.fire({
              position: "center",
              icon: "success",
              title: "Your request has been successfully deleted",
              showConfirmButton: false,
              timer: 1500,
              timerProgressBar: true,
              didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
              },
              didClose: (toast) => {
                location.href = '/nov-list';

                // alert('The page will go to reports list');
              }
          });
          }
        }

      });
      } else if (result.isDenied) {
        Swal.fire("cancel", "", "info");
      }
    });
  }

  function viewPDF(ID) {
    window.open("/preview-nov-pdf/" + ID, "_blank");
  }

  
</script>