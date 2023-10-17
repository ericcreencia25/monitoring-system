@extends('layout.layout')

<link rel="stylesheet" href="../../AdminLTE-3.2.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../../AdminLTE-3.2.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="../../AdminLTE-3.2.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

<link rel="stylesheet" href="../../AdminLTE-3.2.0/plugins/dropzone/min/dropzone.min.css">
<style>
  .dataTables_filter {
    display: none;
  }
</style>
@vite('resources/css/app.css')
@section('header')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Dashboard</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard v1</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
@stop


@section('content')
<div class="container-fluid">
  <!-- component -->
  <main class="flex w-full h-5/6 shadow-lg rounded-3xl">
    <section class="flex flex-col pt-3 w-4/12 bg-gray-50 h-auto ">
      <label class="px-3">
        <input class="rounded-lg p-4 bg-gray-100 transition duration-200 focus:outline-none focus:ring-2 w-full"
          placeholder="Search..." id="search" />
      </label>

      <div class="overflow-y-scroll">
        <table id="example2" class="table table-hover">
        </table>
      </div>
    </section>
    <section class="w-8/12 px-4 flex flex-col bg-white rounded-r-3xl" style="overflow: scroll;" id="DashboardBody">

    </section>
  </main>
</div>

<div class="modal fade" id="modal-generate-report">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">
          GENERATE REPORT
        </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card card-primary">
          <div class="card-body">
            <div class="form-group">
              <center><label>SELECT REPORT TYPE</label></center>
              <div class="row">
                <div class="col-md-4">
                  <div class="icheck-primary d-inline">
                    <input type="radio" id="inspection-report-type" name="report-type" value="Inspection">
                    <label for="inspection-report-type"></label>
                    Inspection
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="icheck-primary d-inline">
                    <input type="radio" id="monitoring-report-type" name="report-type" value="Monitoring">
                    <label for="monitoring-report-type"></label>
                    Monitoring
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="icheck-primary d-inline">
                    <input type="radio" id="investigation-report-type" name="report-type" value="Investigation">
                    <label for="investigation-report-type"></label>
                    Investigation
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <center><label>SELECT REPORT FOR</label></center>
              <div class="row">
                <div class="col-md-4">
                  <div class="icheck-primary d-inline">
                    <input type="checkbox" id="air-report-for" name="report-for" value="AIR">
                    <label for="air-report-for"></label>
                    AIR
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="icheck-primary d-inline">
                    <input type="checkbox" id="water-report-for" name="report-for" value="WATER">
                    <label for="water-report-for"></label>
                    WATER
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="icheck-primary d-inline">
                    <input type="checkbox" id="eia-report-for" name="report-for" value="EIA">
                    <label for="eia-report-for"></label>
                    EIA
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="icheck-primary d-inline">
                    <input type="checkbox" id="hazwaste-report-for" name="report-for" value="HAZWASTE">
                    <label for="hazwaste-report-for"></label>
                    HAZWASTE
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="icheck-primary d-inline">
                    <input type="checkbox" id="chemicals-report-for" name="report-for" value="CHEMICALS">
                    <label for="chemicals-report-for"></label>
                    CHEMICALS
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="icheck-primary d-inline">
                    <input type="checkbox" id="solid-waste-report-for" name="report-for" value="SOLID WASTE">
                    <label for="solid-waste-report-for"></label>
                    SOLID WASTE
                  </div>
                </div>


                <div class="col-md-4">
                  <div class="icheck-primary d-inline">
                    <input type="checkbox" id="integrated-report-for" name="report-for" value="INTEGRATED">
                    <label for="integrated-report-for"></label>
                    INTEGRATED
                  </div>
                </div>

              </div>
            </div>

            <div class="form-group">

              <div class="icheck-primary d-inline">
                With Notice of Violation?
                <input type="checkbox" id="notice-of-violation" name="notice-of-violation">
                <label for="notice-of-violation"></label>

              </div>

            </div>
          </div>
        </div>

        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="generate-report-proceed">Proceed</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-generate-nov">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">
          GENERATE NOV
        </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card card-primary">
          <div class="card-body">

            <div class="form-group">
              <center><label>SELECT SECTOR</label></center>
              <div class="row">
                <div class="col-md-4">
                  <div class="icheck-primary d-inline">
                    <input type="checkbox" id="air-report-sector" name="report-sector" value="AIR">
                    <label for="air-report-sector"></label>
                    AIR
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="icheck-primary d-inline">
                    <input type="checkbox" id="water-report-sector" name="report-sector" value="WATER">
                    <label for="water-report-sector"></label>
                    WATER
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="icheck-primary d-inline">
                    <input type="checkbox" id="eia-report-sector" name="report-sector" value="EIA">
                    <label for="eia-report-sector"></label>
                    EIA
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="icheck-primary d-inline">
                    <input type="checkbox" id="hazwaste-report-sector" name="report-sector" value="HAZWASTE">
                    <label for="hazwaste-report-sector"></label>
                    HAZWASTE
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="icheck-primary d-inline">
                    <input type="checkbox" id="chemicals-report-sector" name="report-sector" value="CHEMICALS">
                    <label for="chemicals-report-sector"></label>
                    CHEMICALS
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="icheck-primary d-inline">
                    <input type="checkbox" id="solid-waste-report-sector" name="report-sector" value="SOLID WASTE">
                    <label for="solid-waste-report-sector"></label>
                    SOLID WASTE
                  </div>
                </div>


                <div class="col-md-4">
                  <div class="icheck-primary d-inline">
                    <input type="checkbox" id="integrated-report-sector" name="report-sector" value="INTEGRATED">
                    <label for="integrated-report-sector"></label>
                    INTEGRATED
                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>

        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="generate-nov-proceed">Proceed</button>
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

