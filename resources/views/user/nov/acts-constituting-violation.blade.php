<div class="row">
    <div class="col-md-6">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title"><label for="inputName" style="margin-bottom: 0px;">Finding/s</label></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="form-group">
                    <input type="text" id="findings-add" class="form-control rounded-0" placeholder="Finding/s">
                </div>
                <div class="form-group">
                    <textarea id="compose-textarea-findings" class="form-control rounded-0" style="height: 100px"
                        placeholder="Description"></textarea>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title"><label for="inputName" style="margin-bottom: 0px;">Prohibited Act/s</label></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="form-group">
                    <select class="form-control rounded-0 select2" id="prohibited-act-add" style="width: 100%; height: 100%;">
                        <option value="">N/A</option>
                        <option value="Add Other">Add Other</option>
                        <!-- <option value="RA 6969">RA 6969</option>
                        <option value="RA 8749">RA 8749</option>
                        <option value="RA 9003">RA 9003</option>
                        <option value="RA 9275">RA 9275</option> -->

                    </select>
                </div>
                <div class="form-group">
                    <div class="input-group input-group-sm" id="others-prohibited-acts-div" hidden>
                        <input class="form-control rounded-0" id="others-prohibited-acts" placeholder="others">
                        <span class="input-group-append">
                            <button type="button" class="btn btn-info btn-flat" id="Add-Prohibited-Acts">Add</button>
                        </span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label" style="font-size:large">Fine:</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <!-- <i class="fas fa-dollar-sign"></i> -->
                                    PhP
                                </span>
                            </div>
                            <input type="text" class="form-control rounded-0" id="fine-violation">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-flat btn-block" id="add-act">Save</button>
        </div>
    </div>

    <div class="col-8"></div>
    <!-- <div class="col-4">
        <div class="form-group">
            <button class="btn btn-primary btn-flat btn-block" id="add-act">Save</button>
        </div>
    </div> -->

</div>


<div class="form-group">
    <table class="table table-bordered" id="acts-consituting-violation-table">
        <thead>
            <th style="width: 20%;">Actions</th>
            <th style="width: 20%;">Finding/s</th>
            <th style="width: 30%;">Finding/s Details</th>
            <th style="width: 20%;">Prohibited Act/s</th>
            <th style="width: 10%;">Fine</th>
        </thead>
        <tbody id="acts-consituting-violation-table-body">

        </tbody>
    </table>
</div>

<!-- <div class="modal fade" id="modal-default">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Act</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Prohibited Act:</label>
                    <select class="form-control" id="prohibited-act-add">
                        <option>---</option>
                        <option>RA 6969</option>
                        <option>RA 8749</option>
                        <option>RA 9003</option>
                        <option>RA 9275</option>
                        <option>Other relevant policies, rules and regulations such as stated in Annex B</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Findings:</label>
                    <div class="row">
                        <div class="col-md-10">
                            <input type="text" id="inputName" class="form-control" placeholder="Add Findings" id="findings-add">
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary btn-block" id="add-act"> + Add</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Proceed</button>
            </div>
        </div>
    </div>
</div> -->
<script src="../../AdminLTE-3.2.0/plugins/summernote/summernote-bs4.min.js"></script>
<!-- Select2 -->
<script src="../../AdminLTE-3.2.0/plugins/select2/js/select2.full.min.js"></script>
<script>
    $('.select2').select2();

    $("#prohibited-act-add").on('change', function () {
        // alert($(this).val());
        if ($(this).val() == 'Add Other') {
            $("#others-prohibited-acts-div").removeAttr('hidden');
        } else {
            $("#others-prohibited-acts-div").attr('hidden', 'hidden');
        }
    });

    $(function () {


        $.ajax({
            url: "{{route('getProhibitedActs')}}",
            type: 'POST',
            data: {
                _token: '{{csrf_token()}}',
            },
            success: function (response) {
                
                $.each(response, function (index, value) {
                    $("#prohibited-act-add").append(`<option value="` + value['prohibited_acts'] + `">` + value['prohibited_acts'] + `</option>`);
                });
            }

        });

        // $('#compose-textarea-findings').summernote()
        // $('#compose-textarea-prohibited-acts').summernote()

        $("#Add-Prohibited-Acts").on('click', function () {
            var OthersProhibitedActs = $("#others-prohibited-acts").val();


            $.ajax({
                url: "{{route('addProhibitedActs')}}",
                type: 'POST',
                data: {
                    OthersProhibitedActs: OthersProhibitedActs,
                    _token: '{{csrf_token()}}',
                },
                success: function (response) {

                    if (response = 'Successfully added') {
                        $("#prohibited-act-add").append(`<option value="` + OthersProhibitedActs + `">` + OthersProhibitedActs + `</option>`);
                        alert(response);
                    } else {
                        alert(response);
                    }

                }

            });


        })

        $("#add-act").on('click', function () {
            var ProhibitedAct = $("#prohibited-act-add").val();
            var Findings = $("#findings-add").val();
            var FineViolation = $("#fine-violation").val();

            var ComposeTextareaFindings = document.getElementById('compose-textarea-findings').value;

            if (ProhibitedAct == 'Add Other') {
                ProhibitedAct = $("#others-prohibited-acts").val();
            }

            var tr = `<tr>
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-info btn-flat acts-consituting-violation-edit-btn" id="acts-consituting-violation-edit-btn" >Edit</button>
                            <button class="btn btn-danger btn-flat acts-consituting-violation-delete-btn" id="acts-consituting-violation-delete-btn" >Delete</button>
                        </div>
                    </td>
                    <td>`+ Findings + `</td>
                    <td style='white-space:pre'>`+ ComposeTextareaFindings + `</td>
                    <td>`+ ProhibitedAct + `</td>
                    <td>`+ FineViolation + `</td>
                </tr>`;

            $("#acts-consituting-violation-table-body").append(tr);
            $("#prohibited-act-add").val('');
            $("#findings-add").val('');
        });

        $("#acts-consituting-violation-table").on('click', '.acts-consituting-violation-edit-btn', function () {
            var BtnID = $(this).attr('id');

            var currentRow = $(this).closest("tr");
            var TDID = currentRow.attr('id');

            currentRow.find("td:eq(1)").each(function () {
                $("#findings-add").val(this.innerHTML);
            });

            currentRow.find("td:eq(2)").each(function () {
                $("#compose-textarea-findings").val(this.innerHTML);
            });

            currentRow.find("td:eq(3)").each(function () {
                $("#prohibited-act-add").val(this.innerHTML);

                if (this.innerHTML != 'Other relevant policies, rules and regulations such as stated in Annex B') {

                    $("#others-prohibited-acts").attr('hidden', 'hidden');
                } else {
                    $("#others-prohibited-acts").removeAttr('hidden');
                }
            });

            currentRow.find("td:eq(4)").each(function () {
                $("#fine-violation").val(this.innerHTML);
            });



            currentRow.remove();
        });

        $("#acts-consituting-violation-table").on('click', '.acts-consituting-violation-delete-btn', function () {
            var BtnID = $(this).attr('id');

            var currentRow = $(this).closest("tr");
            var TDID = currentRow.attr('id');

            currentRow.remove();
        });
    });

</script>