@extends('layout.rd-layout')
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
          <li class="breadcrumb-item active">ACCOUNTS</li>
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
          <p class="text-left" style="font-size: 24px; margin-bottom: 0px">Accounts</p>
          <!-- </h3> -->
        </div>
        <div class="card-body">
          <table class="table" id="user-list">
            <thead>
              <th>Name</th>
              <th>Type</th>
              <th>Email</th>
              <th>Last Activity</th>
              <th>Status</th>
              <th>Action</th>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-add-account">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">
            Add User
          </h4>
      </div>
      <div class="modal-body">
        <div class="card-body">
          <input id="user-id" value="0" hidden />

            <div class="row mb-3">
              <label for="first_name" class="col-md-4 col-form-label text-md-end">First Name</label>

              <div class="col-md-6">
                <input id="first_name" type="text" class="form-control" name="first_name" required autocomplete="first_name" autofocus>
                <p class="text-danger" id="error-first-name" hidden></p>
              </div>
            </div>

            <div class="row mb-3">
              <label for="middle_name" class="col-md-4 col-form-label text-md-end">Middle Name</label>

              <div class="col-md-6">
                <input id="middle_name" type="text" class="form-control" name="middle_name" required autocomplete="middle_name" autofocus>
                <p class="text-danger" id="error-middle-name" hidden></p>
              </div>
            </div>

            <div class="row mb-3">
              <label for="last_name" class="col-md-4 col-form-label text-md-end">Last Name</label>

              <div class="col-md-6">
                <input id="last_name" type="text" class="form-control" name="last_name" required autocomplete="last_name" autofocus>
                <p class="text-danger" id="error-last-name" hidden></p>
              </div>
            </div>

            <div class="row mb-3">
              <label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label>

              <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" required autocomplete="email">
                <p class="text-danger" id="error-email" hidden></p>
              </div>
            </div>

            <div class="row mb-3">
              <label for="email" class="col-md-4 col-form-label text-md-end">User Type</label>

              <div class="col-md-6">
                <select id="user-type" class="form-control custom-select">
                  <option selected="" disabled="">Select one</option>
                  <option value="1">User</option>
                  <option value="2">Admin</option>
                  <option value="3">Regional Director</option>
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <label for="email" class="col-md-4 col-form-label text-md-end">Status</label>

              <div class="col-md-6">
                <select id="user-status" class="form-control custom-select">
                  <option selected="" disabled="">Select one</option>
                  <option value="1">Active</option>
                  <option value="0">Deactivate</option>
                </select>
              </div>
            </div>

            <div class="row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="button" class="btn btn-primary" id="btn-add-user">Register</button>
                <!-- <button type="button" class="btn btn-primary" id="btn-edit-user" hidden>Edit</button> -->
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
    
    var table = $('#user-list').DataTable({
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
            "url": "{{route('/get-user-list')}}",
            "type": "POST",
            "data": {
              _token: '{{csrf_token()}}',
            },
          },
          columns: [
          {
            data: 'name',
            name: 'name',
          },
          {
            data: 'user_type',
            name: 'user_type',
          },
          {
            data: 'email',
            name: 'email',
          },
          {
            data: 'last_activity',
            name: 'last_activity',
          },
          {
            data: 'status',
            name: 'status',
          },
          {
            data: 'action',
            name: 'action',
          },
          ]
        });

  });


  function editAccount(id) {
      $.ajax({
            url: "{{route('/get-acount')}}",
            type: 'POST',
            data: {
                id : id,
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
            success: function (result) {
              console.log(result);

              $("#first_name").val(result['first_name']);
              $("#middle_name").val(result['middle_name']);
              $("#last_name").val(result['last_name']);
              $("#email").val(result['email']);
              $("#user-type").val(result['type']);

              $("#user-status").val(result['active']);
              
              $("#modal-add-account").modal();
              $("#btn-add-user").html('Save');
              $("#user-id").val(id);
            }

        });
    }

</script>