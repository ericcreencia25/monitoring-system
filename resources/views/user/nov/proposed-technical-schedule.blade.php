<div class="form-group">
    <div class="row">
        <div class="col-md-6">
            <label style="margin-bottom: 0px;">Date:</label>
            <div class="input-group date" id="setdate" data-target-input="nearest">
                <input type="text" class="form-control rounded-0 datetimepicker-input" data-target="#setdate" id="date"
                    placeholder="Enter Date" />
                <div class="input-group-append" data-target="#setdate" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <label style="margin-bottom: 0px;">Time:</label>
            <div class="input-group date" id="settime" data-target-input="nearest">
                <input type="text" class="form-control rounded-0 datetimepicker-input" data-target="#settime" id="time"
                    placeholder="Enter Time" />
                <div class="input-group-append" data-target="#settime" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-clock"></i></div>
                </div>
            </div>
        </div>
    </div>


</div>
<div class="form-group">
    <label for="inputName" style="margin-bottom: 0px;">Web Conferencing:</label>
    <input type="text" id="technical-conference-link" class="form-control rounded-0" placeholder="Technical Conference Link">
</div>

<script>

    $(function () {

        $('#setdate').datetimepicker({
            format: 'DD/MM/YYYY',
        });
        
        $('#settime').datetimepicker({
            format: 'HH:mm:ss'
        });

        //Date and time picker
        $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    });



</script>