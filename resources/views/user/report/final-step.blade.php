<div class="form-group">
  <div class="row">
    <div class="col-md-2">
      <label>Date of Inspection:</label>
    </div>
    <div class="col-md-3">
      <div class="input-group date" id="setdateofinspection" data-target-input="nearest">
        <input type="text" class="form-control datetimepicker-input" data-target="#setdateofinspection"
          id="date-of-inspection" placeholder="Enter Date" />
        <div class="input-group-append" data-target="#setdateofinspection" data-toggle="datetimepicker">
          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
        </div>
      </div>
    </div>
  </div>
</div>

<br>

<div class="form-group">
  <div class="row" style="margin: none;">
    <div class="col-sm-3">
      <label>Submitted by the Inspection Team:</label>
    </div>
    <div class="col-sm-2">
      <button class="btn btn-success btn-block btn-xs" id="add-inspection-team">ADD MEMBER</button>
    </div>
  </div>
  
  
</div>
<div class="form-group" style="margin: none;">
  <div class="row" id="inspection-team">
    <div class="col-sm-6">
      <input type="text" class="form-control form-control-border border-width-2" name="inspection-team-member" placeholder="Name and Signature"
        style="text-align:center;">
    </div>
    <div class="col-sm-6">
      <input type="text" class="form-control form-control-border border-width-2" name="inspection-team-member" placeholder="Name and Signature"
        style="text-align:center;">
    </div>
  </div>
  
</div>

<br>
<div class="form-group">
  <div class="row">
    <div class="col-sm-6">
      <label>Recommending Approval:</label>
      <input type="text" class="form-control form-control-border border-width-2" id="recommending-approval" placeholder="Name and Signature"
        style="text-align:center;">
      <center><label>Chief, EMED</label></center>
    </div>
    <div class="col-sm-6">
      <label>Approved by:</label>
      <input type="text" class="form-control form-control-border border-width-2" id="regional-director" placeholder="Name and Signature"
        style="text-align:center;">
      <center><label>Regional Director</label></center>
    </div>

  </div>
</div>

<script src="../../AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<script>

  $(function () {
    $('#setdateofinspection').datetimepicker({
      format: 'DD/MM/YYYY',
    });

    $("#add-inspection-team").on('click', function() {
      $("#inspection-team").append(`<div class="col-sm-6">
      <input type="text" class="form-control form-control-border border-width-2" name="inspection-team-member" placeholder="Name and Signature"
        style="text-align:center;">
    </div>`);
    });
  });


</script>