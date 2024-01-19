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
        <h1 class="m-0">Report</h1>
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
      <div class="card card-primary">
        <div class="card-header">
          <!-- <h3 class="card-title"> -->
          <p class="text-center">Type of Report</p>
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
                  <div class="card card-primary">
                    <div class="card-header" style="height: 50px;">
                      <!-- <h3 class="card-title"> -->
                      <p class="text-center">Company General Information</p>
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


                  <button class="btn btn-primary" onclick="stepper.next()">Next</button>

                </div>
              </div>
              <div id="second-part" class="content" role="tabpanel" aria-labelledby="second-part-trigger">
                <div class="col-md-12">
                  <div class="card card-primary">
                    <div class="card-header" style="height: 50px;">
                      <!-- <h3 class="card-title"> -->
                      <p class="text-center">Purpose of Inspection</p>
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
                <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                <button class="btn btn-primary" onclick="stepper.next()">Next</button>
              </div>

              <div id="third-part" class="content" role="tabpanel" aria-labelledby="third-part-trigger">
                <div class="col-md-12">
                  <div class="card card-primary">
                    <div class="card-header" style="height: 50px;">
                      <!-- <h3 class="card-title"> -->
                      <p class="text-center">Compliance Status</p>
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
                <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                <button class="btn btn-primary" onclick="stepper.next()">Next</button>
              </div>

              <div id="fourth-part" class="content" role="tabpanel" aria-labelledby="fourth-part-trigger">
                <div class="col-md-12">
                  <div class="card card-primary">
                    <div class="card-header" style="height: 50px;">
                      <!-- <h3 class="card-title"> -->
                      <p class="text-center">Recommendation</p>
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
                <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                <button class="btn btn-primary" onclick="stepper.next()">Next</button>
              </div>

              <div id="fifth-part" class="content" role="tabpanel" aria-labelledby="fifth-part-trigger">
                <div class="col-md-12">
                  <div class="card card-primary">
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

                    </div>
                  </div>
                </div>
                <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                <button type="submit" class="btn btn-primary">Submit</button>
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

<script>
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  $(function () {
    stepper.to(1);

  });
</script>