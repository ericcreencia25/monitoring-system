@extends('layout.layout')

<link rel="stylesheet" href="../../AdminLTE-3.2.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../../AdminLTE-3.2.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="../../AdminLTE-3.2.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="../../AdminLTE-3.2.0/plugins/bs-stepper/css/bs-stepper.min.css">

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
          <li class="breadcrumb-item active">BOOKMARK</li>
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
          <p class="text-left" style="font-size: 24px; margin-bottom: 0px">BOOKMARK</p>
          <!-- </h3> -->
        </div>
        <div class="card-body">
          <!-- <div class="form-group"> -->
          <table class="table table-bordered" id="saved-list">
            <thead>
              <th>EMB ID</th>
              <th>Establishment Name</th>
              <th>Action</th>
            </thead>
          </table>
          <!-- </div> -->
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
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  });

  $(function () {

    var table = $('#saved-list').DataTable({
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
        "url": "{{route('bookmarkGet')}}",
        "type": "POST",
        "data": {
          _token: '{{csrf_token()}}',
        },
      },
      columns: [
        {
          data: 'emb_id',
          name: 'emb_id',
        },
        {
          data: 'establishment_name',
          name: 'establishment_name',
        },
        {
          data: 'action',
          name: 'action',
        },
      ],
    });


  });



  // function viewNOV(ID) {
  //   sessionStorage.clear();
  //   sessionStorage.setItem("nov-id", ID);
  //   location.href = "/nov";
  // }

  // function deleteNOV(ID) {
  //   alert(ID);
  // }

</script>