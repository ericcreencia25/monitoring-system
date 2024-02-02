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
  Related Notice of Violation
  <div class="row">
    
    <div class="col-md-3 col-sm-6 col-12" id="div-report-nov">
      <div class="info-box shadow">
        <span class="info-box-icon bg-success" id="view-nov-span" onclick="viewNOV()" style="cursor: pointer;"><i class="far fa-copy"></i></span>
        <div class="info-box-content">
          <span class="info-box-text" id="related-nov-case-number">Case #:</span>
          <small><span class="info-box-number" id="related-nov">Regular</span></small>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 col-12" id="div-info-box-new" hidden>
      <div class="info-box shadow" >
        <span class="info-box-icon bg-warning" id="view-nov-span-new" onclick="viewNOVnew()" style="cursor: pointer;"><i class="far fa-copy"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Case #: N/A</span>
          <small><span class="info-box-number">NEW</span></small>
        </div>
      </div>
    </div>
    <div class="col-md-12" id="div-report">
      <div class="card card-secondary">
        <div class="card-header">
          <p class="text-center" id="type-of-report-header" style="font-size: 24px; margin-bottom: 0px">Type of Report
          </p>
        </div>
        <!-- <div>
          <div style="clear:both;"><span style="font-size:12px;line-height:115%;font-family:Wingdings;">&thorn;</span>
          </div>
        </div> -->
        <div class="card-body p-0">
          <div class="bs-stepper">
            <div class="bs-stepper-header" role="tablist">
              <!-- your steps here -->
              <div class="step" data-target="#first-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="first-part"
                  id="first-part-trigger">
                  <span class="bs-stepper-circle">1</span>
                  <span class="bs-stepper-label"></span>
                </button>
              </div>
              <div class="line"></div>
              <div class="step" data-target="#second-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="second-part"
                  id="second-part-trigger">
                  <span class="bs-stepper-circle">2</span>
                  <span class="bs-stepper-label"></span>
                </button>
              </div>
              <div class="line"></div>
              <div class="step" data-target="#third-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="third-part"
                  id="third-part-trigger">
                  <span class="bs-stepper-circle">3</span>
                  <span class="bs-stepper-label"></span>
                </button>
              </div>
              <div class="line"></div>
              <div class="step" data-target="#fourth-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="fourth-part"
                  id="fourth-part-trigger">
                  <span class="bs-stepper-circle">4</span>
                  <span class="bs-stepper-label"></span>
                </button>
              </div>
              <div class="line"></div>
              <div class="step" data-target="#fifth-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="fifth-part"
                  id="fifth-part-trigger">
                  <span class="bs-stepper-circle">5</span>
                  <span class="bs-stepper-label"></span>
                </button>
              </div>

            </div>
            <div class="bs-stepper-content">
              <!-- your steps content here -->
              <div id="first-part" class="content" role="tabpanel" aria-labelledby="first-part-trigger">
                <div class="col-md-12">
                  <div class="card card-default" style="box-shadow: none;">
                    <div class="card-header" style="height: 50px;">
                      <!-- <h3 class="card-title"> 
                        
                      </h3> -->

                      <!-- <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                      </div> -->

                      <em>
                        <b>
                          <p class="text-center text-lg">Company General Information</p>
                        </b>
                      </em>

                    </div>
                    <div class="card-body">
                      @include('user.report.inspection.general-information')
                    </div>
                    <!-- /.card-body -->
                  </div>


                  <button class="btn btn-primary btn-flat" onclick="Next(1,2)">Next</button>

                  <button class="btn btn-success float-right btn-flat" onclick="Save(1,2)" id="save-first">Save</button>
                </div>
              </div>
              <div id="second-part" class="content" role="tabpanel" aria-labelledby="second-part-trigger">
                <div class="col-md-12">
                  <div class="card card-default" style="box-shadow: none;">
                    <div class="card-header" style="height: 50px;">
                      <!-- <h3 class="card-title"> -->
                      <em><b>
                          <p class="text-center text-lg">Purpose of Inspection</p>
                        </b></em>
                      <!-- </h3> -->

                      <!-- <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                      </div> -->
                    </div>
                    <div class="card-body">
                      @include('user.report.inspection.purpose-of-inspection')
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary btn-flat" onclick="Previous(2,1)">Previous</button>
                <button class="btn btn-primary btn-flat" onclick="Next(2,3)">Next</button>

                <button class="btn btn-success float-right btn-flat" onclick="Save(2,3)" id="save-second">Save</button>
              </div>

              <div id="third-part" class="content" role="tabpanel" aria-labelledby="third-part-trigger">
                <div class="col-md-12">
                  <div class="card card-default" style="box-shadow: none;">
                    <div class="card-header" style="height: 50px;">
                      <!-- <h3 class="card-title"> -->
                      <em><b>
                          <p class="text-center text-lg">Compliance Status</p>
                        </b></em>
                      <!-- </h3> -->

                      <!-- <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                      </div> -->
                    </div>
                    <div class="card-body">
                      @include('user.report.inspection.compliance-status')
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary btn-flat" onclick="Previous(3,2)">Previous</button>
                <button class="btn btn-primary btn-flat" onclick="Next(3,4)">Next</button>

                <button class="btn btn-success float-right btn-flat" onclick="Save(3,4)" id="save-third">Save</button>
              </div>

              <div id="fourth-part" class="content" role="tabpanel" aria-labelledby="fourth-part-trigger">
                <div class="col-md-12">
                  <div class="card card-default" style="box-shadow: none;">
                    <div class="card-header" style="height: 50px;">
                      <!-- <h3 class="card-title"> -->
                      <em><b>
                          <p class="text-center text-lg">Recommendation</p>
                        </b></em>
                      <!-- </h3> -->

                      <!-- <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                      </div> -->
                    </div>
                    <div class="card-body">
                      @include('user.report.inspection.recommendation')
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary btn-flat" onclick="Previous(4,3)">Previous</button>
                <button class="btn btn-primary btn-flat" onclick="Next(4,5)">Next</button>

                <button class="btn btn-success float-right btn-flat" onclick="Save(4,5)" id="save-fourth">Save</button>
              </div>

              <div id="fifth-part" class="content" role="tabpanel" aria-labelledby="fifth-part-trigger">
                <div class="col-md-12">
                  <div class="card card-default" style="box-shadow: none;">
                    <div class="card-header" style="height: 50px;">
                      <!-- <h3 class="card-title"> -->
                      <p class="text-center"></p>
                      <!-- </h3> -->

                      <!-- <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                      </div> -->
                    </div>
                    <div class="card-body">
                      @include('user.report.inspection.final-step')
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary btn-flat" onclick="Previous(5,4)">Previous</button>
                <!-- <button type="submit" class="btn btn-primary btn-flat" onclick="Next(5,6)">Submit</button> -->

                <button class="btn btn-success float-right btn-flat" onclick="Save(5,6)" id="save-fifth">Submit</button>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      <!-- /.card -->
    </div>

    
  </div>