<script src="../../AdminLTE-3.2.0/plugins/dropzone/min/dropzone.min.js"></script>

<script>

  $(function () {
    sessionStorage.clear();
    localStorage.clear();

    $("#generate-report-proceed").on('click', function () {

      var ReportType = $("input[type='radio'][name='report-type']:checked").val();
      // var ReportFor = $("input[type='checkbox'][name='report-for']:checked").val();

      var ReportFor = $('input[type=checkbox][name="report-for"]:checked').map(function (_, el) {
        return $(el).val();
      }).get();

      var CompanyName = $("#company-name").val();
      var CompanyAddress = $("#company-address").val();
      var CompanyEmail = $("#company-email").val();
      var CompanyContact = $("#company-contact").val();
      var Longitude = $("#longitude").val();
      var Latitude = $("#latitude").val();
      var emb_id = $("#emb_id").val();

      sessionStorage.setItem("emb-id", emb_id);
      sessionStorage.setItem("company-contact", CompanyContact);
      sessionStorage.setItem("company-email", CompanyEmail);
      sessionStorage.setItem("company-address", CompanyAddress);
      sessionStorage.setItem("company-name", CompanyName);
      sessionStorage.setItem("longitude", Longitude);
      sessionStorage.setItem("latitude", Latitude);

      sessionStorage.setItem("type-of-report", ReportType);
      sessionStorage.setItem("report-for", JSON.stringify(ReportFor));
      sessionStorage.setItem("new-or-old", 'new');

      localStorage.removeItem("currentPage");
      localStorage.removeItem("firstPageData");
      localStorage.removeItem("secondPageData");
      localStorage.removeItem("secondPageData-establishmentPermits");



      window.open("/report");
    });

    $("#generate-nov-proceed").on('click', function () {

      sessionStorage.clear();
      localStorage.clear();
      // var ReportType = $("input[type='radio'][name='report-type']:checked").val();
      // var ReportFor = $("input[type='checkbox'][name='report-for']:checked").val();

      var Sector = $('input[type=checkbox][name="report-sectore"]:checked').map(function (_, el) {
        return $(el).val();
      }).get();

      var CompanyName = $("#company-name").val();
      var CompanyAddress = $("#company-address").val();
      var CompanyEmail = $("#company-email").val();
      var CompanyContact = $("#company-contact").val();
      var emb_id = $("#emb_id").val();

      sessionStorage.setItem("emb-id", emb_id);

      sessionStorage.setItem("company-contact", CompanyContact);
      sessionStorage.setItem("company-email", CompanyEmail);
      sessionStorage.setItem("company-address", CompanyAddress);
      sessionStorage.setItem("company-name", CompanyName);
      sessionStorage.setItem("nov-sector", JSON.stringify(Sector));


      window.open("/nov");
    });

    $("#integrated-report-for").on('change', function () {

      var btn = $("#integrated-report-for:checked").val();
      if (btn) {
        $('input[type=checkbox][name="report-for"]').attr('checked', 'checked');
      }

    });

    $('#search').keyup(function () {
      var table = $('#example2').DataTable();
      table.search($(this).val()).draw();
    });

    var table = $('#example2').DataTable({
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
        "url": "{{route('establishmentAll')}}",
        "type": "POST",
        "data": {
          // data : $array, 
          _token: '{{csrf_token()}}',
        },
      },
      columns: [
        {
          data: 'Action',
          className: "whitespace-normal px-6 py-4 font-thin text-sm font-sans",
          name: 'Action'
        },
      ],
      "drawCallback": function (settings) {
        $("#example2 thead").remove();
      },
      "createdRow": function (row, data, dataIndex) {
        $(row).addClass('py-5 border-b px-3 transition hover:bg-pink-100');
      },
    });



  });




  function shapefilesAdd() {

    var emb_id = $("#emb_id").val();
    var CompanyName = $("#company-name").val();
    sessionStorage.setItem("company-name", CompanyName);

    // window.open("/shapefiles/" + emb_id);

    window.open("http://127.0.0.5:8000/geomap?Source=EMS&GUID=" + emb_id, '_blank');

  }

  function getEstablishmentDetails(cnt) {

    $.ajax({
      url: "{{route('establishmentDetails')}}",
      type: 'POST',
      data: {
        cnt: cnt,
        _token: '{{csrf_token()}}',
      },
      beforeSend: function (xhr, opts) {
        // $("#iee-checklist-table-land #"+BtnID+"").html(`<i class="fa fa-spinner fa-spin"></i>Loading`);
      },
      success: function (result) {
        var response = '';
        response = result[0];

        console.log(result);


        if (result[1] > 0) {
          var saved = 'yellow';
        } else {
          var saved = 'none';
        }



        if (response['company_type'] == response['company_id'])
          CompanyCategory = 'MAIN'
        else
          CompanyCategory = 'BRANCH - ' + response['company_id']

        if (response['house_no'])
          house_no = response['house_no'] + ', ';
        else
          house_no = '';

        if (response['street'])
          street = response['street'] + ', ';
        else
          street = '';

        if (response['barangay_name'])
          barangay_name = response['barangay_name'] + ', ';
        else
          barangay_name = '';

        if (response['city_name'])
          city_name = response['city_name'] + ', ';
        else
          city_name = '';

        if (response['province_name'])
          province_name = response['province_name'] + ', ';
        else
          province_name = '';

        if (response['region_name'])
          region_name = response['region_name'] + ', ';
        else
          region_name = '';

        var MailingAddress = house_no + street + barangay_name + city_name + province_name + region_name;

        //icons
        // <li class="w-6 h-6">
        //         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        //           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        //             d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
        //         </svg>
        //       </li>
        //       <li class="w-6 h-6">
        //         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        //           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        //             d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
        //         </svg>
        //       </li>

        //       <li class="w-6 h-6">
        //         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        //           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        //             d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
        //         </svg>
        //       </li>


        var details = `<div class="flex justify-between items-center h-36 border-b-2 mb-4">
          <div class="flex space-x-4 items-center">
            <div class="border border-gray-300 pl-6 pr-2 py-2 rounded-full flex items-center space-x-4">
              <div>
                `+ EstablishmentStatus(response['deleted']) + `
              </div>
            </div>

            <div class="flex flex-col">
              <h3 class="font-semibold text-sm" id="company_name">`+ EstablishmentName(response['establishment_name'], response['company_name']) + `</h3>
              <p class="text-black text-gray-400 text-xs" id="company_email">`+ response['email'] + `</p>
            </div>
          </div>
          <div>
            <ul class="flex text-gray-400 space-x-4">
              
              <li class="w-6 h-6">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
              </li>
              <li class="w-6 h-6">
                <div id="favorite">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="`+ saved + `" viewBox="0 0 24 24" stroke="currentColor" onclick="favorite('none')" style="cursor: pointer">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                  </svg>
                </div>
                
              </li>
            </ul>
          </div>
          </div>

          <section>
          <div class="row">
            <div class="col-md-3">
              <button type="button" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
                Generate Report
              </button>
              <ul class="dropdown-menu">
                <li class="dropdown-item" data-toggle="modal" data-target="#modal-generate-report" href="#"><a
                    href="#">Report</a></li>
                    <li class="dropdown-item" data-toggle="modal" data-target="#modal-generate-nov" href="#"><a
                    href="#">NOV</a></li>
                    <li class="dropdown-item" data-toggle="modal" data-target="#modal-generate-report" href="#"><a
                    href="#">Commitment</a></li>
                    <li class="dropdown-item" data-toggle="modal" data-target="#modal-generate-report" href="#"><a
                    href="#">Compliance</a></li>
                    <li class="dropdown-item" data-toggle="modal" data-target="#modal-generate-report" href="#"><a
                    href="#">Decision</a></li>
              </ul>
            </div>
          </div>

          <br>
          </section>


          <section>

          <div class="row">
            <div class="col-7 col-sm-10">
              <div class="tab-content" id="vert-tabs-right-tabContent">
                <div class="tab-pane fade show active" id="vert-tabs-right-home" role="tabpanel"
                  aria-labelledby="vert-tabs-right-home-tab">

                  <div class="card card-secondary" style="box-shadow: none;">
                    <div class="card-header">
                      <h3 class="card-title">Profile Information</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <form>
                        <div class="card-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1" style="margin-bottom: 0px">EMB ID</label>
                            <input type="text" class="form-control" id="emb_id"  value="`+ response['emb_id'] + `" style="background-color: white;" disabled >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1" style="margin-bottom: 0px">Company Category</label>
                            <input type="text" class="form-control" id="exampleInputPassword1"  value="`+ CompanyCategory + `" style="background-color: white;" disabled >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1" style="margin-bottom: 0px">Company Name</label>
                            <input type="text" class="form-control" id="company-name"  value="`+ response['company_name'] + `" style="background-color: white;" disabled >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1" style="margin-bottom: 0px">Establishment Name</label>
                            <input type="text" class="form-control" id="establishment-name"  value="`+ response['establishment_name'] + `" style="background-color: white;" disabled >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1" style="margin-bottom: 0px">Mailing Address</label>
                            <input type="text" class="form-control" id="company-address"  value="`+ MailingAddress + `" style="background-color: white;" disabled >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1" style="margin-bottom: 0px">Company Contact No</label>
                            <input type="text" class="form-control" id="company-contact" 
                            value="`+ response['contact_no'] + `" style="background-color: white;" disabled >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1" style="margin-bottom: 0px">Company Email</label>
                            <input type="text" class="form-control" id="company-email" 
                            value="`+ response['email'] + `" style="background-color: white;" disabled >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1" style="margin-bottom: 0px">Date Approved</label>
                            <input type="text" class="form-control" id="date-approved" 
                            value="`+ response['input_date'] + `" style="background-color: white;" disabled >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1" style="margin-bottom: 0px">Project Type</label>
                            <textarea type="text" class="form-control" id="project-type" style="background-color: white;" disabled />`+ response['project_name'] + `</textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1" style="margin-bottom: 0px">Staff</label>
                            <input type="text" class="form-control" id="project-type" 
                            value="`+ response['input_staff'] + `" style="background-color: white;" disabled >
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="vert-tabs-right-profile" role="tabpanel"
                  aria-labelledby="vert-tabs-right-profile-tab">

                  <div class="card card-secondary" style="box-shadow: none;">
                    <div class="card-header">
                      <h3 class="card-title">CEO/President/Owner</h3>
                    </div>
                    <div class="card-body">
                      <form>
                        <div class="card-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1" style="margin-bottom: 0px">Full Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" value="`+ response['ceo_fname'] + response['ceo_sname'] + `" style="background-color: white;" disabled >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1" style="margin-bottom: 0px">Owner Contact No</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" value="`+ response['ceo_contact_num'] + `" style="background-color: white;" disabled >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1" style="margin-bottom: 0px">Owner Email</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" value="`+ response['ceo_email'] + `" style="background-color: white;" disabled >
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="vert-tabs-right-messages" role="tabpanel"
                  aria-labelledby="vert-tabs-right-messages-tab">

                  <div class="card card-secondary" style="box-shadow: none;">
                    <div class="card-header">
                      <h3 class="card-title">Plant Manager</h3>
                    </div>
                    <div class="card-body">
                      <form>
                        <div class="card-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1" style="margin-bottom: 0px">Full Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" value="`+ isset(response['plant_manager_name']) + `" style="background-color: white;" disabled >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1" style="margin-bottom: 0px">Certificate of Accreditation No</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" value="`+ isset(response['plant_manager_coe']) + `" style="background-color: white;" disabled >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1" style="margin-bottom: 0px">Contact Number (Mobile Number | Telephone Number)</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" value="`+ isset(response['plant_manager_mobile_num']) + ' | ' + isset(response['plant_manager_tel_num']) + `" style="background-color: white;" disabled >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1" style="margin-bottom: 0px">Email</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" value="`+ isset(response['plant_manager_email']) + `" style="background-color: white;" disabled >
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>

                </div>
                <div class="tab-pane fade" id="vert-tabs-right-settings" role="tabpanel"
                  aria-labelledby="vert-tabs-right-settings-tab">

                  <div class="card card-secondary" style="box-shadow: none;">
                    <div class="card-header">
                      <h3 class="card-title">Pollution Control Officer</h3>
                    </div>
                    <div class="card-body">
                      <form>
                        <div class="card-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1" style="margin-bottom: 0px">Full Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" value="`+ isset(response['pco']) + `" style="background-color: white;" disabled >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1" style="margin-bottom: 0px">Email</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" value="`+ isset(response['pco_email']) + `" style="background-color: white;" disabled >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1" style="margin-bottom: 0px">Certificate of Employment</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" value="`+ isset(response['pco_coe']) + `" style="background-color: white;" disabled >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1" style="margin-bottom: 0px">Contact</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" value="`+ isset(response['pco_mobile_num']) + `" style="background-color: white;" disabled >
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>

                </div>
                <div class="tab-pane fade" id="vert-tabs-right-managing-head" role="tabpanel"
                  aria-labelledby="vert-tabs-right-managing-head-tab">

                  <div class="card card-secondary" style="box-shadow: none;">
                    <div class="card-header">
                      <h3 class="card-title">Managing Head</h3>
                    </div>
                    <div class="card-body">
                      <form>
                        <div class="card-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1" style="margin-bottom: 0px">Full Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" value="`+ isset(response['managing_head']) + `" style="background-color: white;" disabled >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1" style="margin-bottom: 0px">Email</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" value="`+ isset(response['managing_head_email']) + `" style="background-color: white;" disabled >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1" style="margin-bottom: 0px">Contact</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" value="`+ isset(response['managing_head_mobile_no']) + ' | ' + isset(response['managing_head_tel_no']) + `" style="background-color: white;" disabled >
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>

                </div>

                <div class="tab-pane fade" id="vert-tabs-right-shapefiles" role="tabpanel"
                  aria-labelledby="vert-tabs-right-shapefiles-tab">

                  <div class="card card-secondary" style="box-shadow: none;">
                    <div class="card-header">
                      <h3 class="card-title">Shapefiles</h3>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <div class="row">
                        
                          <div class="col-md-6">
                            <label style="margin-bottom: 0px">Longitude</label>
                            <input class="form-control" value="`+ response['longitude'] + `" style="background-color: white;" readonly id="longitude">
                          </div>
                          <div class="col-md-6">
                            <label style="margin-bottom: 0px">Latitude</label>
                            <input class="form-control" value="`+ response['latitude'] + `" style="background-color: white;" readonly id="latitude" >
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-12">
                            <button class="btn btn-default btn-block" onclick="shapefilesAdd()">ADD SHAPEFILES/GEOJSON</button>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                  </div>

                </div>

                <div class="tab-pane fade" id="vert-tabs-right-nov" role="tabpanel"
                  aria-labelledby="vert-tabs-right-nov-tab">

                  <div class="card card-secondary" style="box-shadow: none;">
                    <div class="card-header">
                      <h3 class="card-title">Notice of Violation</h3>
                    </div>
                    <div class="card-body">
                      <div class="form-group">

                        <table class="table" id="nov-list" style="width: 100%">
                          <thead>
                            <th style="width: 80%">Case Number</th>
                          </thead>

                          <tbody>
                          </tbody>
                        </table>
                      </div>

                      
                    </div>
                  </div>

                </div>

              </div>
            </div>
            <div class="col-5 col-sm-2">
              <div class="nav flex-column nav-tabs nav-tabs-right h-100" id="vert-tabs-right-tab" role="tablist"
                aria-orientation="vertical">
                <a class="nav-link active" id="vert-tabs-right-home-tab" data-toggle="pill" href="#vert-tabs-right-home"
                  role="tab" aria-controls="vert-tabs-right-home" aria-selected="true">Profile</a>
                <a class="nav-link" id="vert-tabs-right-profile-tab" data-toggle="pill" href="#vert-tabs-right-profile"
                  role="tab" aria-controls="vert-tabs-right-profile" aria-selected="false">Owner</a>
                <a class="nav-link" id="vert-tabs-right-messages-tab" data-toggle="pill" href="#vert-tabs-right-messages"
                  role="tab" aria-controls="vert-tabs-right-messages" aria-selected="false">Plant Manager</a>
                <a class="nav-link" id="vert-tabs-right-settings-tab" data-toggle="pill" href="#vert-tabs-right-settings"
                  role="tab" aria-controls="vert-tabs-right-settings" aria-selected="false">PCO</a>
                <a class="nav-link" id="vert-tabs-right-managing-head-tab" data-toggle="pill"
                  href="#vert-tabs-right-managing-head" role="tab" aria-controls="vert-tabs-right-managing-head"
                  aria-selected="false">Managing Head</a>
                <a class="nav-link" id="vert-tabs-right-shapefiles-tab" data-toggle="pill"
                  href="#vert-tabs-right-shapefiles" role="tab" aria-controls="vert-tabs-right-shapefiles"
                  aria-selected="false">Shapefiles</a>
                <a class="nav-link" id="vert-tabs-right-nov-tab" data-toggle="pill"
                  href="#vert-tabs-right-nov" role="tab" aria-controls="vert-tabs-right-nov"
                  aria-selected="false">NOV</a>

              </div>
            </div>
          </div>

          </section>`;

        $("#DashboardBody").html(details);

        var table = $('#nov-list').DataTable({
          destroy: true,
          processing: true,
          info: false,
          ordering: false,
          // scrollY: 800,
          deferRender: false,
          scroller: false,
          searching: true,
          bLengthChange: true,
          paging: false,
          serverSide: true,
          ajax: {
            "url": "{{route('getNOVListbyEMBID')}}",
            "type": "POST",
            "data": {
              emb_id: result[0]['emb_id'],
              _token: '{{csrf_token()}}',
            },
          },
          columns: [
            {
              data: 'case_number',
              name: 'case_number',
            },
          ],
        });

      }
    });
  }

  function viewNOV(ID) {
    sessionStorage.clear();
    sessionStorage.setItem("nov-id", ID);
    // location.href = "/nov";

    window.open('/nov', '_blank');
  }

  function favorite(color) {

    if (color == 'none') {
      var theme = 'yellow';
    } else {
      var theme = 'none';
    }

    var company_name = $("#company-name").val();
    var establishment_name = $("#establishment-name").val();
    var emb_id = $("#emb_id").val();

    var details = `<svg xmlns="http://www.w3.org/2000/svg" fill="` + theme + `" viewBox="0 0 24 24" stroke="currentColor" onclick="favorite('` + theme + `')" style="cursor: pointer">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                  </svg>`;
    $("#favorite").html(details);


    $.ajax({
      url: "{{route('favoriteAdd')}}",
      type: 'POST',
      data: {
        company_name: company_name,
        emb_id: emb_id,
        establishment_name: establishment_name,
        theme: theme,
        _token: '{{csrf_token()}}',
      },
      beforeSend: function (xhr, opts) {
        // $("#iee-checklist-table-land #"+BtnID+"").html(`<i class="fa fa-spinner fa-spin"></i>Loading`);
      },
      success: function (response) {

      }
    });
  }


  function isset(object) {
    if (object == null || object == '') {
      return '';
    } else {
      return object;
    }
    // return (typeof object !== 'undefined');
  }

  function EstablishmentName(establishment, companyname) {
    if (establishment == null || establishment == '') {
      return companyname;
    } else {
      return establishment;
    }
    // return (typeof object !== 'undefined');
  }

  function EstablishmentStatus(status) {

    if (status == '0') {
      return `<div class="rounded-full w-3 h-3 bg-green-700"></div>
                </div>
                <div>
                <p class="text-large text-gray-500 h-3 font-large">Active</p>`;
    } else {
      return `<div class="rounded-full w-3 h-3 bg-red-700"></div>
                </div>
                <div>
                <p class="text-large text-gray-500 h-3 font-large">Inactive</p>`;
    }

  }
</script>