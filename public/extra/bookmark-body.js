var bookmarkbody = `<div class="flex justify-between items-center h-36 border-b-2 mb-4">
              <div class="flex space-x-4 items-center">
                  <div class="border border-gray-300 pl-6 pr-2 py-2 rounded-full flex items-center space-x-4">
                      <div>
                          `+ EstablishmentStatus(response['deleted']) + `
                      </div>
                  </div>

                  <div class="flex flex-col">

                      <h3 class="text-primary">`+ EstablishmentName(response['establishment_name'], response['company_name']) + `
                      </h3>
                      <p class="text-black text-gray-400 text-sm" id="company_email">`+ response['email'] + `</p>
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
                              <svg xmlns="http://www.w3.org/2000/svg" fill="`+ saved + `" viewBox="0 0 24 24"
                                  stroke="currentColor" onclick="favorite('none')" style="cursor: pointer">
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
                        <i class="fa-solid fa-file-export"></i> Generate Report
                      </button>
                      <ul class="dropdown-menu">
                          <li class="dropdown-item" data-toggle="modal" data-target="#modal-generate-report" href="#"><a
                                  href="#">Report</a></li>
                          <li class="dropdown-item" data-toggle="modal" data-target="#modal-generate-nov" href="#"><a
                                  href="#">NOV</a></li>
                          <li class="dropdown-item" data-toggle="modal" data-target="#modal-generate-commitment" href="#"><a
                                  href="#">Commitment</a></li>
                          <li class="dropdown-item" data-toggle="modal" data-target="#modal-generate-compliance" href="#"><a
                                  href="#">Compliance</a></li>
                          <li class="dropdown-item" data-toggle="modal" data-target="#modal-generate-decision" href="#"><a
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

                              <div class="card " style="box-shadow: none;">
                                  <div class="card-header">
                                      <h3 class="card-title">Profile Information</h3>
                                  </div>
                                  <!-- /.card-header -->
                                  <div class="card-body">
                                      <form>
                                          <div class="card-body">
                                              <div class="row">
                                                  <div class="col-6">

                                                      <div class="text-muted">
                                                          <p class="text">EMB ID
                                                              <b class="d-block">`+ response['emb_id'] + `</b>
                                                          </p>
                                                      </div>

                                                      <input type="text" class="form-control" id="emb_id"
                                                          value="`+ response['emb_id'] + `" style="background-color: white;"
                                                          hidden>
                                                      <input type="text" class="form-control" id="cnt"
                                                          value="`+ response['cnt'] + `" style="background-color: white;"
                                                          hidden>
                                                  </div>


                                                  <div class="col-6">

                                                      <div class="text-muted">
                                                          <p class="text">Establishment Name
                                                              <em><b class="d-block">`+ establishment_name + `</b></em>
                                                          </p>
                                                      </div>

                                                      <input type="text" class="form-control" id="company-name"
                                                          value="`+ response['company_name'] + `" style="background-color: white;"
                                                          hidden>

                                                      <input type="text" class="form-control" id="establishment-name"
                                                          value="`+ establishment_name + `" style="background-color: white;"
                                                          hidden>
                                                  </div>

                                                  <div class="col-3">

                                                      <div class="text-muted">
                                                          <p class="text">Company Category
                                                              <b class="d-block">`+ CompanyCategory + `</b>
                                                          </p>
                                                      </div>

                                                      <input type="text" class="form-control" value="`+ CompanyCategory + `"
                                                          style="background-color: white;" hidden>
                                                  </div>



                                                  <div class="col-3">

                                                      <div class="text-muted">
                                                          <p class="text">Company Contact No
                                                              <b class="d-block">`+ response['contact_no'] + `</b>
                                                          </p>
                                                      </div>

                                                      <input type="text" class="form-control" id="company-contact"
                                                          value="`+ response['contact_no'] + `" style="background-color: white;"
                                                          hidden>

                                                  </div>
                                                  <div class="col-3">

                                                      <div class="text-muted">
                                                          <p class="text">Company Email
                                                              <b class="d-block">`+ response['email'] + `</b>
                                                          </p>
                                                      </div>

                                                      <input type="text" class="form-control" id="company-email"
                                                          value="`+ response['email'] + `" style="background-color: white;"
                                                          hidden>

                                                  </div>
                                                  <div class="col-3">

                                                      <div class="text-muted">
                                                          <p class="text">Date Approved
                                                              <b class="d-block">`+ response['input_date'] + `</b>
                                                          </p>
                                                      </div>

                                                      <input type="text" class="form-control" id="date-approved"
                                                          value="`+ response['input_date'] + `" style="background-color: white;"
                                                          hidden>

                                                  </div>

                                                  <div class="col-2">
                                                      <div class="text-muted">
                                                          <p class="text">Staff
                                                              <b class="d-block">`+ response['input_staff'] + `</b>
                                                          </p>
                                                      </div>

                                                      <input type="text" class="form-control" id="project-type"
                                                          value="`+ response['input_staff'] + `" style="background-color: white;"
                                                          hidden>

                                                  </div>


                                                  <div class="col-10">

                                                      <div class="text-muted">
                                                          <p class="text">Address
                                                              <b class="d-block">`+ MailingAddress + `</b>
                                                          </p>
                                                      </div>

                                                      <input type="text" class="form-control" id="company-address"
                                                          value="`+ MailingAddress + `" style="background-color: white;" hidden>

                                                  </div>



                                                  <div class="col-12">

                                                      <div class="text-muted">
                                                          <p class="text">Project Type
                                                              <b class="d-block">`+ response['project_name'] + `</b>
                                                          </p>
                                                      </div>

                                                      <textarea type="text" class="form-control" id="project-type"
                                                          style="background-color: white;"
                                                          hidden>`+ response['project_name'] + `</textarea>

                                                  </div>


                                              </div>
                                          </div>
                                      </form>
                                  </div>
                              </div>

                              <div class="card" style="box-shadow: none;">
                                  <div class="card-header">
                                      <h3 class="card-title">CEO/President/Owner</h3>
                                  </div>
                                  <div class="card-body">
                                      <form>
                                          <div class="card-body">
                                              <div class="form-group">
                                                  <div class="text-muted">
                                                      <p class="text">Full Name
                                                          <b class="d-block">`+ response['ceo_fname'] + ' ' + response['ceo_sname'] + `</b>
                                                      </p>
                                                  </div>

                                                  <input type="text" class="form-control" id="exampleInputEmail1"
                                                      value="`+ response['ceo_fname'] + response['ceo_sname'] + `"
                                                      style="background-color: white;" hidden>
                                              </div>

                                              <div class="form-group">
                                                  <div class="text-muted">
                                                      <p class="text">Owner Contact No
                                                          <b class="d-block">`+ response['ceo_contact_num'] + `</b>
                                                      </p>
                                                  </div>

                                                  <input type="text" class="form-control" id="exampleInputPassword1"
                                                      value="`+ response['ceo_contact_num'] + `" style="background-color: white;"
                                                      hidden>
                                              </div>

                                              <div class="form-group">

                                                  <div class="text-muted">
                                                      <p class="text">Owner Email
                                                          <b class="d-block">`+ response['ceo_email'] + `</b>
                                                      </p>
                                                  </div>

                                                  <input type="text" class="form-control" id="exampleInputEmail1"
                                                      value="`+ response['ceo_email'] + `" style="background-color: white;"
                                                      hidden>
                                              </div>
                                          </div>
                                      </form>
                                  </div>
                              </div>

                              <div class="card" style="box-shadow: none;">
                                  <div class="card-header">
                                      <h3 class="card-title">Plant Manager</h3>
                                  </div>
                                  <div class="card-body">
                                      <form>
                                          <div class="card-body">
                                              <div class="form-group">

                                                  <div class="text-muted">
                                                      <p class="text">Full Name
                                                          <b class="d-block">`+ isset(response['plant_manager_name']) + `</b>
                                                      </p>
                                                  </div>
                                                  
                                                  <input type="text" class="form-control" id="exampleInputEmail1"
                                                      value="`+ isset(response['plant_manager_name']) + `"
                                                      style="background-color: white;" hidden>
                                              </div>
                                              <div class="form-group">

                                                  <div class="text-muted">
                                                      <p class="text">Certificate of
                                                          Accreditation No
                                                          <b class="d-block">`+ isset(response['plant_manager_coe']) + `</b>
                                                      </p>
                                                  </div>

                                                  <input type="text" class="form-control" id="exampleInputPassword1"
                                                      value="`+ isset(response['plant_manager_coe']) + `"
                                                      style="background-color: white;" hidden>
                                              </div>
                                              <div class="form-group">

                                                  <div class="text-muted">
                                                      <p class="text">Contact Number
                                                          (Mobile Number | Telephone Number)
                                                          <b class="d-block">`+ isset(response['plant_manager_mobile_num']) + ' | ' + isset(response['plant_manager_tel_num']) + `</b>
                                                      </p>
                                                  </div>

                                                  <input type="text" class="form-control" id="exampleInputEmail1"
                                                      value="`+ isset(response['plant_manager_mobile_num']) + ' | ' + isset(response['plant_manager_tel_num']) + `"
                                                      style="background-color: white;" hidden>
                                              </div>
                                              <div class="form-group">
                                                  <div class="text-muted">
                                                      <p class="text">Email
                                                          <b class="d-block">`+ isset(response['plant_manager_email']) + `</b>
                                                      </p>
                                                  </div>

                                                  <input type="text" class="form-control" id="exampleInputEmail1"
                                                      value="`+ isset(response['plant_manager_email']) + `"
                                                      style="background-color: white;" hidden>
                                              </div>
                                          </div>
                                      </form>
                                  </div>
                              </div>

                              <div class="card" style="box-shadow: none;">
                                  <div class="card-header">
                                      <h3 class="card-title">Pollution Control Officer</h3>
                                  </div>
                                  <div class="card-body">
                                      <form>
                                          <div class="card-body">
                                              <div class="form-group">

                                                  <div class="text-muted">
                                                      <p class="text">Full Name
                                                          <b class="d-block">`+ isset(response['pco']) + `</b>
                                                      </p>
                                                  </div>
                                                  
                                                  <input type="text" class="form-control" value="`+ isset(response['pco']) + `" style="background-color: white;" hidden>
                                              </div>
                                              <div class="form-group">
                                                  <div class="text-muted">
                                                      <p class="text">Email
                                                          <b class="d-block">`+ isset(response['pco_email']) + `</b>
                                                      </p>
                                                  </div>
                                                  
                                                  <input type="text" class="form-control" value="`+ isset(response['pco_email']) + `" style="background-color: white;" hidden>

                                                  
                                              </div>
                                              <div class="form-group">

                                                  <div class="text-muted">
                                                      <p class="text">Certificate of
                                                          Employment
                                                          <b class="d-block">`+ isset(response['pco_coe']) + `</b>
                                                      </p>
                                                  </div>
                                                  
                                                  <input type="text" class="form-control" value="`+ isset(response['pco_coe']) + `" style="background-color: white;" hidden>

                                              </div>
                                              <div class="form-group">
                                                  <div class="text-muted">
                                                      <p class="text">Contact
                                                          <b class="d-block">`+ isset(response['pco_mobile_num']) + `</b>
                                                      </p>
                                                  </div>
                                                  
                                                  <input type="text" class="form-control" value="`+ isset(response['pco_mobile_num']) + `" style="background-color: white;" hidden>

                                              </div>
                                          </div>
                                      </form>
                                  </div>
                              </div>


                              <div class="card" style="box-shadow: none;">
                                  <div class="card-header">
                                      <h3 class="card-title">Managing Head</h3>
                                  </div>
                                  <div class="card-body">
                                      <form>
                                          <div class="card-body">
                                              <div class="form-group">

                                                  <div class="text-muted">
                                                      <p class="text">Full Name
                                                          <b class="d-block">`+ isset(response['managing_head']) + `</b>
                                                      </p>
                                                  </div>
                                                  
                                                  <input type="text" class="form-control" value="`+ isset(response['pco_mobile_num']) + `" style="background-color: white;" hidden>

                                              </div>
                                              <div class="form-group">

                                                  <div class="text-muted">
                                                      <p class="text">Email
                                                          <b class="d-block">`+ isset(response['managing_head_email']) + `</b>
                                                      </p>
                                                  </div>
                                                  
                                                  <input type="text" class="form-control" value="`+ isset(response['managing_head_email']) + `" style="background-color: white;" hidden>

                                              </div>
                                              <div class="form-group">
                                                  <div class="text-muted">
                                                      <p class="text">Contact
                                                          <b class="d-block">`+ isset(response['managing_head_mobile_no']) + `</b>
                                                      </p>
                                                  </div>
                                                  
                                                  <input type="text" class="form-control" value="`+ isset(response['managing_head_mobile_no']) + `" style="background-color: white;" hidden>

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
                                      <h3 class="card-title">GeoCoordinates</h3>
                                  </div>
                                  <div class="card-body">
                                      <div class="form-group">
                                          <div class="row">

                                              <div class="col-md-3">
                                                  <div class="text-muted">
                                                      <p class="text">Longitude
                                                          <b class="d-block">`+ response['longitude'] + `</b>
                                                      </p>
                                                  </div>

                                                  <input class="form-control" value="`+ response['longitude'] + `"
                                                      style="background-color: white;" hidden id="longitude">
                                              </div>
                                              <div class="col-md-3">
                                                  <div class="text-muted">
                                                      <p class="text">Latitude
                                                          <b class="d-block">`+ response['latitude'] + `</b>
                                                      </p>
                                                  </div>

                                                  <input class="form-control" value="`+ response['latitude'] + `"
                                                      style="background-color: white;" hidden id="latitude">
                                              </div>

                                              <div class="col-md-6" style="margin-bottom: 20px">
                                                <div class="btn-group">
                                                  <button class="btn btn-default"
                                                      onclick="userCoordinates()">USE YOUR COORDINATES</button>
                                                      
                                                  <button class="btn btn-default"
                                                      onclick="shapefilesAdd()">CREATE GEOSHAPEFILES</button>
                                                    </div>
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

                                          <table class="table table-bordered" id="nov-list" style="width: 100%">
                                              <thead>
                                                  <th >CASE NUMBER</th>
                                                  <th >SECTOR</th>
                                                  <th >ACTION</th>
                                              </thead>

                                              <tbody>
                                              </tbody>
                                          </table>
                                      </div>


                                  </div>
                              </div>

                          </div>

                          <div class="tab-pane fade" id="vert-tabs-right-report" role="tabpanel"
                              aria-labelledby="vert-tabs-right-report-tab">

                              <div class="card card-secondary" style="box-shadow: none;">
                                  <div class="card-header">
                                      <h3 class="card-title">History of Reports</h3>
                                  </div>
                                  <div class="card-body">
                                      <div class="form-group">

                                        <table class="table table-bordered" id="report-list" style="width: 100%">
                                            <thead>
                                              <th>DATE</th>
                                              <th>REPORT TYPE</th>
                                              <th>REPORT FOR</th>
                                              <th>ACTION</th>
                                              <th>WITH NOV</th>
                                            </thead>
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
                              role="tab" aria-controls="vert-tabs-right-home" aria-selected="true">Company Details</a>
                          
                          <a class="nav-link" id="vert-tabs-right-shapefiles-tab" data-toggle="pill"
                              href="#vert-tabs-right-shapefiles" role="tab" aria-controls="vert-tabs-right-shapefiles"
                              aria-selected="false">GeoCoordinates</a>
                          <a class="nav-link" id="vert-tabs-right-report-tab" data-toggle="pill" href="#vert-tabs-right-report"
                              role="tab" aria-controls="vert-tabs-right-report" aria-selected="false">Reports</a>
                          <a class="nav-link" id="vert-tabs-right-nov-tab" data-toggle="pill" href="#vert-tabs-right-nov"
                              role="tab" aria-controls="vert-tabs-right-nov" aria-selected="false">Notice of Violation</a>
                          

                      </div>
                  </div>
              </div>

          </section>`;