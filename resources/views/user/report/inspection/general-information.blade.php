<div class="form-group">
  <label for="inputName" style="margin-bottom: 0px;">Establishment Name</label>
  <input type="text" id="establishment-name" class="form-control rounded-0">
  <label for="inputName" style="margin-bottom: 0px; color:red; font-size:11px" id="establishment-name-error"></label>
</div>
<div class="form-group">
  <label for="inputName" style="margin-bottom: 0px;">Nature of Business</label>
  <input type="text" id="nature-of-business" class="form-control rounded-0">
  <label for="inputName" style="margin-bottom: 0px; color:red; font-size:11px" id="nature-of-business-error"></label>
</div>
<div class="form-group">
  <div class="row">
    <div class="col-7">
      <label for="inputName" style="margin-bottom: 0px;">Address</label>
      <input type="text" id="address" class="form-control rounded-0">
      <label for="inputName" style="margin-bottom: 0px; color:red; font-size:11px" id="address-error"></label>
    </div>
    <div class="col-2">
      <label for="inputName" style="margin-bottom: 0px;">Municipality</label>
      <select class="form-control" id="municipality">
        <option selected="" disabled="" value="">Select Province First</option>
      </select>
      <label for="inputName" style="margin-bottom: 0px; color:red; font-size:11px" id="municipality-error"></label>
    </div>
    <div class="col-2">
      <label for="inputName" style="margin-bottom: 0px;">Province</label>
      <select class="form-control" id="province">
        <option selected="" disabled="" value="">Select Region First</option>
      </select>
      <label for="inputName" style="margin-bottom: 0px; color:red; font-size:11px" id="province-error"></label>
    </div>
    <div class="col-1">
      <label for="inputName" style="margin-bottom: 0px;">Region</label>
      <select class="form-control" id="region">
        <option selected="" disabled="" value="">Select one</option>
        <option value="NCR">NCR</option>
        <option value="CAR">CAR</option>
        <option value="R1">R1</option>
        <option value="R2">R2</option>
        <option value="R3">R3</option>
        <option value="R4A">R4A</option>
        <option value="R4B">R4B</option>
        <option value="R5">R5</option>
        <option value="R6">R6</option>
        <option value="R7">R7</option>
        <option value="R8">R8</option>
        <option value="R9">R9</option>
        <option value="R10">R10</option>
        <option value="R11">R11</option>
        <option value="R12">R12</option>
        <option value="R13">R13</option>
        <option value="R18">R18</option>
      </select>
      <label for="inputName" style="margin-bottom: 0px; color:red; font-size:11px" id="region-error"></label>
    </div>
  </div>
  
</div>
<div class="form-group">
  <label for="inputName" style="margin-bottom: 0px;">Geographical Coordinates</label>
  <input type="text" id="geograpical-coordinates" class="form-control rounded-0">
</div>
<div class="form-group">
  <div class="row">
    <div class="col-4">
      <label for="inputName" style="margin-bottom: 0px;">Year Established</label>
      <div class="input-group date" id="set-year-established" data-target-input="nearest">
        <input type="text" class="form-control datetimepicker-input rounded-0" data-target="#set-year-established"
          id="year-established" placeholder="Enter Date" />
        <div class="input-group-append" data-target="#set-year-established" data-toggle="datetimepicker">
          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
        </div>
      </div>
    </div>
    <div class="col-4">
      <label for="inputName" style="margin-bottom: 0px;">PSIC Code</label>
      <input type="text" id="psic-code" class="form-control rounded-0">
    </div>
    <div class="col-4">
      <label for="inputName" style="margin-bottom: 0px;">Product</label>
      <input type="text" id="product" class="form-control rounded-0">
      <label for="inputName" style="margin-bottom: 0px; color:red; font-size:11px" id="product-error"></label>
    </div>
  </div>
</div>
<div class="form-group">
  <div class="row">
    <div class="col-4">
      <label for="inputName" style="margin-bottom: 0px;">Operating hours/day</label>
      <input type="number" id="operating-hours-day" class="form-control rounded-0">
    </div>
    <div class="col-4">
      <label for="inputName" style="margin-bottom: 0px;">Operating hours/week</label>
      <input type="number" id="operating-hours-week" class="form-control rounded-0">
    </div>
    <div class="col-4">
      <label for="inputName" style="margin-bottom: 0px;">Operating hours/year</label>
      <input type="number" id="operating-hours-year" class="form-control rounded-0">
    </div>
  </div>
</div>

