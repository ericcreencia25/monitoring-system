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
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
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
                      <!-- <h3 class="card-title"> -->
                      <em><b>
                          <p class="text-center text-lg">Company General Information</p>
                        </b></em>
                      <!-- </h3> -->

                      <!-- <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                      </div> -->
                    </div>
                    <div class="card-body">
                      @include('user.report.general-information')
                    </div>
                    <!-- /.card-body -->
                  </div>


                  <button class="btn btn-primary btn-flat" onclick="Next(1,2)">Next</button>

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
                      @include('user.report.purpose-of-inspection')
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary btn-flat" onclick="Previous(2,1)">Previous</button>
                <button class="btn btn-primary btn-flat" onclick="Next(2,3)">Next</button>
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
                      @include('user.report.compliance-status')
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary btn-flat" onclick="Previous(3,2)">Previous</button>
                <button class="btn btn-primary btn-flat" onclick="Next(3,4)">Next</button>
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
                      @include('user.report.recommendation')
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary btn-flat" onclick="Previous(4,3)">Previous</button>
                <button class="btn btn-primary btn-flat" onclick="Next(4,5)">Next</button>
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
                      @include('user.report.final-step')
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary btn-flat" onclick="Previous(5,4)">Previous</button>
                <button type="submit" class="btn btn-primary btn-flat" onclick="Next(5,6)">Submit</button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <!-- <div class="card-footer">
          Visit <a href="https://github.com/Johann-S/bs-stepper/#how-to-use-it">bs-stepper documentation</a> for more
          examples and information about the plugin.
        </div> -->
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
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
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

    $("#establishment-name").val(CompanyName);
    $("#email").val(CompanyEmail);
    $("#contact-no").val(CompanyContact);
    $("#address").val(CompanyAddress);
    $("#geograpical-coordinates").val(Longitude + ', ' + Latitude);

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
      // console.log(firstPageData);
      $("#address").val(firstPageData['address']);
      $("#date-of-effectivity").val(firstPageData['date-of-effectivity']);
      $("#date-of-expiry").val(firstPageData['date-of-expiry']);
      $("#email").val(firstPageData['email']);
      $("#establishment-name").val(firstPageData['establishment-name']);
      $("#geograpical-coordinates").val(firstPageData['geograpical-coordinates']);
      $("#managing-head").val(firstPageData['managing-head']);
      $("#name-of-pco").val(firstPageData['name-of-pco']);
      $("#nature-of-business").val(firstPageData['nature-of-business']);
      $("#operating-hours-day").val(firstPageData['operating-hours-day']);
      $("#operating-hours-week").val(firstPageData['operating-hours-week']);
      $("#operating-hours-year").val(firstPageData['operating-hours-year']);
      $("#pco-accreditation-number").val(firstPageData['pco-accreditation-number']);
      $("#phone-fax").val(firstPageData['phone-fax']);
      $("#product").val(firstPageData['product']);
      $("#psic-code").val(firstPageData['psic-code']);
      $("#year-established").val(firstPageData['year-established']);

      // PPA-table tbody

      $.each(firstPageData['product-lines-table'], function (index, value) {
        // console.log(value);
        $("#PPA-table tbody").append(`
          <tr>
            <td>`+ value[0] + `</td>
            <td>`+ value[1] + `</td>
            <td>`+ value[2] + `</td>
            <td>
              <div class="btn-group">
                <button class="btn btn-info btn-flat PPA-table-edit">edit</button>
                <button class="btn btn-danger btn-flat PPA-table-delete">delete</button>
              </div>
            </td>
          </tr>
        `);
      });

    }


    const secondPageData = JSON.parse(localStorage.getItem("secondPageData"));
    if (secondPageData) {
      $("#verify-accuracy").prop("checked", JSON.parse(secondPageData['verify-accuracy']));
      $("#determine-compliance").prop("checked", JSON.parse(secondPageData['determine-compliance']));
      $("#investigate-community").prop("checked", JSON.parse(secondPageData['investigate-community']));
      $("#check-status").prop("checked", JSON.parse(secondPageData['check-status']));

      if (secondPageData['others'] != '') {
        $("#others").prop("checked", true);
        $("#others-input").val(secondPageData['others']);
      }


      const secondPageDataEstablishmentPermits = JSON.parse(localStorage.getItem("secondPageData-establishmentPermits"));

      if (secondPageDataEstablishmentPermits['pmpin']) {
        $("#pmpin").prop("checked", true);
        $('input[name="pmpin"]').removeAttr('disabled');
        $("input[name=pmpin][value=" + secondPageDataEstablishmentPermits['pmpin'] + "]").prop('checked', true);
      }

      if (secondPageDataEstablishmentPermits['hazwaste_id_reg']) {
        $("#hazwaste-id-reg").prop("checked", true);
        $('input[name="hazwaste-id-reg"]').removeAttr('disabled');
        $("input[name=hazwaste-id-reg][value=" + secondPageDataEstablishmentPermits['hazwaste_id_reg'] + "]").prop('checked', true);
      }

      if (secondPageDataEstablishmentPermits['hazwaste_trans_reg']) {
        $("#hazwaste-trans-reg").prop("checked", true);
        $('input[name="hazwaste-trans-reg"]').removeAttr('disabled');
        $("input[name=hazwaste-trans-reg][value=" + secondPageDataEstablishmentPermits['hazwaste_trans_reg'] + "]").prop('checked', true);
      }

      if (secondPageDataEstablishmentPermits['hazwaste_tsd_reg']) {
        $("#hazwaste-tsd-reg").prop("checked", true);
        $('input[name="hazwaste-tsd-reg"]').removeAttr('disabled');
        $("input[name=hazwaste-tsd-reg][value=" + secondPageDataEstablishmentPermits['hazwaste_tsd_reg'] + "]").prop('checked', true);
      }

      if (secondPageDataEstablishmentPermits['pto_apse']) {
        $("#pto-apse").prop("checked", true);
        $('input[name="pto-apse"]').removeAttr('disabled');
        $("input[name=pto-apse][value=" + secondPageDataEstablishmentPermits['pto_apse'] + "]").prop('checked', true);
      }

      if (secondPageDataEstablishmentPermits['discharge_permit']) {
        $("#discharge-permit").prop("checked", true);
        $('input[name="discharge-permit"]').removeAttr('disabled');
        $("input[name=discharge-permit][value=" + secondPageDataEstablishmentPermits['discharge_permit'] + "]").prop('checked', true);
      }

      if (secondPageDataEstablishmentPermits['others']) {
        $("#others").prop("checked", true);
        $('input[name="others"]').removeAttr('disabled');
        $("input[name=others][value=" + secondPageDataEstablishmentPermits['others'] + "]").prop('checked', true);
      }

    }

    var id = sessionStorage.getItem("id");
    var emb_id = sessionStorage.getItem("emb-id");
    $.ajax({
      url: "{{route('getReportData')}}",
      type: 'POST',
      data: {
        page: [2, 3, 5],
        id: id,
        emb_id: emb_id,
        _token: '{{csrf_token()}}',
      },
      beforeSend: function () {

      },
      success: function (response) {

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

        /// last
        if ($.isEmptyObject(response['inspection']) != true) {

          var detailsIT = '';
          $.each(JSON.parse(response['inspection']['inspection_team']), function (index, value) {
            detailsIT += `<div class="col-sm-6">
            <input type="text" class="form-control form-control-border border-width-2" name="inspection-team-member" placeholder="Name and Signature"
              style="text-align:center;" value="`+ value + `">
          </div>`;
          });

          $("#inspection-team").html(detailsIT);

          $("#recommending-approval").val(response['inspection']['recommending_approval']);
          $("#regional-director").val(response['inspection']['regional_director']);

          $("#date-of-inspection").val(new Date(response['inspection']['inspection_date']).toLocaleDateString('en-GB'));

        }

      }


    });

    /// 4th Page
    const fourthPageData = JSON.parse(localStorage.getItem("fourthPageData"));
    // console.log(fourthPageData);
    if (fourthPageData) {

      $.each(fourthPageData, function (index, value) {
        // console.log(value);

        $("#" + value['id']).prop("checked", true);
      });

    }

    // } 



  });

  const alldata = [];

  function Previous(current, previous) {
    stepper.to(previous);
    localStorage.setItem('currentPage', previous);
  }

  function Next(current, next) {

    var idParameter = getUrlParameters("id", "", true);
    console.log(idParameter);

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

      localStorage.setItem('firstPageData', JSON.stringify(firstPageData))
      localStorage.setItem('currentPage', next)
    }

    if (current == 2 && next == 3) {
      second = secondPage(next);
      alldata['second'] = second;
      // console.log(second);

      const secondPageData = {
        'check-status': second['check-status'],
        'determine-compliance': second['determine-compliance'],
        'investigate-community': second['investigate-community'],
        'verify-accuracy': second['verify-accuracy'],
        'others': second['others'],
      }



      localStorage.setItem('secondPageData', JSON.stringify(secondPageData));

      if (second['establishment_permits'] != undefined) {
        localStorage.setItem('secondPageData-establishmentPermits', JSON.stringify(second['establishment_permits']));
      } else {

        const establishmentPermits = {
          'establishment_permits': 'none',
        }

        localStorage.setItem('secondPageData-establishmentPermits', JSON.stringify(establishmentPermits));
      }


      localStorage.setItem('currentPage', next)
    }

    if (current == 3 && next == 4) {
      third = thirdPage(next);
      alldata['third'] = third;

      const firstPageData = JSON.parse(localStorage.getItem("firstPageData"));
      const secondPageData = JSON.parse(localStorage.getItem("secondPageData"));
      const secondPageDataEstablishmentPermits = JSON.parse(localStorage.getItem("secondPageData-establishmentPermits"));
      

      $.ajax({
        url: "{{route('saveRaw')}}",
        type: 'POST',
        data: {
          id: idParameter,
          emb_id: emb_id,
          firstPageData: firstPageData,
          secondPageData: secondPageData,
          secondPageDataEstablishmentPermits: secondPageDataEstablishmentPermits,
          'with-nov': sessionStorage.getItem("with-nov"),
          'report-for': reportFor,
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
          console.log(response);
          // $(".modal-while-saving").modal('hide');
          localStorage.setItem('currentPage', next);
          sessionStorage.setItem("new-or-old", 'old');
          sessionStorage.setItem("id", response);
          window.history.replaceState(null, null, "?id=" + response);

          var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 50,
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
            title: 'Successfully saving your report...'
          })

        }

      });


    }

    if (current == 4 && next == 5) {
      fourth = fourthPage(next);
      // console.log(fourth);
      alldata['fourth'] = fourth;
      localStorage.setItem('currentPage', next);

      localStorage.setItem('fourthPageData', JSON.stringify(fourth));

      // console.log(alldata);
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
          fourthPageData: JSON.parse(fourthPageData),
          teammember: teammember,
          recommendingapproval: recommendingapproval,
          regionaldirector: regionaldirector,
          dateofinspection: dateofinspection,
          emb_id: emb_id,
          id: idParameter,
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
          // console.log(response);
          $("#modal-while-saving").modal('hide');

          var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
              toast.addEventListener('mouseenter', Swal.stopTimer)
              toast.addEventListener('mouseleave', Swal.resumeTimer)
            },
            didClose: (toast) => {
              location.href = '/dashboard';

              alert('The page will go back to dashboard');
            }
          });

          Toast.fire({
            icon: 'success',
            title: 'Successfully submitted'
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

    stepper.to(next);
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
    // console.log(arrayPermits);


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

      // console.log($(this).attr('id'));

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
    // console.log(dftsA);

    ///   APSE: 850 kVA Diesel Fueled Generator Set - Stack B
    var dftsB = [];
    $("#diesel-fueled-table-stack-b tbody").find("tr").each(function () {
      var newArray = [];

      // console.log($(this).attr('id'));

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
    // console.log(dftsB);



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

    stepper.to(next);
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

    console.log(second);

    stepper.to(next);
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

    if (error.length == 0) {

      stepper.to(next);

      return first;
    } else {
      alert('Some of the fields are required');
    }

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

</script>