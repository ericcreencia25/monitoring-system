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
        <h1 class="m-0"> </h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">REPORT</li>
        </ol>
      </div><!-- /.col -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div> @stop @section('content') <div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card card-secondary">
        <div class="card-header">
          <!-- <h3 class="card-title"> -->
          <p class="text-left" style="font-size: 24px; margin-bottom: 0px">REPORT LIST</p>
          <!-- </h3> -->
        </div>
        <div class="card-body">
          <!-- <div class="form-group"> -->
          <table class="table table" id="report-list">
            <thead>
              <th>EMB ID</th>
              <th>Company Name</th>
              <th>Date</th>
              <th>Report Type</th>
              <th>Report For</th>
              <th>Action</th>
              <th>With NOV</th>
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

  sessionStorage.clear();
  localStorage.clear();

  $(function () {

    var table = $('#report-list').DataTable({
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
        "url": "{{route('getReportList')}}",
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
          data: 'company_name',
          name: 'company_name',
        },
        {
          data: 'created_date',
          name: 'created_date',
        },
        {
          data: 'report_type',
          name: 'report_type',
        },
        
        
        {
          data: 'report_for',
          name: 'report_for',
        },
        {
          data: 'action',
          name: 'action',
        },
        {
          data: 'with_NOV',
          name: 'with_NOV',
        },
      ],
    });

    


  });



  function viewReport(id, emb_id) {
    sessionStorage.clear();
    localStorage.clear();

    sessionStorage.setItem("id", id);
    sessionStorage.setItem("emb-id", emb_id);
    sessionStorage.setItem("new-or1-old", 'old');

    // if (type == 'old') {
    //// ajax call for all the data
    var id = sessionStorage.getItem("id");
    var emb_id = sessionStorage.getItem("emb-id");

    $.ajax({
      url: "{{route('getReportData')}}",
      type: 'POST',
      data: {
        page: [1, 2, 4],
        id: id,
        emb_id: emb_id,
        _token: '{{csrf_token()}}',
      },
      beforeSend: function () {

      },
      success: function (response) {

        sessionStorage.setItem("report-for", response['inspection_report']['report_for']);
        ///first page


        const arrayproduct_lines = [];
        $.each(response['product_lines'], function (index, value) {
          arrayproduct_lines.push([value['product_lines'], value['declared_rate_per_day'], value['actual_rate_per_day']]);
        });

        const firstPageData = {
          'address': response['inspection_report']['address'],
          'date-of-effectivity': new Date(response['inspection_report']['effectivity_date']).toLocaleDateString('en-GB'),
          'date-of-expiry': new Date(response['inspection_report']['expiry_date']).toLocaleDateString('en-GB'),
          'email': response['inspection_report']['email'],
          'establishment-name': response['inspection_report']['establishment_name'],
          'geograpical-coordinates': response['inspection_report']['geo_coordinates'],
          'managing-head': response['inspection_report']['managing_head'],
          'name-of-pco': response['inspection_report']['pco_name'],
          'nature-of-business': response['inspection_report']['nature_of_business'],
          'operating-hours-day': response['inspection_report']['operating_hours_per_day'],
          'operating-hours-week': response['inspection_report']['operating_hours_per_week'],
          'operating-hours-year': response['inspection_report']['operating_hours_per_year'],
          'pco-accreditation-number': response['inspection_report']['pco_accreditation'],
          'phone-fax': response['inspection_report']['phone_fax_number'],
          'product': response['inspection_report']['product'],
          'psic-code': response['inspection_report']['psic_code'],
          'year-established': response['inspection_report']['year_established'],
          'product-lines-table': arrayproduct_lines,
        }

        localStorage.setItem('firstPageData', JSON.stringify(firstPageData));

        /// 2nd page

        const secondPageData = {
          'check-status': response['purpose_of_inspection']['verify_accuracy'],
          'determine-compliance': response['purpose_of_inspection']['determine_compliance_status'],
          'investigate-community': response['purpose_of_inspection']['investigate_community'],
          'verify-accuracy': response['purpose_of_inspection']['verify_accuracy'],
          'others': response['purpose_of_inspection']['others'],
        }

        localStorage.setItem('secondPageData', JSON.stringify(secondPageData));

        if (response['establishment_permits'] != undefined) {
          localStorage.setItem('secondPageData-establishmentPermits', JSON.stringify(response['establishment_permits']));
        } else {

          const establishmentPermits = {
            'establishment_permits': 'none',
          }

          localStorage.setItem('secondPageData-establishmentPermits', JSON.stringify(establishmentPermits));
        }


        /// 4th Page

        const arrayrecommendation = [];
        $.each(response['recommendation'], function (index, value) {
          const recommendation = {
            'id': value['element_id'],
            'value': value['value']
          }
          arrayrecommendation.push(recommendation);
        });

        localStorage.setItem('fourthPageData', JSON.stringify(arrayrecommendation));

      }


    });
    // }

    location.href = "/report?id=" + id;
  }

  function viewPDF(ID) {
    window.open("/preview-inspection-report/" + ID);
  }

  function viewNOV(id, report_id) {

    if (id == 0) {

      $.ajax({
        url: "{{route('/get-report/id')}}",
        type: 'POST',
        data: {
          report_id: report_id,
          _token: '{{csrf_token()}}',
        },
        success: function (response) {
          sessionStorage.setItem("emb-id", response['emb_id'] );
          sessionStorage.setItem("report-id", response['id'] );

          sessionStorage.setItem("company-name", response['establishment_name']);
          sessionStorage.setItem("company-contact", response['phone_fax_number']);
          sessionStorage.setItem("company-email", response['email']);
          sessionStorage.setItem("company-address", response['address']);
          
          window.open("/nov");
        }

      });

    } else {
      sessionStorage.setItem("nov-id", id);
      window.open("/nov");
    }



  }

  // function deleteNOV(ID) {
  //   alert(ID);
  // }

</script>