<div class="form-group">
  <div class="row">
    <div class="col-6">
      <label for="inputName" style="margin-bottom: 0px;">Emil</label>
      <input type="text" id="email" class="form-control rounded-0">
    </div>
    <div class="col-6">
      <label for="inputName" style="margin-bottom: 0px;">Phone/Fax</label>
      <input type="text" id="phone-fax" class="form-control rounded-0">
    </div>
  </div>
</div>

<div class="form-group">
  <div class="row">
    <div class="col-md-11">
      <!-- <input type="checkbox" name="my-checkbox" id="product-on-off" checked data-bootstrap-switch> -->
    </div>
    <div class="col-md-1">
      <div class="card-tools">
        <button type="button" class="btn btn-default btn-flat btn-block" id="modal-add-ppa-btn">
          <i class="fa fa-edit"></i>
        </button>
      </div>
    </div>
  </div>

  <div id="product-lines-div">
    <table class="table table-bordered" id="PPA-table">
      <thead>
        <tr>
          <th>Product Lines</th>
          <th>Production Rate as Declared in the ECC (Unit/day) </th>
          <th>Actual Production Rate (Unit/day)</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>
</div>

<div class="form-group">
  <label for="inputClientCompany" style="margin-bottom: 0px;">Managing Head Name</label>
  <input type="text" id="managing-head" class="form-control rounded-0">
</div>

<div class="form-group">
  <label for="inputClientCompany" style="margin-bottom: 0px;">Name of PCO</label>
  <input type="text" id="name-of-pco" class="form-control rounded-0">
</div>

<div class="form-group">
  <div class="row">
    <div class="col-4">
      <label for="inputName" style="margin-bottom: 0px;">PCO Accreditation Number</label>
      <input type="text" id="pco-accreditation-number" class="form-control rounded-0">
    </div>
    <div class="col-4">
      <label for="inputName" style="margin-bottom: 0px;">Date of Effectivity</label>
      <div class="input-group date" id="set-date-of-effectivity" data-target-input="nearest">
        <input type="text" class="form-control rounded-0 datetimepicker-input" data-target="#set-date-of-effectivity"
          id="date-of-effectivity" placeholder="Enter Date" />
        <div class="input-group-append" data-target="#set-date-of-effectivity" data-toggle="datetimepicker">
          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
        </div>
        <label for="inputName" style="margin-bottom: 0px; color:red; font-size:11px" id="date-of-effectivity-error"></label>
      </div>
    </div>
    <div class="col-4">
      <label for="inputName" style="margin-bottom: 0px;">Date of Expiry</label>
      <div class="input-group date" id="set-date-of-expiry" data-target-input="nearest">
        <input type="text" class="form-control rounded-0 datetimepicker-input" data-target="#set-date-of-expiry"
          id="date-of-expiry" placeholder="Enter Date" />
        <div class="input-group-append" data-target="#set-date-of-expiry" data-toggle="datetimepicker">
          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
        </div>
        <label for="inputName" style="margin-bottom: 0px; color:red; font-size:11px" id="date-of-expiry-error"></label>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modal-add-ppa">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card card-primary">
          <div class="card-body">

            <div class="form-group">
              <label for="inputName" style="margin-bottom: 0px;">Product Lines</label>
              <input type="text" id="product-lines-add" class="form-control rounded-0" required>
            </div>

            <div class="form-group">
              <label for="inputName" style="margin-bottom: 0px;">Production Rate as Declared in the ECC
                (Unit/day)</label>
              <input type="text" id="production-rate-add" class="form-control rounded-0" required>
            </div>

            <div class="form-group">
              <label for="inputName" style="margin-bottom: 0px;">Actual Production Rate (Unit/day)</label>
              <input type="text" id="actual-production-rate-add" class="form-control rounded-0" required>
            </div>

            <div class="form-group">
              <button class="btn btn-success btn-block" id="PPA-table-btn-add">Add</button>
              <button class="btn btn-primary btn-block" id="PPA-table-btn-edit" hidden>Save</button>
              <button class="btn btn-danger btn-block" id="PPA-table-btn-reset">Reset</button>
            </div>
          </div>
        </div>

        <!-- <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="PPA-table-btn-proceed">Proceed</button>
        </div> -->
      </div>
    </div>
  </div>
</div>

<script src="../../AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<script src="../../AdminLTE-3.2.0/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>

