@extends('layout.rd-layout')

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
</div> @stop 
@section('content') 
<div class="container-fluid">
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
          <table class="table table-bordered" id="report-list">
            <thead>
              <th>EMB ID</th>
              <th>Company Name</th>
              <th>Date</th>
              <th>Report Type</th>
              <th>Report For</th>
              <th>Status</th>
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

<div class="loading-overlay"></div>
<div class="loading-overlay-image-container">
  <div class="loader"></div>
  Loading...
</div>

<div class="modal modal-right fade" id="right_modal_lg" tabindex="-1" role="dialog" aria-labelledby="right_modal_lg">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <i>
                    <h5 class="modal-title" id="ticket-number">
                    </h5>
                    <span id="badge-status-ticket"></span>
                </i>
                <span class="time"><i class="fas fa-clock"></i> <small id="date-submitted"></small></span>
            </div>
            <div class="modal-body">
              
              <table class="table table-bordered" id="nov-list">
                <thead>
                  <th>Case Number</th>
                  <th>Status</th>
                  <th width="10%"></th>
                </thead>
                <tbody id="nov-list-body">
                </tbody>
              </table>

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
        "url": "{{route('/manager/get-report-list')}}",
        "type": "POST",
        "data": {
          usertype: 'manager',
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
          data: 'status',
          name: 'status',
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

  function viewInvestigationReport(id, emb_id) {
    sessionStorage.setItem("emb-id", emb_id);

    location.href = "/report?id=" + id + '&type=investigation';
  }



  function viewReport(id, emb_id) {
    sessionStorage.clear();
    localStorage.clear();

    sessionStorage.setItem("id", id);
    sessionStorage.setItem("emb-id", emb_id);
    sessionStorage.setItem("new-or-old", 'old');

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

    location.href = "/report?id=" + id + '&type=inspection';
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

  function linkToNOV(report_id) {

    $.ajax({
      url: "{{route('/get-nov-by-report-id')}}",
      type: 'POST',
      data: {
        report_id: report_id,
        _token: '{{csrf_token()}}',
      },
      success: function (response) {

        $("#nov-list-body").html('');
        $.each(response, function (index, value) {
          $("#nov-list-body").append(
            `<tr>
                <td>`+value['nov']['case_number']+`</td>
                <td>`+value['nov']['status']+`</td>
                <td><button class="btn btn-default btn-flat" title="PDF" onclick="viewPDFnov(`+value['nov']['id']+`)"><i class="fa-solid fa-file fa-beat-fade"></i></button>
                </td>
              </tr>`
            );
        });

        $("#right_modal_lg").modal();
      }
    });

    // sessionStorage.clear();
    // sessionStorage.setItem("nov-id", id);
    // // var ReportType = $("input[type='radio'][name='report-type']:checked").val();
    // // var ReportFor = $("input[type='checkbox'][name='report-for']:checked").val();

    // var Sector = $('input[type=checkbox][name="report-sector"]:checked').map(function (_, el) {
    //   return $(el).val();
    // }).get();

    // var CompanyName = $("#company-name").val();
    // var CompanyAddress = $("#company-address").val();
    // var CompanyEmail = $("#company-email").val();
    // var CompanyContact = $("#company-contact").val();
    // var emb_id = $("#emb_id").val();

    // sessionStorage.setItem("emb-id", emb_id);
    // sessionStorage.setItem("report-id", report_id);

    // sessionStorage.setItem("company-contact", CompanyContact);
    // sessionStorage.setItem("company-email", CompanyEmail);
    // sessionStorage.setItem("company-address", CompanyAddress);
    // sessionStorage.setItem("company-name", CompanyName);
    // sessionStorage.setItem("nov-sector", JSON.stringify(Sector));

    // window.open('/nov', '_blank');

  }

  function viewPDFnov(ID) {
    window.open("/preview-nov-pdf/" + ID, "_blank");
  }

  function deleteReport(ID) {

    Swal.fire({
      title: "Do you want to delete this report?",
      showDenyButton: false,
      showCancelButton: true,
      confirmButtonText: "Yes",
      cancelButtonText: "No",
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
        $.ajax({
        url: "{{route('/delete-report')}}",
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
                location.href = '/report-list';

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

  function action(id) {
    alert(id);
  }

</script>