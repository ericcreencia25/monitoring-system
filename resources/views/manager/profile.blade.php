@extends('layout.manager-layout')
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
    <div class="col-md-8">
      <div class="card card-secondary">
        <div class="card-header">
          <!-- <h3 class="card-title"> -->
          <p class="text-left" style="font-size: 24px; margin-bottom: 0px">PROFILE</p>
          <!-- </h3> -->
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="inputName">Username</label>
                <input type="text" id="username" class="form-control" value="{{auth()->user()->username}}">
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <label for="inputName">First Name</label>
                        <input type="text" id="first-name" class="form-control" value="{{auth()->user()->first_name}}">
                    </div>
                    <div class="col-md-4">
                        <label for="inputName">Middle Name (optional)</label>
                        <input type="text" id="middle-name" class="form-control" value="{{auth()->user()->middle_name}}">
                    </div>
                    <div class="col-md-4">
                        <label for="inputName">Last Name</label>
                        <input type="text" id="last-name" class="form-control" value="{{auth()->user()->last_name}}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="inputName">EMB ID</label>
                <input type="text" id="email" class="form-control" value="{{auth()->user()->id_number}}">
            </div>
            <div class="form-group">
                <label for="inputName">Email</label>
                <input type="text" id="email" class="form-control" value="{{auth()->user()->email}}">
            </div>
            <div class="form-group">
                <label for="inputName">User Type</label>
                <select class="form-control" id="user-type" value="{{auth()->user()->type}}">
                    <option value="1">EMED</option>
                    <option value="2" selected>Regional Director</option>
                </select>
            </div>

            <div class="form-group">
                <button class="btn btn-success btn-flat" id="btn-save">Save</button>
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
    $("#btn-save").on('click', function() {
      var username = $("#username").val();
      var firstname = $("#first-name").val();
      var middlename = $("#middle-name").val();
      var lastname = $("#last-name").val();
      var email = $("#email").val();
      var type = $("#user-type").val();

      Swal.fire({
        // title: "Are you sure?",
        text: "You want to save this detail?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
        cancelButtonText: "No"
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: "{{route('/edit/profile')}}",
            type: 'POST',
            data: {
              username: username,
              firstname: firstname,
              middlename: middlename,
              lastname: lastname,
              email: email,
              type : type,
              id_number : "{{ Session::get('id_number') }}",
              _token: '{{csrf_token()}}',
            },
            success: function (response) {
              Swal.fire({
                // title: "Saved",
                text: "Please try to relogin your account thru ISS",
                icon: "success"
              });
            }

          });
        }
      });
      
    });
  });

</script>