<script>

  $("#region").on('change', function() {
    var region = $(this).val();

      $.ajax({
        url: "{{route('/get/province')}}",
        type: 'POST',
        data: {
          region: region,
          _token: '{{csrf_token()}}',
        },
        success: function (response) {
          console.log(response);
          $("#province").html('<option selected="" disabled="" value="">Select one</option>');
          $("#municipality").html('<option selected="" disabled="" value="">Select one</option>');
          $.each(response, function (index, value) {
            $("#province").append('<option value="'+value['province']+'">'+value['province']+'</option>');
          })
          
        }
      });
  });

  $("#province").on('change', function() {
    var province = $(this).val();

      $.ajax({
        url: "{{route('/get/municipality')}}",
        type: 'POST',
        data: {
          province: province,
          _token: '{{csrf_token()}}',
        },
        success: function (response) {
          console.log(response);
          $("#municipality").html('<option selected="" disabled="" value="">Select one</option>');
          $.each(response, function (index, value) {
            $("#municipality").append('<option value="'+value['municipality']+'">'+value['municipality']+'</option>');
          })
          
        }
      });
  });


  $("input[data-bootstrap-switch]").each(function () {
    $(this).bootstrapSwitch('state', $(this).prop('checked'));
  });

  $('#product-on-off').on('switchChange.bootstrapSwitch', function (event, state) {
    if (state) {
      // Checked
      $("#product-lines-div").removeAttr('hidden');
      $("#modal-add-ppa-btn").removeAttr('hidden');
      localStorage.setItem('product-on-off', 'off');
    } else {
      // Is not checked
      $("#product-lines-div").attr('hidden', 'hidden');
      $("#modal-add-ppa-btn").attr('hidden', 'hidden');
      localStorage.setItem('product-on-off', 'on');
    }
  });

  $(function () {
    
    $('#set-year-established').datetimepicker({
      format: 'YYYY',

    });

    $('#set-date-of-effectivity').datetimepicker({
      format: 'DD/MM/YYYY',

    });

    $('#set-date-of-expiry').datetimepicker({
      format: 'DD/MM/YYYY',

    });
    

    $("#modal-add-ppa-btn").on('click', function () {

      $("#product-lines-add").val('');
      $("#production-rate-add").val('');
      $("#actual-production-rate-add").val('');

      $("#PPA-table-btn-edit").attr('hidden', 'hidden');
      $("#PPA-table-btn-add").removeAttr('hidden');

      $("#modal-add-ppa").modal();
    });

    $("#PPA-table-btn-reset").on('click', function () {

      $("#product-lines-add").val('');
      $("#production-rate-add").val('');
      $("#actual-production-rate-add").val('');

    });

    $("#PPA-table-btn-add").on("click", function () {
      var ProductLines = $("#product-lines-add").val();
      var ProductionRate = $("#production-rate-add").val();
      var ActualProductionRate = $("#actual-production-rate-add").val();


      $("#PPA-table tbody").append(`
        <tr>
          <td>`+ ProductLines + `</td>
          <td>`+ ProductionRate + `</td>
          <td>`+ ActualProductionRate + `</td>
          <td>
                <div class="btn-group">
                    <button class="btn btn-info btn-flat PPA-table-edit" title="edit"><i class="fa-solid fa-file-pen"></i></button></button>
                    <button class="btn btn-danger btn-flat PPA-table-delete"><i class="fa-solid fa-trash"></i></button>
                </div>
              </td>
        </tr>
      `);

      $("#product-lines-add").val('');
      $("#production-rate-add").val('');
      $("#actual-production-rate-add").val('');

      $("#modal-add-ppa").modal('hide');

    });


    $("#PPA-table").on('click', '.PPA-table-edit', function () {
      $("#modal-add-ppa").modal();

      $("#PPA-table-btn-add").attr('hidden', 'hidden');
      $("#PPA-table-btn-edit").removeAttr('hidden');


      var currentRow = $(this).closest("tr");

      currentRow.find("td:eq(0)").each(function () {
        document.getElementById("product-lines-add").value = this.innerHTML;
      });

      currentRow.find("td:eq(1)").each(function () {
        document.getElementById("production-rate-add").value = this.innerHTML;
      });

      currentRow.find("td:eq(2)").each(function () {
        document.getElementById("actual-production-rate-add").value = this.innerHTML;
      });

      $("#PPA-table-btn-edit").on("click", function () {

        var ProductLines = $("#product-lines-add").val();
        var ProductionRate = $("#production-rate-add").val();
        var ActualProductionRate = $("#actual-production-rate-add").val();

        currentRow.find("td:eq(0)").each(function () {
          $(this).text(ProductLines);
        });

        currentRow.find("td:eq(1)").each(function () {
          $(this).text(ProductionRate);
        });

        currentRow.find("td:eq(2)").each(function () {
          $(this).text(ActualProductionRate);
        });

        $("#modal-add-ppa").modal('hide');
      });

    });

    $("#PPA-table").on('click', '.PPA-table-delete', function () {

      var currentRow = $(this).closest("tr");
      var TDID = currentRow.attr('id');

      currentRow.remove();


    });

  });

</script>