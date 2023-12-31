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
          <!-- <h3 class="card-title"> -->
          <p class="text-center" style="font-size: 24px; margin-bottom: 0px">Notice of Violation Form</p>
          <!-- </h3> -->
        </div>
        <div class="card-body p-0">
          <div class="bs-stepper">
            <div class="bs-stepper-header" role="tablist">
              <!-- your steps here -->
              <div class="step" data-target="#first-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="first-part"
                  id="first-part-trigger">
                  <span class="bs-stepper-circle">1</span>
                  <span class="bs-stepper-label">Company information</span>
                </button>
              </div>
              <div class="line"></div>
              <div class="step" data-target="#second-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="second-part"
                  id="second-part-trigger">
                  <span class="bs-stepper-circle">2</span>
                  <span class="bs-stepper-label">Violation Act</span>
                </button>
              </div>
              <div class="line"></div>
              <div class="step" data-target="#third-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="third-part"
                  id="third-part-trigger">
                  <span class="bs-stepper-circle">3</span>
                  <span class="bs-stepper-label">Set TC Schedule</span>
                </button>
              </div>
              <div class="line"></div>
              <div class="step" data-target="#fourth-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="fourth-part"
                  id="fourth-part-trigger">
                  <span class="bs-stepper-circle">4</span>
                  <span class="bs-stepper-label">Review Details</span>
                </button>
              </div>
            </div>
            <div class="bs-stepper-content">
              <!-- your steps content here -->
              <div id="first-part" class="content" role="tabpanel" aria-labelledby="first-part-trigger">

                <div class="col-md-12">
                  <div class="card card-default" style="box-shadow: none;">
                    <div class="card-header" style="height: 50px;">
                    
                      <em><b><p class="text-center text-lg">BASIC INFORMATION</p></b></em>
                      
                    </div>
                    <div class="card-body">

                      <form id="basic-info">
                        @include('user.nov.basic-info')
                      </form>

                    </div>
                    <!-- /.card-body -->
                  </div>


                  <button class="btn btn-primary btn-flat" onclick="NextStep(1,2)">Next</button>

                </div>
              </div>
              <div id="second-part" class="content" role="tabpanel" aria-labelledby="second-part-trigger">
                <div class="col-md-12">
                  <div class="card card-default" style="box-shadow: none;">
                    <div class="card-header" style="height: 50px;">

                      <em><b><p class="text-center text-lg">ACT/S CONSTITUTING THE VIOLATION</p></b></em>

                    </div>
                    <div class="card-body">
                      @include('user.nov.acts-constituting-violation')
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary btn-flat" onclick="stepper.previous()">Previous</button>
                <button class="btn btn-primary btn-flat" onclick="NextStep(2,3)">Next</button>
              </div>

              <div id="third-part" class="content" role="tabpanel" aria-labelledby="third-part-trigger">
                <div class="col-md-12">
                  <div class="card card-default" style="box-shadow: none;">
                    <div class="card-header" style="height: 50px;">
                    
                      <em><b><p class="text-center text-lg">PROPOSED TECHNICAL CONFERENCE SCHEDULE</p></b></em>
                      
                    </div>
                    <div class="card-body">
                      @include('user.nov.proposed-technical-schedule')
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary btn-flat" onclick="stepper.previous()">Previous</button>
                <button class="btn btn-primary btn-flat" onclick="NextStep(3,4)">Next</button>
              </div>

              <div id="fourth-part" class="content" role="tabpanel" aria-labelledby="fourth-part-trigger">
                <div class="col-md-12">
                  <div class="card card-default" style="box-shadow: none;">
                    <div class="card-header" style="height: 50px;">
                    
                      <em><b><p class="text-center text-lg">REVIEW DETAILS</p></b></em>
                      
                    </div>
                    <div class="card-body">
                      @include('user.nov.review-nov-details')
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary btn-flat" onclick="stepper.previous()">Previous</button>
                <button class="btn btn-primary btn-flat" onclick="NextStep(4,5)">Finish</button>
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
@stop

<script src="../../AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<script src="../../AdminLTE-3.2.0/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<script src="../../AdminLTE-3.2.0/plugins/jquery-validation/jquery.validate.min.js"></script>