</div>

<div class="modal fade modal-while-saving" id="modal-while-saving">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-body">
        <div class="d-flex justify-content-center">
          <div class="spinner-border text-muted"></div>
        </div>
        <div class="d-flex justify-content-center">
          Loading...
        </div>
      </div>
    </div>
  </div>
</div>


<div class="loading-overlay"></div>
<div class="loading-overlay-image-container">
  <div class="loader"></div>
  Saving
</div>
@stop

<script src="../../AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<script src="../../AdminLTE-3.2.0/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<script src="../../AdminLTE-3.2.0/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  });

  const reportFor = JSON.parse(sessionStorage.getItem("report-for"));


  $(function () {

    var CompanyName = sessionStorage.getItem("company-name");
    var CompanyContact = sessionStorage.getItem("company-contact");
    var CompanyEmail = sessionStorage.getItem("company-email");
    var CompanyAddress = sessionStorage.getItem("company-address");
    var Longitude = sessionStorage.getItem("longitude");
    var Latitude = sessionStorage.getItem("latitude");
    var relatedNOVtext = sessionStorage.getItem("related-nov-text");
    var relatedNOVid = sessionStorage.getItem("related-nov-id");
    var withNOV = sessionStorage.getItem("with-nov");
    var withNOVtext = sessionStorage.getItem("with-nov-text");

    $("#establishment-name").val(CompanyName);
    $("#email").val(CompanyEmail);
    $("#contact-no").val(CompanyContact);
    $("#address").val(CompanyAddress);
    $("#geograpical-coordinates").val(Longitude + ', ' + Latitude);



    if(withNOV == 'yes') {

      if(withNOVtext == 'without existing NOV but with recommendation to issue NOV') {
        $("#related-nov-case-number").html('Case #: N/A');
        $("#related-nov").html('recommendation to issue NOV');
        $("#div-info-box-new").attr('hidden', 'hidden');
      }else if(withNOVtext == 'with existing NOV and with recommendation to issue another') {
        $("#related-nov-case-number").html('Case #: ' + relatedNOVtext );
        $("#related-nov").html('with recommendation to issue another NOV');
        $("#div-info-box-new").removeAttr('hidden');
      } else {
        $("#related-nov-case-number").html('Case #: ' + relatedNOVtext );
        $("#related-nov").html('with existing NOV prior to the monitoring conducted');
        $("#div-info-box-new").attr('hidden', 'hidden');
      }

      $("#div-report-nov").removeAttr('hidden');
      
    } else {

      $("#div-report").removeClass();
      $("#div-report").addClass('col-md-12');

      $("#div-report-nov").attr('hidden', 'hidden');

    }

    var tor = sessionStorage.getItem("type-of-report");
    var text = 'Inspection Report';

    $("#type-of-report-header").text(text.toUpperCase());

    var step = localStorage.getItem('currentPage');
    stepper.to(step);
    // stepper.to(4);

    var type = sessionStorage.getItem("new-or-old");


    // if (type == 'new') {


    const firstPageData = JSON.parse(localStorage.getItem("firstPageData"));

    if (firstPageData) {
      $("#address").val(firstPageData['address']);
      $("#establishment-name").val(firstPageData['establishment-name']);
    }


    var idParameter = getUrlParameters("id", "", true);
    var emb_id = sessionStorage.getItem("emb-id");

    if(idParameter == 0) {
      $("#save-second").attr('disabled', 'disabled');
      $("#save-third").attr('disabled', 'disabled');
      $("#save-fourth").attr('disabled', 'disabled');
      $("#save-fifth").attr('disabled', 'disabled');
    } else {
      $("#save-second").removeAttr('disabled');
      $("#save-third").removeAttr('disabled');
      $("#save-fourth").removeAttr('disabled');
      $("#save-fifth").removeAttr('disabled');
    }

    $.ajax({
      url: "{{route('getReportData')}}",
      type: 'POST',
      data: {
        page: [1, 2, 3, 4, 5],
        id: idParameter,
        emb_id: emb_id,
        _token: '{{csrf_token()}}',
      },
      beforeSend: function () {

      },
      success: function (response) {
        sessionStorage.setItem("report-for", response['inspection_report']['report_for']);

        ///first page
        $("#address").val(response['inspection_report']['address']);
        $("#date-of-effectivity").val(new Date(response['inspection_report']['effectivity_date']).toLocaleDateString('en-GB'));
        $("#date-of-expiry").val(new Date(response['inspection_report']['expiry_date']).toLocaleDateString('en-GB'));
        $("#email").val(response['inspection_report']['email']);
        $("#establishment-name").val(response['inspection_report']['establishment_name']);
        $("#geograpical-coordinates").val(response['inspection_report']['geo_coordinates']);
        $("#managing-head").val(response['inspection_report']['managing_head']);
        $("#name-of-pco").val(response['inspection_report']['pco_name']);
        $("#nature-of-business").val(response['inspection_report']['nature_of_business']);
        $("#operating-hours-day").val(response['inspection_report']['operating_hours_per_day']);
        $("#operating-hours-week").val(response['inspection_report']['operating_hours_per_week']);
        $("#operating-hours-year").val(response['inspection_report']['operating_hours_per_year']);
        $("#pco-accreditation-number").val(response['inspection_report']['pco_accreditation']);
        $("#phone-fax").val(response['inspection_report']['phone_fax_number']);
        $("#product").val(response['inspection_report']['product']);
        $("#psic-code").val(response['inspection_report']['psic_code']);
        $("#year-established").val(response['inspection_report']['year_established']);

        // PPA-table tbody

        $.each(response['product_lines'], function (index, value) {
          $("#PPA-table tbody").append(`
            <tr>
              <td>`+ value['product_lines'] + `</td>
              <td>`+ value['declared_rate_per_day'] + `</td>
              <td>`+ value['actual_rate_per_day'] + `</td>
              <td>
                <div class="btn-group">
                    <button class="btn btn-info btn-flat PPA-table-edit" title="edit"><i class="fa-solid fa-file-pen"></i></button></button>
                    <button class="btn btn-danger btn-flat PPA-table-delete" title="delete"><i class="fa-solid fa-trash"></i></button>
                </div>
              </td>
            </tr>
          `);
        });

        /// 2nd page

          $("#verify-accuracy").prop("checked", JSON.parse(response['purpose_of_inspection']['verify_accuracy']));
          $("#determine-compliance").prop("checked", JSON.parse(response['purpose_of_inspection']['determine_compliance_status']));
          $("#investigate-community").prop("checked", JSON.parse(response['purpose_of_inspection']['investigate_community']));
          $("#check-status").prop("checked", JSON.parse(response['purpose_of_inspection']['check_status']));

          if (response['purpose_of_inspection']['others'] != '') {
            $("#others").prop("checked", true);
            $("#others-input").val(response['purpose_of_inspection']['others']);
          }

          if (response['establishment_permits']['pmpin']) {
            $("#pmpin").prop("checked", true);
            $('input[name="pmpin"]').removeAttr('disabled');
            $("input[name=pmpin][value=" + response['establishment_permits']['pmpin'] + "]").prop('checked', true);
          }

          if (response['establishment_permits']['hazwaste_id_reg']) {
            $("#hazwaste-id-reg").prop("checked", true);
            $('input[name="hazwaste-id-reg"]').removeAttr('disabled');
            $("input[name=hazwaste-id-reg][value=" + response['establishment_permits']['hazwaste_id_reg'] + "]").prop('checked', true);
          }

          if (response['establishment_permits']['hazwaste_trans_reg']) {
            $("#hazwaste-trans-reg").prop("checked", true);
            $('input[name="hazwaste-trans-reg"]').removeAttr('disabled');
            $("input[name=hazwaste-trans-reg][value=" + response['establishment_permits']['hazwaste_trans_reg'] + "]").prop('checked', true);
          }

          if (response['establishment_permits']['hazwaste_tsd_reg']) {
            $("#hazwaste-tsd-reg").prop("checked", true);
            $('input[name="hazwaste-tsd-reg"]').removeAttr('disabled');
            $("input[name=hazwaste-tsd-reg][value=" + response['establishment_permits']['hazwaste_tsd_reg'] + "]").prop('checked', true);
          }

          if (response['establishment_permits']['pto_apse']) {
            $("#pto-apse").prop("checked", true);
            $('input[name="pto-apse"]').removeAttr('disabled');
            $("input[name=pto-apse][value=" + response['establishment_permits']['pto_apse'] + "]").prop('checked', true);
          }

          if (response['establishment_permits']['discharge_permit']) {
            $("#discharge-permit").prop("checked", true);
            $('input[name="discharge-permit"]').removeAttr('disabled');
            $("input[name=discharge-permit][value=" + response['establishment_permits']['discharge_permit'] + "]").prop('checked', true);
          }

          if (response['establishment_permits']['others']) {
            $("#others").prop("checked", true);
            $('input[name="others"]').removeAttr('disabled');
            $("input[name=others][value=" + response['establishment_permits']['others'] + "]").prop('checked', true);
          }


        /// 3rd Page


        if ($.isEmptyObject(response['denr_permits']) != true) {

          $.each(response['denr_permits'], function (index, value) {

            if (value['issued'] == 'N/A') {
              var issued_date = 'N/A';
              var expiry_date = 'N/A';
            } else {
              var issued_date = new Date(value['issued_date']).toLocaleDateString('en-GB');
              var expiry_date = new Date(value['expiry_date']).toLocaleDateString('en-GB');
            }

            $("#denr-dlc").append(`
            <tr>
                <td>`+ value['environmental_law'] + `</td>
                <td>`+ value['permits'] + `</td>
                <td>`+ value['issued'] + `</td>
                <td>`+ issued_date + `</td>
                <td>`+ expiry_date + `</td>
            </tr>`);

            $("#dlc-table-tbody").append(`
            <tr>
                <td>`+ value['environmental_law'] + `</td>
                <td>`+ value['permits'] + `</td>
                <td>`+ value['issued'] + `</td>
                <td>`+ issued_date + `</td>
                <td>`+ expiry_date + `</td>
                <td><button class="btn btn-danger dlc-table-delete-btn" id="dlc-table-delete-btn">Delete</button></td>
            </tr>`);
          });

        }

        $.each(response['law_citation_ecc_conditionalities'], function (index, value) {
          $("#ECC-Conditionalities tr#" + value['tr_id']).find("td:eq(2)").each(function () {
            this.innerHTML = value['complied'];
          });
          $("#ECC-Conditionalities tr#" + value['tr_id']).find("td:eq(3)").each(function () {
            this.innerHTML = value['remarks'];
          });
        });

        $.each(response['law_citation_ra_6969'], function (index, value) {
          $("#RA-6969-table tr#" + value['tr_id']).find("td:eq(2)").each(function () {
            this.innerHTML = value['complied'];
          });
          $("#RA-6969-table tr#" + value['tr_id']).find("td:eq(3)").each(function () {
            this.innerHTML = value['remarks'];
          });
        });

        $.each(response['law_citation_ra_8749'], function (index, value) {
          $("#RA-8749-table tr#" + value['tr_id']).find("td:eq(2)").each(function () {
            this.innerHTML = value['complied'];
          });
          $("#RA-8749-table tr#" + value['tr_id']).find("td:eq(3)").each(function () {
            this.innerHTML = value['remarks'];
          });
        });

        $.each(response['law_citation_ra_9003'], function (index, value) {
          $("#RA-9003-table tr#" + value['tr_id']).find("td:eq(2)").each(function () {
            this.innerHTML = value['complied'];
          });
          $("#RA-9003-table tr#" + value['tr_id']).find("td:eq(3)").each(function () {
            this.innerHTML = value['remarks'];
          });
        });

        $.each(response['law_citation_ra_9275'], function (index, value) {
          $("#RA-9275-table tr#" + value['tr_id']).find("td:eq(2)").each(function () {
            this.innerHTML = value['complied'];
          });
          $("#RA-9275-table tr#" + value['tr_id']).find("td:eq(3)").each(function () {
            this.innerHTML = value['remarks'];
          });
        });

        $.each(response['law_citation_pcoa'], function (index, value) {
          $("#PCOA-table tr#" + value['tr_id']).find("td:eq(2)").each(function () {
            this.innerHTML = value['complied'];
          });
          $("#PCOA-table tr#" + value['tr_id']).find("td:eq(3)").each(function () {
            this.innerHTML = value['remarks'];
          });
        });

        $.each(response['law_citation_smr'], function (index, value) {
          $("#SMR-table tr#" + value['tr_id']).find("td:eq(2)").each(function () {
            this.innerHTML = value['complied'];
          });
          $("#SMR-table tr#" + value['tr_id']).find("td:eq(3)").each(function () {
            this.innerHTML = value['remarks'];
          });
        });

        $.each(response['findings_and_observation'], function (index, value) {

          if (value['permit'] == 'Air Quality Management') {
            $("#air-quality-management").val(value['details']);
          } else if (value['permit'] == 'Chemicals Management') {
            $("#chemicals-management").val(value['details']);
          } else if (value['permit'] == 'Environmental Impact Statement System') {
            $("#environmental-impact-statement-system").val(value['details']);
          } else if (value['permit'] == 'Hazardous Waste Management') {
            $("#hazard-waste-management").val(value['details']);
          } else if (value['permit'] == 'Solid Waste Management') {
            $("#solid-waste-management").val(value['details']);
          } else if (value['permit'] == 'Water Quality Management') {
            $("#water-quality-management").val(value['details']);
          } else if (value['permit'] == 'Commitment to') {
            $("#commitment-to").val(value['details']);
          }

        });


        if ($.isEmptyObject(response['diesel_fueled_generator_stack_a']) != true) {

          var detailsA =
            `<tr id="1">
              <td>Sampling Date: `+ new Date(response['diesel_fueled_generator_stack_a'][0]['sampling_date']).toLocaleDateString('en-GB') + `</td>
              <td></td>
              <td></td>
            </tr>
            <tr id="2">
              <td>Nitrogen Dioxide Emissions (mg/Ncm)</td>
              <td>`+ response['diesel_fueled_generator_stack_a'][0]['average'] + `</td>
              <td>2,000</td>
              <td>`+ response['diesel_fueled_generator_stack_a'][0]['remarks'] + `</td>
            </tr>
            <tr id="3">
              <td>Carbon Monoxide Emissions (mg/Ncm)</td>
              <td>`+ response['diesel_fueled_generator_stack_a'][1]['average'] + `</td>
              <td>500</td>
              <td>`+ response['diesel_fueled_generator_stack_a'][1]['remarks'] + `</td>
            </tr>`;
          $("#diesel-fueled-table-stack-a tbody").html(detailsA);

        }

        if ($.isEmptyObject(response['diesel_fueled_generator_stack_b']) != true) {

          var detailsB =
            `<tr id="1">
              <td>Sampling Date: `+ new Date(response['diesel_fueled_generator_stack_b'][0]['sampling_date']).toLocaleDateString('en-GB') + `</td>
              <td></td>
              <td></td>
            </tr>
            <tr id="2">
              <td>Nitrogen Dioxide Emissions (mg/Ncm)</td>
              <td>`+ response['diesel_fueled_generator_stack_b'][0]['average'] + `</td>
              <td>2,000</td>
              <td>`+ response['diesel_fueled_generator_stack_b'][0]['remarks'] + `</td>
            </tr>
            <tr id="3">
              <td>Carbon Monoxide Emissions (mg/Ncm)</td>
              <td>`+ response['diesel_fueled_generator_stack_b'][1]['average'] + `</td>
              <td>500</td>
              <td>`+ response['diesel_fueled_generator_stack_b'][1]['remarks'] + `</td>
            </tr>`;
          $("#diesel-fueled-table-stack-b tbody").html(detailsB);

        }

        /// 4th Page

        if (response['recommendation']) {

          $.each(response['recommendation'], function (index, value) {
            $("#" + value['element_id']).prop("checked", true);
          });

        }

        /// last
        console.log(response);
        if ($.isEmptyObject(response['inspection']) != true) {

          if(response['inspection']['inspection_team'] != null) {

            var detailsIT = '';
            $.each(JSON.parse(response['inspection']['inspection_team']), function (index, value) {
              detailsIT += `<div class="col-sm-6">
              <input type="text" class="form-control form-control-border border-width-2" name="inspection-team-member" placeholder="Name and Signature"
                style="text-align:center;" value="`+ value + `">
            </div>`;
            });

            $("#inspection-team").html(detailsIT);
          }

          

          $("#recommending-approval").val(response['inspection']['recommending_approval']);
          $("#regional-director").val(response['inspection']['regional_director']);

          if(response['inspection']['inspection_date'] == null || response['inspection']['inspection_date'] == '') {
            $("#date-of-inspection").val(new Date().toLocaleDateString('en-GB'));
          } else {
            $("#date-of-inspection").val(new Date(response['inspection']['inspection_date']).toLocaleDateString('en-GB'));
          }

          

        }

      }


    });

    

    // } 



  });

  const alldata = [];

  function Previous(current, previous) {

    if( previous == 1) {

      sessionStorage.setItem('page-one-save', 0);
      stepper.to(previous);
      localStorage.setItem('currentPage', previous);

    } else if( previous == 2 ) {

      sessionStorage.setItem('page-two-save', 0);
      stepper.to(previous);
      localStorage.setItem('currentPage', previous);

    } else if( previous == 3 ) {

      sessionStorage.setItem('page-three-save', 0);
      stepper.to(previous);
      localStorage.setItem('currentPage', previous);

    } else if( previous == 4 ) {

      sessionStorage.setItem('page-four-save', 0);
      stepper.to(previous);
      localStorage.setItem('currentPage', previous);

    }
    
  }

  function Next(current, next) {

    var idParameter = getUrlParameters("id", "", true);

    var first;
    var second;
    var third;
    var fourth;
    var fifth;
    var emb_id = sessionStorage.getItem("emb-id");
    var id = sessionStorage.getItem("id");

    if (current == 1 && next == 2) {

      var check = sessionStorage.getItem("page-one-save");

      if(check != 1) {

        let text;
        if (confirm("Are you sure you want to continue without saving?") == true) {
          stepper.to(next);
          localStorage.setItem('currentPage', next)
        } else {
          text = "You canceled!";
        }

      } else {
        stepper.to(next);
        localStorage.setItem('currentPage', next)
      }
    }

    if (current == 2 && next == 3) {

      var check = sessionStorage.getItem("page-two-save");

      if(check != 1) {

        let text;
        if (confirm("Are you sure you want to continue without saving?") == true) {
          stepper.to(next);
          localStorage.setItem('currentPage', next)
        } else {
          text = "You canceled!";
        }

      } else {
        stepper.to(next);
        localStorage.setItem('currentPage', next)
      }
      
    }

    if (current == 3 && next == 4) {
      third = thirdPage(next);
      alldata['third'] = third;

      var check = sessionStorage.getItem("page-three-save");

      if(check != 1) {

        let text;
        if (confirm("Are you sure you want to continue without saving?") == true) {
          stepper.to(next);
          localStorage.setItem('currentPage', next)
        } else {
          text = "You canceled!";
        }

      } else {
        stepper.to(next);
        localStorage.setItem('currentPage', next)
      }
    }

    if (current == 4 && next == 5) {
      fourth = fourthPage(next);
      alldata['fourth'] = fourth;

      // localStorage.setItem('fourthPageData', JSON.stringify(fourth));

      var check = sessionStorage.getItem("page-four-save");

      if(check != 1) {

        let text;
        if (confirm("Are you sure you want to continue without saving?") == true) {
          stepper.to(next);
          localStorage.setItem('currentPage', next)
        } else {
          text = "You canceled!";
        }

      } else {
        stepper.to(next);
        localStorage.setItem('currentPage', next)
      }

    }

    if (current == 5 && next == 6) {
      // var fourthPageData = localStorage.getItem('fourthPageData');

      // var teammember = [];
      // $("input[name='inspection-team-member']").each(function () {
      //   if ($(this).val() != '') {
      //     teammember.push($(this).val());
      //   }
      // });



      // var recommendingapproval = $("#recommending-approval").val();
      // var regionaldirector = $("#regional-director").val();
      // var dateofinspection = $("#date-of-inspection").val();

      // $.ajax({
      //   url: "{{route('saveFinalStep')}}",
      //   type: 'POST',
      //   data: {
      //     fourthPageData: JSON.parse(fourthPageData),
      //     teammember: teammember,
      //     recommendingapproval: recommendingapproval,
      //     regionaldirector: regionaldirector,
      //     dateofinspection: dateofinspection,
      //     emb_id: emb_id,
      //     id: idParameter,
      //     _token: '{{csrf_token()}}',
      //   },
      //   beforeSend: function () {
      //     // $("#modal-while-saving").modal({ backdrop: 'static', keyboard: false }, 'show');
      //     // $("#load").css("display", "block");

      //     $('.loading-overlay').show();
      //     $('.loading-overlay-image-container').show();
      //   },
      //   complete: function () {
      //     // $("#load").css("display", "none");

      //     $('.loading-overlay').hide();
      //     $('.loading-overlay-image-container').hide();

      //   },
      //   success: function (response) {
      //     $("#modal-while-saving").modal('hide');

      //     var Toast = Swal.mixin({
      //       toast: true,
      //       position: 'top-end',
      //       showConfirmButton: false,
      //       timer: 3000,
      //       timerProgressBar: true,
      //       didOpen: (toast) => {
      //         toast.addEventListener('mouseenter', Swal.stopTimer)
      //         toast.addEventListener('mouseleave', Swal.resumeTimer)
      //       },
      //       didClose: (toast) => {
      //         location.href = '/dashboard';

      //         alert('The page will go back to dashboard');
      //       }
      //     });

      //     Toast.fire({
      //       icon: 'success',
      //       title: 'Successfully submitted'
      //     });





      //   }
      // });


    }

  }

  function Save(current, next) {

    var idParameter = getUrlParameters("id", "", true);

    var first;
    var second;
    var third;
    var fourth;
    var fifth;
    var emb_id = sessionStorage.getItem("emb-id");
    var id = sessionStorage.getItem("id");

    if (current == 1 && next == 2) {
      first = firstPage(next);
      alldata['first'] = first;
      const firstPageData = {
        'address': first['address'],
        'date-of-effectivity': first['date-of-effectivity'],
        'date-of-expiry': first['date-of-expiry'],
        'email': first['email'],
        'establishment-name': first['establishment-name'],
        'geograpical-coordinates': first['geograpical-coordinates'],
        'managing-head': first['managing-head'],
        'name-of-pco': first['name-of-pco'],
        'nature-of-business': first['nature-of-business'],
        'operating-hours-day': first['operating-hours-day'],
        'operating-hours-week': first['operating-hours-week'],
        'operating-hours-year': first['operating-hours-year'],
        'pco-accreditation-number': first['pco-accreditation-number'],
        'phone-fax': first['phone-fax'],
        'product': first['product'],
        // 'product-lines-table': first['product-lines-table'],
        'psic-code': first['psic-code'],
        'year-established': first['year-established'],
        'product-lines-table': first['product-lines-table'],
      }

      $.ajax({
        url: "{{route('/save-per-page')}}",
        type: 'POST',
        data: {
          id: idParameter,
          emb_id: emb_id,
          CurrentPage: 1 ,
          firstPageData: firstPageData,
          'with-nov': sessionStorage.getItem("with-nov"),
          'report-for': reportFor,
          'related-nov-id' : sessionStorage.getItem("related-nov-id"),
          'with-nov-text' : sessionStorage.getItem("with-nov-text"),
          'related-nov-text' : sessionStorage.getItem("related-nov-text"),
          _token: '{{csrf_token()}}',
        },
        beforeSend: function () {

          $('.loading-overlay').show();
          $('.loading-overlay-image-container').show();
        },
        complete: function () {
          // $("#load").css("display", "none");

          $('.loading-overlay').hide();
          $('.loading-overlay-image-container').hide();

        },
        success: function (response) {
          
          localStorage.setItem('currentPage', current);
          sessionStorage.setItem("new-or-old", 'old');
          sessionStorage.setItem("id", response);
          window.history.replaceState(null, null, "?id=" + response + "&type=inspection");

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
            title: 'Your work has been saved'
          });

          sessionStorage.setItem("page-one-save", 1);

          $("#save-second").removeAttr('disabled');
          $("#save-third").removeAttr('disabled');
          $("#save-fourth").removeAttr('disabled');
          $("#save-fifth").removeAttr('disabled');

        }

      });
    }

    if (current == 2 && next == 3) {
      second = secondPage(next);
      alldata['second'] = second;

      const secondPageData = {
        'check-status': second['check-status'],
        'determine-compliance': second['determine-compliance'],
        'investigate-community': second['investigate-community'],
        'verify-accuracy': second['verify-accuracy'],
        'others': second['others'],
      }

      var establishmentPermits1;

      if (second['establishment_permits'] != undefined) {
        establishmentPermits1 = second['establishment_permits'];
      } else {
        const establishmentPermits = {
          'establishment_permits': 'none',
        }
        establishmentPermits1 =  establishmentPermits;
      }

      $.ajax({
        url: "{{route('/save-per-page')}}",
        type: 'POST',
        data: {
          id: idParameter,
          emb_id: emb_id,
          CurrentPage: 2 ,
          secondPageData: secondPageData,
          'secondPageDataEstablishmentPermits' : establishmentPermits1,
          _token: '{{csrf_token()}}',
        },
        beforeSend: function () {

          $('.loading-overlay').show();
          $('.loading-overlay-image-container').show();
        },
        complete: function () {
          // $("#load").css("display", "none");

          $('.loading-overlay').hide();
          $('.loading-overlay-image-container').hide();

        },
        success: function (response) {
          
          localStorage.setItem('currentPage', current);
          sessionStorage.setItem("new-or-old", 'old');
          sessionStorage.setItem("id", response);
          // window.history.replaceState(null, null, "?id=" + response);

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
            title: 'Your work has been saved'
          })

          sessionStorage.setItem("page-two-save", 1);

        }

      });
    }

    if (current == 3 && next == 4) {
      third = thirdPage(next);
      alldata['third'] = third;

      const firstPageData = JSON.parse(localStorage.getItem("firstPageData"));
      const secondPageData = JSON.parse(localStorage.getItem("secondPageData"));
      const secondPageDataEstablishmentPermits = JSON.parse(localStorage.getItem("secondPageData-establishmentPermits"));


      $.ajax({
        url: "{{route('/save-per-page')}}",
        type: 'POST',
        data: {
          id: idParameter,
          emb_id: emb_id,
          CurrentPage: 3 ,
          'permits-licenses-clearance': third['permits-licenses-clearance'],
          'law-and-citation': {
            'ecc': third['law-and-citation']['ecc'],
            'pcoa': third['law-and-citation']['pcoa'],
            'ra-6969': third['law-and-citation']['ra-6969'],
            'ra-8749': third['law-and-citation']['ra-8749'],
            'ra-9003': third['law-and-citation']['ra-9003'],
            'ra-9275': third['law-and-citation']['ra-9275'],
            'smr': third['law-and-citation']['smr'],
          },
          'diesel-fueled-generator': {
            'diesel-fueled-generator-stack-a': third['diesel-fueled-generator']['diesel-fueled-generator-stack-a'],
            'diesel-fueled-generator-stack-b': third['diesel-fueled-generator']['diesel-fueled-generator-stack-b'],
          },
          'summary-findings-and-observations': {
            'air-quality-management': third['summary-findings-and-observations']['air-quality-management'],
            'chemicals-management': third['summary-findings-and-observations']['chemicals-management'],
            'commitment-to': third['summary-findings-and-observations']['commitment-to'],
            'environmental-impact-statement-system': third['summary-findings-and-observations']['environmental-impact-statement-system'],
            'hazard-waste-management': third['summary-findings-and-observations']['hazard-waste-management'],
            'solid-waste-management': third['summary-findings-and-observations']['solid-waste-management'],
            'water-quality-management': third['summary-findings-and-observations']['water-quality-management'],
          },
          _token: '{{csrf_token()}}',
        },
        beforeSend: function () {
          // $("#modal-while-saving").modal({ backdrop: 'static', keyboard: false }, 'show');
          // $("#load").css("display", "block");

          $('.loading-overlay').show();
          $('.loading-overlay-image-container').show();
        },
        complete: function () {
          // $("#load").css("display", "none");

          $('.loading-overlay').hide();
          $('.loading-overlay-image-container').hide();

        },
        success: function (response) {
          // $(".modal-while-saving").modal('hide');
          localStorage.setItem('currentPage', current);
          sessionStorage.setItem("new-or-old", 'old');
          sessionStorage.setItem("id", response);
          // window.history.replaceState(null, null, "?id=" + response);

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
            title: 'Your work has been saved'
          })

          sessionStorage.setItem("page-three-save", 1);

        }

      });


    }

    if (current == 4 && next == 5) {
      fourth = fourthPage(next);
      alldata['fourth'] = fourth;
      localStorage.setItem('currentPage', next);

      localStorage.setItem('fourthPageData', JSON.stringify(fourth));

      $.ajax({
        url: "{{route('/save-per-page')}}",
        type: 'POST',
        data: {
          id: idParameter,
          emb_id: emb_id,
          CurrentPage: 4 ,
          fourthPageData: fourth,
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
          
          localStorage.setItem('currentPage', current);
          sessionStorage.setItem("new-or-old", 'old');
          sessionStorage.setItem("id", response);
          // window.history.replaceState(null, null, "?id=" + response);

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
            title: 'Your work has been saved'
          })

          sessionStorage.setItem("page-four-save", 1);

        }

      });
    }

    if (current == 5 && next == 6) {
      var fourthPageData = localStorage.getItem('fourthPageData');

      var teammember = [];
      $("input[name='inspection-team-member']").each(function () {
        if ($(this).val() != '') {
          teammember.push($(this).val());
        }
      });



      var recommendingapproval = $("#recommending-approval").val();
      var regionaldirector = $("#regional-director").val();
      var dateofinspection = $("#date-of-inspection").val();

      $.ajax({
        url: "{{route('saveFinalStep')}}",
        type: 'POST',
        data: {
          teammember: teammember,
          recommendingapproval: recommendingapproval,
          regionaldirector: regionaldirector,
          dateofinspection: dateofinspection,
          emb_id: emb_id,
          id: idParameter,
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
          $("#modal-while-saving").modal('hide');

          Swal.fire({
            position: "center",
            icon: "success",
            title: "Your work has been successfully submitted",
            showConfirmButton: false,
            timer: 1500,
            timerProgressBar: true,
            didOpen: (toast) => {
              toast.addEventListener('mouseenter', Swal.stopTimer)
              toast.addEventListener('mouseleave', Swal.resumeTimer)
            },
            didClose: (toast) => {
              location.href = '/report-list';

              alert('The page will go to reports list');
            }
          });

        }
      });


    }

  }

  function fourthPage(next) {
    const fourth = [];

    if ($("#for-confirmatory-sampling").is(":checked")) {
      var data = {
        'id': 'for-confirmatory-sampling',
        'value': $("#for-confirmatory-sampling").val()
      }
      fourth.push(data);
    }

    if ($("#for-issuance-of-POA").is(":checked")) {
      var data = {
        'id': 'for-issuance-of-POA',
        'value': $("#for-issuance-of-POA").val()
      }
      fourth.push(data);
    }

    if ($("#for-accreditation-of-PCO").is(":checked")) {
      var data = {
        'id': 'for-accreditation-of-PCO',
        'value': $("#for-accreditation-of-PCO").val()
      }
      fourth.push(data);
    }

    if ($("#for-submission-of-smr").is(":checked")) {
      var data = {
        'id': 'for-submission-of-smr',
        'value': $("#for-submission-of-smr").val()
      }
      fourth.push(data);
    }

    if ($("#for-issuance-of-NOM").is(":checked")) {
      var data = {
        'id': 'for-issuance-of-NOM',
        'value': $("#for-issuance-of-NOM").val()
      }
      fourth.push(data);
    }

    if ($("#for-issuance-of-NOV").is(":checked")) {
      var data = {
        'id': 'for-issuance-of-NOV',
        'value': $("#for-issuance-of-NOV").val()
      }
      fourth.push(data);
    }

    if ($("#for-issuance-of-suspencion").is(":checked")) {
      var data = {
        'id': 'for-issuance-of-suspencion',
        'value': $("#for-issuance-of-suspencion").val()
      }
      fourth.push(data);
    }

    if ($("#for-endorsement-of-PAB").is(":checked")) {
      var data = {
        'id': 'for-endorsement-of-PAB',
        'value': $("#for-endorsement-of-PAB").val()
      }
      fourth.push(data);
    }


    if ($("#other-recommendations").is(":checked")) {
      var data = {
        'id': 'for-issuance-of-POA',
        'value': $("#for-issuance-of-POA").val()
      }
      fourth.push(data);
    }

    // stepper.to(next);
    return fourth;

  }

  function thirdPage(next) {
    const third = [];
    const error = [];

    /// DENR Permits/Licenses/Clearance:
    var arrayPermits = [];
    $("#denr-dlc").find("tr").each(function () {
      var newArray = [];

      $(this).find("td:eq(0)").each(function () {
        newArray.push(this.innerHTML);
      });

      $(this).find("td:eq(1)").each(function () {
        newArray.push(this.innerHTML);
      });

      $(this).find("td:eq(2)").each(function () {
        newArray.push(this.innerHTML);
      });

      $(this).find("td:eq(3)").each(function () {
        newArray.push(this.innerHTML);
      });

      $(this).find("td:eq(4)").each(function () {
        newArray.push(this.innerHTML);
      });

      if (newArray.length > 0) {
        arrayPermits.push(newArray);
      }

    });


    /// Summary of Compliance:
    ///  Environmental Compliance Certificate (ECC) Conditionalities
    var arrayECC = [];
    $("#ECC-Conditionalities tbody").find("tr").each(function () {
      var newArray = [];

      $(this).find("td:eq(0)").each(function () {
        newArray.push(this.innerText);
      });

      $(this).find("td:eq(1)").each(function () {
        newArray.push(this.innerText);
      });

      $(this).find("td:eq(2)").each(function () {
        newArray.push(this.innerText);
      });

      $(this).find("td:eq(3)").each(function () {
        newArray.push(this.innerText);
      });

      var TDID = $(this).attr('id');
      newArray.push(TDID);

      if (newArray.length > 0) {
        arrayECC.push(newArray);
      }

    });


    ///  RA 6969 Toxic Substances and Hazardous and Nuclear Wastes Control Act
    var arrayRA6969 = [];
    $("#RA-6969-table tbody").find("tr").each(function () {
      var newArray = [];

      $(this).find("td:eq(0)").each(function () {
        newArray.push(this.innerText);
      });

      $(this).find("td:eq(1)").each(function () {
        newArray.push(this.innerText);
      });

      $(this).find("td:eq(2)").each(function () {
        newArray.push(this.innerText);
      });

      $(this).find("td:eq(3)").each(function () {
        newArray.push(this.innerText);
      });

      var TDID = $(this).attr('id');
      newArray.push(TDID);

      if (newArray.length > 0) {
        arrayRA6969.push(newArray);
      }

    });

    ///  RA 8749 - Clean Air Act
    var arrayRA8749 = [];
    $("#RA-8749-table tbody").find("tr").each(function () {
      var newArray = [];

      $(this).find("td:eq(0)").each(function () {
        newArray.push(this.innerText);
      });

      $(this).find("td:eq(1)").each(function () {
        newArray.push(this.innerText);
      });

      $(this).find("td:eq(2)").each(function () {
        newArray.push(this.innerText);
      });

      $(this).find("td:eq(3)").each(function () {
        newArray.push(this.innerText);
      });

      var TDID = $(this).attr('id');
      newArray.push(TDID);

      if (newArray.length > 0) {
        arrayRA8749.push(newArray);
      }

    });


    ///  RA 9003 – Ecological Solid Waste Management Act
    var arrayRA9003 = [];
    $("#RA-9003-table tbody").find("tr").each(function () {
      var newArray = [];

      $(this).find("td:eq(0)").each(function () {
        newArray.push(this.innerText);
      });

      $(this).find("td:eq(1)").each(function () {
        newArray.push(this.innerText);
      });

      $(this).find("td:eq(2)").each(function () {
        newArray.push(this.innerText);
      });

      $(this).find("td:eq(3)").each(function () {
        newArray.push(this.innerText);
      });

      var TDID = $(this).attr('id');
      newArray.push(TDID);

      if (newArray.length > 0) {
        arrayRA9003.push(newArray);
      }

    });


    ///  RA 9275 – Clean Water Act
    var arrayRA9275 = [];
    $("#RA-9275-table tbody").find("tr").each(function () {
      var newArray = [];

      $(this).find("td:eq(0)").each(function () {
        newArray.push(this.innerText);
      });

      $(this).find("td:eq(1)").each(function () {
        newArray.push(this.innerText);
      });

      $(this).find("td:eq(2)").each(function () {
        newArray.push(this.innerText);
      });

      $(this).find("td:eq(3)").each(function () {
        newArray.push(this.innerText);
      });

      var TDID = $(this).attr('id');
      newArray.push(TDID);

      if (newArray.length > 0) {
        arrayRA9275.push(newArray);
      }

    });



    ///  Pollution Control Officer Accreditation
    var arrayPCOA = [];
    $("#pcoa-table tbody").find("tr").each(function () {
      var newArray = [];

      $(this).find("td:eq(0)").each(function () {
        newArray.push(this.innerText);
      });

      $(this).find("td:eq(1)").each(function () {
        newArray.push(this.innerText);
      });

      $(this).find("td:eq(2)").each(function () {
        newArray.push(this.innerText);
      });

      $(this).find("td:eq(3)").each(function () {
        newArray.push(this.innerText);
      });

      var TDID = $(this).attr('id');
      newArray.push(TDID);

      if (newArray.length > 0) {
        arrayPCOA.push(newArray);
      }

    });


    ///   Self-Monitoring Report
    var arraySMR = [];
    $("#smr-table tbody").find("tr").each(function () {
      var newArray = [];

      $(this).find("td:eq(0)").each(function () {
        newArray.push(this.innerText);
      });

      $(this).find("td:eq(1)").each(function () {
        newArray.push(this.innerText);
      });

      $(this).find("td:eq(2)").each(function () {
        newArray.push(this.innerText);
      });

      $(this).find("td:eq(3)").each(function () {
        newArray.push(this.innerText);
      });

      var TDID = $(this).attr('id');
      newArray.push(TDID);

      if (newArray.length > 0) {
        arraySMR.push(newArray);
      }

    });

    ///   APSE: 850 kVA Diesel Fueled Generator Set - Stack A
    var dftsA = [];
    $("#diesel-fueled-table-stack-a tbody").find("tr").each(function () {
      var newArray = [];

      $(this).find("td:eq(0)").each(function () {
        newArray.push(this.innerText);
      });

      $(this).find("td:eq(1)").each(function () {
        newArray.push(this.innerText);
      });

      $(this).find("td:eq(2)").each(function () {
        newArray.push(this.innerText);
      });

      $(this).find("td:eq(3)").each(function () {
        newArray.push(this.innerText);
      });
      if (newArray.length > 0) {
        dftsA.push(newArray);
      }

    });

    ///   APSE: 850 kVA Diesel Fueled Generator Set - Stack B
    var dftsB = [];
    $("#diesel-fueled-table-stack-b tbody").find("tr").each(function () {
      var newArray = [];

      $(this).find("td:eq(0)").each(function () {
        newArray.push(this.innerText);
      });

      $(this).find("td:eq(1)").each(function () {
        newArray.push(this.innerText);
      });

      $(this).find("td:eq(2)").each(function () {
        newArray.push(this.innerText);
      });

      $(this).find("td:eq(3)").each(function () {
        newArray.push(this.innerText);
      });
      if (newArray.length > 0) {
        dftsB.push(newArray);
      }

    });


    const lawandcitation = [];
    lawandcitation['ecc'] = arrayECC;
    lawandcitation['ra-6969'] = arrayRA6969;
    lawandcitation['ra-8749'] = arrayRA8749;
    lawandcitation['ra-9003'] = arrayRA9003;
    lawandcitation['ra-9275'] = arrayRA9275;
    lawandcitation['pcoa'] = arrayPCOA;
    lawandcitation['smr'] = arraySMR;

    const summaryfindings = [];
    summaryfindings['environmental-impact-statement-system'] = $("#environmental-impact-statement-system").val();
    summaryfindings['chemicals-management'] = $("#chemicals-management").val();
    summaryfindings['hazard-waste-management'] = $("#hazard-waste-management").val();
    summaryfindings['air-quality-management'] = $("#air-quality-management").val();
    summaryfindings['solid-waste-management'] = $("#solid-waste-management").val();
    summaryfindings['water-quality-management'] = $("#water-quality-management").val();
    summaryfindings['commitment-to'] = $("#commitment-to").val();

    const dieselgenerators = [];
    dieselgenerators['diesel-fueled-generator-stack-a'] = dftsA;
    dieselgenerators['diesel-fueled-generator-stack-b'] = dftsB;


    third['permits-licenses-clearance'] = arrayPermits;
    third['law-and-citation'] = lawandcitation;
    third['summary-findings-and-observations'] = summaryfindings;
    third['diesel-fueled-generator'] = dieselgenerators;

    // stepper.to(next);
    return third;

  }

  function secondPage(next) {
    const second = [];
    const error = [];


    second['verify-accuracy'] = $("#verify-accuracy").is(":checked");
    second['determine-compliance'] = $("#determine-compliance").is(":checked");
    second['investigate-community'] = $("#investigate-community").is(":checked");
    second['check-status'] = $("#check-status").is(":checked");

    if ($("#others").is(":checked")) {
      second['others'] = $("#others-input").val();
    }


    var pmpin;
    if ($("#pmpin").is(":checked")) {
      pmpin = $('input[name="pmpin"]:checked').val()
    } else {
      pmpin = null;
    }

    var hazwasteidreg;
    if ($("#hazwaste-id-reg").is(":checked")) {
      hazwasteidreg = $('input[name="hazwaste-id-reg"]:checked').val()
    } else {
      hazwasteidreg = null;
    }

    var hazwastetransreg;
    if ($("#hazwaste-trans-reg").is(":checked")) {
      hazwastetransreg = $('input[name="hazwaste-trans-reg"]:checked').val()
    } else {
      hazwastetransreg = null;
    }

    var hazwastetsdreg;
    if ($("#hazwaste-tsd-reg").is(":checked")) {
      hazwastetsdreg = $('input[name="hazwaste-tsd-reg"]:checked').val()
    } else {
      hazwastetsdreg = null;
    }

    var ptoapse;
    if ($("#pto-apse").is(":checked")) {
      ptoapse = $('input[name="pto-apse"]:checked').val()
    } else {
      ptoapse = null;
    }

    var dischargepermit;
    if ($("#discharge-permit").is(":checked")) {
      dischargepermit = $('input[name="discharge-permit"]:checked').val()
    } else {
      dischargepermit = null;
    }

    var otherspermits;
    if ($("#others-permits").is(":checked")) {
      otherspermits = $('input[name="others-permits"]:checked').val()
    } else {
      otherspermits = null;
    }

    const establishment_permits = {
      'pmpin': pmpin,
      'hazwaste-id-reg': hazwasteidreg,
      'hazwaste-trans-reg': hazwastetransreg,
      'hazwaste-tsd-reg': hazwastetsdreg,
      'pto-apse': ptoapse,
      'discharge-permit': dischargepermit,
      'others': otherspermits,
    }

    if ($("#verify-accuracy").is(":checked")) {
      second['establishment_permits'] = establishment_permits;
    }

    // stepper.to(next);
    return second;
  }

  function firstPage(next) {
    const first = [];
    const error = [];
    if ($("#establishment-name").val() != '') {
      first['establishment-name'] = $("#establishment-name").val();
    } else {
      $("#establishment-name-error").html('*required field');
      error.push('Establishment Name is valid');
    }

    if ($("#nature-of-business").val() != '') {
      first['nature-of-business'] = $("#nature-of-business").val();
    } else {
      $("#nature-of-business-error").html('*required field');
      error.push('Nature of Business is valid');
    }

    if ($("#product").val() != '') {
      first['product'] = $("#product").val();
    } else {
      $("#product-error").html('*required field');
      error.push('Product is valid');
    }

    if ($("#date-of-effectivity").val() != '') {
      first['date-of-effectivity'] = $("#date-of-effectivity").val();
    } else {
      $("#date-of-effectivity-error").html('*required field');
      error.push('Date of Effectivity is valid');
    }

    if ($("#date-of-expiry").val() != '') {
      first['date-of-expiry'] = $("#date-of-expiry").val();
    } else {
      $("#date-of-expiry-error").html('*required field');
      error.push('Date of Expiry is valid');
    }

    first['address'] = $("#address").val();
    first['geograpical-coordinates'] = $("#geograpical-coordinates").val();
    first['year-established'] = $("#year-established").val();
    first['psic-code'] = $("#psic-code").val();


    first['operating-hours-day'] = $("#operating-hours-day").val();
    first['operating-hours-week'] = $("#operating-hours-week").val();
    first['operating-hours-year'] = $("#operating-hours-year").val();

    first['email'] = $("#email").val();
    first['phone-fax'] = $("#phone-fax").val();

    first['managing-head'] = $("#managing-head").val();
    first['name-of-pco'] = $("#name-of-pco").val();
    first['pco-accreditation-number'] = $("#pco-accreditation-number").val();

    var arrayProduct = [];
    $("#PPA-table tbody").find("tr").each(function () {
      var newArray = [];

      $(this).find("td:eq(0)").each(function () {
        newArray.push(this.innerHTML);
      });

      $(this).find("td:eq(1)").each(function () {
        newArray.push(this.innerHTML);
      });

      $(this).find("td:eq(2)").each(function () {
        newArray.push(this.innerHTML);
      });

      if (newArray.length > 0) {
        arrayProduct.push(newArray);
      }

    });

    first['product-lines-table'] = arrayProduct;

    // if (error.length == 0) {

    //   stepper.to(next);

    //   return first;
    // } else {
    //   alert('Some of the fields are required');
    // }

    return first;

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

  function viewNOV()
  {
    var relatedNOVid = sessionStorage.getItem("related-nov-id");
    sessionStorage.clear();
    sessionStorage.setItem("nov-id", relatedNOVid);
    window.open("/nov");
  }

  function viewNOVnew()
  {
    var CompanyName = sessionStorage.getItem("company-name");
    var CompanyContact = sessionStorage.getItem("company-contact");
    var CompanyEmail = sessionStorage.getItem("company-email");
    var CompanyAddress = sessionStorage.getItem("company-address");
    var Sector = JSON.parse(sessionStorage.getItem("report-for"));
    var emb_id = sessionStorage.getItem("emb-id");

    sessionStorage.setItem("nov-id", 0);

    sessionStorage.setItem("emb-id", emb_id);

    sessionStorage.setItem("company-contact", CompanyContact);
    sessionStorage.setItem("company-email", CompanyEmail);
    sessionStorage.setItem("company-address", CompanyAddress);
    sessionStorage.setItem("company-name", CompanyName);
    sessionStorage.setItem("nov-sector", JSON.stringify(Sector));

    window.open("/nov");
  }
</script>