<script>
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  });

  

  var emb_id = sessionStorage.getItem("emb-id");
  var report_id = sessionStorage.getItem("report-id");
  const Sector = JSON.parse(sessionStorage.getItem("nov-sector"));

  $(function () {
    stepper.to(1);
    var ID = sessionStorage.getItem("nov-id");
    

    $("#nov-id").val(ID);

    if (ID != 0 ) {
      $.ajax({
        url: "{{route('getNOVview')}}",
        type: 'POST',
        data: {
          ID: ID,
          _token: '{{csrf_token()}}',
        },
        success: function (response) {
          console.log(response);

          $("#case-number").val(response[0]['case_number']);
          $("#name").val(response[0]['name']);

          $("#date").val(response[0]['date_schedule']);
          $("#time").val(response[0]['time_schedule']);
          $("#technical-conference-link").val(response[0]['web_conferencing']);

          $("#company-name").val(response[0]['company_name']);
          $("#email").val(response[0]['email']);
          $("#contact-no").val(response[0]['contact_no']);
          $("#address").val(response[0]['address']);


          $.each(response[1], function (index, value) {
            var tr = `<tr>
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-info btn-flat acts-consituting-violation-edit-btn" id="acts-consituting-violation-edit-btn" >Edit</button>
                            <button class="btn btn-danger btn-flat acts-consituting-violation-delete-btn" id="acts-consituting-violation-delete-btn" >Delete</button>
                        </div>
                    </td>
                    <td>`+ value['findings'] + `</td>
                    <td style='white-space:pre'>`+ value['findings_description'] + `</td>
                    <td>`+ value['prohibited_act'] + `</td>
                    <td>`+ value['fine'] + `</td>
                </tr>`;

            $("#acts-consituting-violation-table-body").append(tr);
          });

          sessionStorage.setItem("nov-sector", JSON.stringify(response[0]['sector']));



        }

      });
    } else {


      var CompanyName = sessionStorage.getItem("company-name");
      var CompanyContact = sessionStorage.getItem("company-contact");
      var CompanyEmail = sessionStorage.getItem("company-email");
      var CompanyAddress = sessionStorage.getItem("company-address");


      $("#company-name").val(CompanyName);
      $("#email").val(CompanyEmail);
      $("#contact-no").val(CompanyContact);
      $("#address").val(CompanyAddress);

    }



    // stepper.to(1);

  });

  function NextStep(current, nextstep) {
    stepper.to(nextstep);


    if (current == 3 && nextstep == 4) {

      

      var CaseNumber = $("#case-number").val();
      var Name = $("#name").val();
      var CompanyName = $("#company-name").val();
      var Email = $("#email").val();
      var ContactNo = $("#contact-no").val();
      var Address = $("#address").val();

      var Date = $("#date").val();
      var Time = $("#time").val();
      var TCLink = $("#technical-conference-link").val();

      var tableData = '';
      $("#acts-consituting-violation-table").find("tr").each(function () {

        $(this).find("td:eq(1)").each(function () {
          tableData += `<tr data-widget="expandable-table" aria-expanded="false">
                          <td><i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                            <em>`+ this.innerHTML + `</em>
                          </td>
                        </tr>`;
        });

        $(this).find("td:eq(2)").each(function () {
          tableData += `<tr class="expandable-body d-none">
                          <td colspan="1">
                            <div>
                              <table class="table">
                                <tbody>
                                  <tr>
                                    <td>
                                      <p style='white-space:normal'>
                                        `+ this.innerHTML + `
                                        </p>
                                      </td>
                                  </tr>
                                </table>
                              </div>
                          </td>
                        </tr>`;
        });


      });

      $("#review-findings-table-body").html(tableData);

      $("#review-case-number").text(CaseNumber);
      $("#review-name").text(Name);
      $("#review-company-name").text(CompanyName);
      $("#review-email").text(Email);
      $("#review-contact-no").text(ContactNo);
      $("#review-address").text(Address);

      $("#review-date").text(Date);
      $("#review-time").text(Time);
      $("#review-technical-conference-link").text(TCLink);

    }

    if (current == 4 && nextstep == 5) {

      var ID = $("#nov-id").val();
      var CaseNumber = $("#case-number").val();
      var Name = $("#name").val();
      var CompanyName = $("#company-name").val();
      var Email = $("#email").val();
      var ContactNo = $("#contact-no").val();
      var Address = $("#address").val();

      var Date = $("#date").val();
      var Time = $("#time").val();
      var TCLink = $("#technical-conference-link").val();

      var arrayFindings = [];

      $("#acts-consituting-violation-table").find("tr").each(function () {
        var newArray = [];

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
          arrayFindings.push(newArray);
        }

      });

      
      
      $.ajax({
        url: "{{route('submitNOV')}}",
        type: 'POST',
        data: {
          ID: ID,
          CaseNumber: CaseNumber,
          Name: Name,
          CompanyName: CompanyName,
          Email: Email,
          ContactNo: ContactNo,
          Address: Address,
          DateSchedule: Date,
          TimeSchedule: Time,
          WebConferencing: TCLink,
          arrayFindings: arrayFindings,
          EmbID : emb_id,
          report_id : report_id,
          Sector : Sector,
          _token: '{{csrf_token()}}',
        },
        success: function (response) {
          alert('success!')
          // window.open("/dashboard");
          location.href = '/nov-list';
        }

      });
    }

  }

  function PrevStep(current, prevstep) {

  }

  $(function () {

    // stepper.to(1);

  });



</script>