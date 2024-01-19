<div class="card"> <div class="card-header"> DENR Permits/Licenses/Clearance: <div class="card-tools"> <button
    type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add-dlc"> <i class="fas fa-plus"></i>
    </button>
    </div>
</div>
<div class="card-body"> <div> <table class="table table-bordered">
    <thead style="background-color: dimgray;">
    <tr>
    <th>Environmental Law</th>
    <th colspan="2" style="text-align: center">Permits</th>
    <th>Date of issue</th>
    <th>Expiry Date</th>
    </tr>
    </thead>
    <tbody id="denr-dlc">
    </tbody>
    </table>
</div>
</div>
</div>

<div class="card">

    <div class="card-header">
        Summary of Compliance:
    </div>
    <div class="card-body">
        <div class="form-group">
            <table class="table table-bordered table-hover">
                <thead style="background-color: dimgray;">
                    <tr>
                        <th>Law and Citation</th>
                        <!-- <th>Row Count</th> -->
                    </tr>
                </thead>
                <tbody>
                    <tr data-widget="expandable-table" aria-expanded="false"
                        style="background-color:rgb(173, 173, 173);" id="ECC-Conditionalities-tr">
                        <td><i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                            Environmental Compliance Certificate (ECC) Conditionalities</td>
                        <!-- <td>20/20</td> -->
                    </tr>
                    <tr class="expandable-body">
                        <td colspan="3">
                            <div class="form-group">
                                <table class="table table-bordered table-hover" id="ECC-Conditionalities">
                                    <thead style="background-color:rgb(128, 128, 128); width: 100%;">
                                        <tr>
                                            <th>Applicable Law and Citations</th>
                                            <th>Compliance Requirements</th>
                                            <th>Complied</th>
                                            <th>Remarks</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @include('user.report.inspection.law-and-citation.ecc')
                                    </tbody>
                                </table>
                            </div>
                        </td>
                    </tr>
                    <tr data-widget="expandable-table" aria-expanded="false"
                        style="background-color:rgb(173, 173, 173);" id="RA-6969-table-tr">
                        <td><i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                            RA 6969 Toxic Substances and Hazardous and Nuclear Wastes Control Act </td>
                        <!-- <td>0/12</td> -->
                    </tr>
                    <tr class="expandable-body">
                        <td colspan="3">

                            <div class="form-group">
                                <table class="table table-bordered table-hover" id="RA-6969-table">
                                    <thead style="background-color:rgb(128, 128, 128); width: 100%;">
                                        <tr>
                                            <th>Applicable Law and Citations</th>
                                            <th>Compliance Requirements</th>
                                            <th>Complied</th>
                                            <th>Remarks</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @include('user.report.inspection.law-and-citation.ra6969')
                                    </tbody>
                                </table>
                            </div>

                        </td>
                    </tr>
                    <tr data-widget="expandable-table" aria-expanded="false"
                        style="background-color:rgb(173, 173, 173);" id="RA-8749-table-tr">
                        <td><i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                            RA 8749 - Clean Air Act </td>
                        <!-- <td>0/3</td> -->
                    </tr>
                    <tr class="expandable-body">
                        <td colspan="3">

                            <div class="form-group">
                                <table class="table table-bordered table-hover" id="RA-8749-table">
                                    <thead style="background-color:rgb(128, 128, 128); width: 100%;">
                                        <tr>
                                            <th>Applicable Law and Citations</th>
                                            <th>Compliance Requirements</th>
                                            <th>Complied</th>
                                            <th>Remarks</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @include('user.report.inspection.law-and-citation.ra8749')
                                    </tbody>
                                </table>
                            </div>

                        </td>
                    </tr>
                    <tr data-widget="expandable-table" aria-expanded="false"
                        style="background-color:rgb(173, 173, 173);" id="RA-9003-table-tr">
                        <td><i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                            RA 9003 – Ecological Solid Waste Management Act </td>
                        <!-- <td>0/2</td> -->
                    </tr>
                    <tr class="expandable-body">
                        <td colspan="3">

                            <div class="form-group">
                                <table class="table table-bordered table-hover" id="RA-9003-table">
                                    <thead style="background-color:rgb(128, 128, 128); width: 100%;">
                                        <tr>
                                            <th>Applicable Law and Citations</th>
                                            <th>Compliance Requirements</th>
                                            <th>Complied</th>
                                            <th>Remarks</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @include('user.report.inspection.law-and-citation.ra9003')
                                    </tbody>
                                </table>
                            </div>

                        </td>
                    </tr>
                    <tr data-widget="expandable-table" aria-expanded="false"
                        style="background-color:rgb(173, 173, 173);" id="RA-9275-table-tr">
                        <td><i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                            RA 9275 – Clean Water Act </td>
                        <!-- <td>0/4</td> -->
                    </tr>
                    <tr class="expandable-body">
                        <td colspan="3">

                            <div class="form-group">
                                <table class="table table-bordered table-hover" id="RA-9275-table">
                                    <thead style="background-color:rgb(128, 128, 128); width: 100%;">
                                        <tr>
                                            <th>Applicable Law and Citations</th>
                                            <th>Compliance Requirements</th>
                                            <th>Complied</th>
                                            <th>Remarks</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @include('user.report.inspection.law-and-citation.ra9275')
                                    </tbody>
                                </table>
                            </div>

                        </td>
                    </tr>

                    <tr data-widget="expandable-table" aria-expanded="false"
                        style="background-color:rgb(173, 173, 173);" id="PCOA-table-tr">
                        <td><i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                            Pollution Control Officer Accreditation </td>
                        <!-- <td>0/4</td> -->
                    </tr>
                    <tr class="expandable-body">
                        <td colspan="3">

                            <div class="form-group">
                                <table class="table table-bordered table-hover" id="PCOA-table">
                                    <thead style="background-color:rgb(128, 128, 128); width: 100%;">
                                        <tr>
                                            <th>Applicable Law and Citations</th>
                                            <th>Compliance Requirements</th>
                                            <th>Complied</th>
                                            <th>Remarks</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @include('user.report.inspection.law-and-citation.pcoa')
                                    </tbody>
                                </table>
                            </div>

                        </td>
                    </tr>

                    <tr data-widget="expandable-table" aria-expanded="false"
                        style="background-color:rgb(173, 173, 173);" id="SMR-table-tr">
                        <td><i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                            Self-Monitoring Report</td>
                        <!-- <td>0/1</td> -->
                    </tr>
                    <tr class="expandable-body">
                        <td colspan="3">

                            <div class="form-group">
                                <table class="table table-bordered table-hover" id="SMR-table">
                                    <thead style="background-color:rgb(128, 128, 128); width: 100%;">
                                        <tr>
                                            <th>Applicable Law and Citations</th>
                                            <th>Compliance Requirements</th>
                                            <th>Complied</th>
                                            <th>Remarks</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @include('user.report.inspection.law-and-citation.smr')
                                    </tbody>
                                </table>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

<div class="card">

    <div class="card-header">
        Summary of Findings and Observations:
    </div>
    <div class="card-body">
        <div class="form-group" id="EISS-input">
            <div class="row">
                <div class="col-md-11">
                    <label for="inputClientCompany" style="margin-bottom: 0px;">Environmental Impact Statement
                        System</label>
                    <!-- <input type="text" class="form-control form-control-border border-width-2" id="environmental-impact-statement-system" placeholder="" readonly> -->
                    <textarea style="background-color: white" class="form-control rounded-0"
                        id="environmental-impact-statement-system" readonly></textarea>
                </div>
                <div class="col-md-1">
                    <button class="btn btn-primary"
                        onclick="SummaryFindingsAndObservation('Environmental Impact Statement System', 'environmental-impact-statement-system')"><i
                            class="fas fa-plus"></i></button>
                </div>
            </div>
        </div>
        <div class="form-group" id="CM-input">
            <div class="row">
                <div class="col-md-11">
                    <label for="inputClientCompany" style="margin-bottom: 0px;">Chemicals Management</label>
                    <!-- <input type="text" class="form-control form-control-border border-width-2" id="chemicals-management"
                        placeholder="" readonly> -->
                    <textarea style="background-color: white" class="form-control rounded-0" id="chemicals-management"
                        readonly></textarea>
                </div>
                <div class="col-md-1">
                    <button class="btn btn-primary"
                        onclick="SummaryFindingsAndObservation('Chemicals Management', 'chemicals-management')"><i
                            class="fas fa-plus"></i></button>
                </div>
            </div>
        </div>
        <div class="form-group" id="HWM-input">
            <div class="row">
                <div class="col-md-11">
                    <label for="inputClientCompany" style="margin-bottom: 0px;">Hazardous Waste Management</label>
                    <!-- <input type="text" class="form-control form-control-border border-width-2"
                        id="hazard-waste-management" placeholder="" readonly> -->
                    <textarea style="background-color: white" class="form-control rounded-0" id="hazard-waste-management"
                        readonly></textarea>
                </div>
                <div class="col-md-1">
                    <button class="btn btn-primary"
                        onclick="SummaryFindingsAndObservation('Hazardous Waste Management', 'hazard-waste-management')"><i
                            class="fas fa-plus"></i></button>
                </div>
            </div>
        </div>
        <div class="form-group" id="AQM-input">
            <div class="row">
                <div class="col-md-11">
                    <label for="inputClientCompany" style="margin-bottom: 0px;">Air Quality Management</label>
                    <!-- <input type="text" class="form-control form-control-border border-width-2" id="air-quality-management" placeholder="" readonly> -->
                    <textarea style="background-color: white" class="form-control rounded-0" id="air-quality-management"
                        readonly></textarea>
                </div>
                <div class="col-md-1">
                    <button class="btn btn-primary"
                        onclick="SummaryFindingsAndObservation('Air Quality Management', 'air-quality-management')"><i
                            class="fas fa-plus"></i></button>
                </div>
            </div>
        </div>

        <!-- <div class="form-group" id="add-apse">
            <button class="btn btn-primary"> ADD APSE </button>
        </div> -->

        <div class="form-group" id="AIR-StackA-input">
            <div class="row">
                <div class="col-md-11">
                    <label style="margin-bottom: 0px;">APSE: 850 kVA Diesel Fueled Generator Set - Stack A</label>
                </div>
                <div class="col-md-1">
                    <button class="btn btn-primary"
                        onclick="SummaryDieselFueledGenSet('APSE: 850 kVA Diesel Fueled Generator Set - Stack A', 'Stack A')"><i
                            class="fa fa-edit"></i></button>
                </div>
            </div>
            <table class="table table-bordered table-hover" id="diesel-fueled-table-stack-a" style="width: 50%;">
                <thead>
                    <tr>
                        <th></th>
                        <th>Average</th>
                        <th>Standard</th>
                        <th>Remarks</th>
                    </tr>
                </thead>
                <tbody>
                    <tr id="1">
                        <td>Sampling Date</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr id="2">
                        <td>Nitrogen Dioxide Emissions (mg/Ncm) </td>
                        <td></td>
                        <td>2,000</td>
                        <td></td>
                    </tr>
                    <tr id="3">
                        <td>Carbon Monoxide Emissions (mg/Ncm) </td>
                        <td></td>
                        <td>500</td>
                        <td></td>
                    </tr>

                </tbody>
            </table>
        </div>

        <div class="form-group" id="AIR-StackB-input">
            <div class="row">
                <div class="col-md-11">
                    <label style="margin-bottom: 0px;">APSE: 850 kVA Diesel Fueled Generator Set - Stack B</label>
                </div>
                <div class="col-md-1">
                    <button class="btn btn-primary"
                        onclick="SummaryDieselFueledGenSet('APSE: 850 kVA Diesel Fueled Generator Set - Stack B', 'Stack B')"><i
                            class="fa fa-edit"></i></button>
                </div>
            </div>
            <table class="table table-bordered table-hover" id="diesel-fueled-table-stack-b" style="width: 50%;">
                <thead>
                    <tr>
                        <th></th>
                        <th>Average</th>
                        <th>Standard</th>
                        <th>Remarks</th>
                    </tr>
                </thead>
                <tbody>
                    <tr id="1">
                        <td>Sampling Date</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr id="2">
                        <td>Nitrogen Dioxide Emissions (mg/Ncm) </td>
                        <td></td>
                        <td>2,000</td>
                        <td></td>
                    </tr>
                    <tr id="3">
                        <td>Carbon Monoxide Emissions (mg/Ncm) </td>
                        <td></td>
                        <td>500</td>
                        <td></td>
                    </tr>

                </tbody>
            </table>
        </div>

        <div class="form-group" id="SWM-input">
            <div class="row">
                <div class="col-md-11">
                    <label style="margin-bottom: 0px;">Solid Waste Management</label>
                    <textarea style="background-color: white" class="form-control rounded-0" id="solid-waste-management"
                        readonly></textarea>

                </div>
                <div class="col-md-1">
                    <button class="btn btn-primary"
                        onclick="SummaryFindingsAndObservation('Solid Waste Management', 'solid-waste-management')"><i
                            class="fas fa-plus"></i></button>
                </div>
            </div>
        </div>

        <div class="form-group" id="WQM-input">
            <div class="row">
                <div class="col-md-11">
                    <label style="margin-bottom: 0px;">Water Quality Management</label>
                    <textarea style="background-color: white" class="form-control rounded-0" id="water-quality-management"
                        readonly></textarea>
                </div>
                <div class="col-md-1">
                    <button class="btn btn-primary"
                        onclick="SummaryFindingsAndObservation('Water Quality Management', 'water-quality-management')"><i
                            class="fas fa-plus"></i></button>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-md-11">
                    <label style="margin-bottom: 0px;">Commitment to (Insert voluntary commitment/consent
                        agreement)</label>
                    <textarea style="background-color: white" class="form-control rounded-0" id="commitment-to"
                        readonly></textarea>
                </div>
                <div class="col-md-1">
                    <button class="btn btn-primary"
                        onclick="SummaryFindingsAndObservation('Commitment to', 'commitment-to')"><i
                            class="fas fa-plus"></i></button>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-md-11">
                    <label style="margin-bottom: 0px;">Pictures</label>
                    <div class="form-group">
                        <div class="row" id="uploaded-pictures">
                            <!-- <div class="col-md-12" id="uploaded-pictures"></div> -->

                                <!-- <div class="col-md-6">
                                        <img src="../../Files/Compliance/EMBNCR-1043610-189683/49/dd8f42c9-3a97-4fbd-b537-03a31fcdea2a.jfif.jfif" alt="Italian Trulli" style="width: 100%; height: auto;">
                                </div>
                                <div class="col-md-6">
                                    <textarea class="form-control" disabled>dsadas</textarea>
                                    <button class="btn btn-danger" title="delete"><i class="fa-solid fa-trash"></i></button>
                                </div> -->
                                
                        </div>
                    </div>
                </div>

                <div class="col-md-1">
                    <button class="btn btn-primary" onclick="SummaryFindingsAndObservation('Pictures', 'pictures')"><i
                            class="fas fa-plus"></i></button>
                </div>

            </div>
        </div>


    </div>
</div>


<div class="modal fade" id="modal-add-dlc">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">DENR PERMITS/LICENSES/CLEARANCE FIELDS</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card card-primary">
                    <div class="card-header">
                        Add Permit / Licenses / Clearance Needed
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <button class="btn btn-success" id="add-dlc">Add</button>
                                    <button class="btn btn-danger" id="reset-dlc">Reset</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Environmental Law</label>
                                    <select class="form-control rounded-0" id="environmental-law-add">
                                        <option value="">---</option>
                                        <option value="PD 1586">PD 1586</option>
                                        <option value="RA 6969">RA 6969</option>
                                        <option value="RA 8749">RA 8749</option>
                                        <option value="RA 9003">RA 9003</option>
                                        <option value="RA 9275">RA 9275</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label>Entity</label>
                                    <select class="form-control rounded-0" id="entity-add">
                                        <option>---</option>
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <label>Issued</label>
                                    <div class="icheck-primary">
                                        <input type="checkbox" id="issued-add">
                                        <label for="issued-add">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label>Date of Issue</label>
                                    <div class="input-group date" id="setdateofissue" data-target-input="nearest">
                                        <input type="text" class="form-control rounded-0 datetimepicker-input"
                                            data-target="#setdateofissue" id="date-of-issue-add"
                                            placeholder="Enter Date" disabled />
                                        <div class="input-group-append" data-target="#setdateofissue"
                                            data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label>Expiry Date</label>
                                    <div class="input-group date" id="expirydate" data-target-input="nearest">
                                        <input type="text" class="form-control rounded-0 datetimepicker-input"
                                            data-target="#expirydate" id="expiry-date-add" placeholder="Enter Date"
                                            disabled />
                                        <div class="input-group-append" data-target="#expirydate"
                                            data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <table class="table table-bordered" id="dlc-table">
                                <thead>
                                    <th>Environmental Law</th>
                                    <th colspan="2" style="text-align: center">Permits</th>
                                    <th>Date of issue</th>
                                    <th>Expiry Date</th>
                                    <th>Action</th>
                                </thead>
                                <tbody id="dlc-table-tbody"></tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="dlc-table-add-proceed">Proceed</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-add-ecc-conditionalities">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Compliance Status
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card card-primary">
                    <div class="card-header" id="card-header">
                    </div>
                    <div class="card-body" id="card-body">
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Complied</label>
                                    <select class="form-control rounded-0" id="complied-add">
                                        <option value="">---</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                        <option value="N/A">N/A</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Remarks</label>
                                    <input class="form-control rounded-0" placeholder="Remarks" id="remarks-add" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary"
                        id="ecc-conditionalities-table-proceed">Proceed</button>
                    <input id="law-and-citation-table-proceed" hidden />
                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>

<div class="modal fade" id="modal-summary-findings-and-observations">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Findings and Observations
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card card-primary">
                    <div class="card-header" id="sfo-card-header">
                    </div>
                    <div class="card-body">
                        <input id="input-id" hidden>
                        <textarea class="form-control rounded-0" id="findings-observation-input"></textarea>
                    </div>
                </div>

                <!-- <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            ADD IMAGES
                        </div>
                    </div>
                </div> -->

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary"
                        id="findings-and-observations-proceed">Proceed</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-upload-pictures">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Findings and Observations
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input type="file" class="form-control" id="files" onchange="validateFileType()">
                </div>
                <input id="input-id-pictures" hidden>
                <textarea class="form-control rounded-0" id="findings-observation-input-pictures"></textarea>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" id="submit-upload">Upload</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-diesel-fueled-set">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Findings and Observations
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <input id="stack-type-add" hidden>
            </div>
            <div class="modal-body">
                <div class="card card-primary">
                    <div class="card-header" id="dfs-card-header">
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Date of Issue:</label>
                                <div class="input-group date" id="setdate" data-target-input="nearest">
                                    <input type="text" class="form-control rounded-0 datetimepicker-input" data-target="#setdate"
                                        id="diesel-fueled-date-of-issue-add" placeholder="Enter Date" />
                                    <div class="input-group-append" data-target="#setdate" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <label>Pollutant Degree:</label>
                                <select class="form-control rounded-0" id="polutan-degree-add">
                                    <option value="">---</option>
                                    <option value="row2">Nitrogen Dioxide Emissions (mg/Ncm)</option>
                                    <option value="row3">Carbon Monoxide Emissions (mg/Ncm)</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label>Average</label>
                                <input class="form-control rounded-0" type="number" id="average-add" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8"></div>
                            <div class="col-md-4">
                                <button class="btn btn-success diesel-fueled-set-add"
                                    id="diesel-fueled-set-add">Add</button>
                                <button class="btn btn-danger diesel-fueled-set-reset"
                                    id="diesel-fueled-set-reset">Reset</button>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <table class="table table-bordered" id="diesel-fueled-table-add">
                                <thead>
                                    <tr>
                                        <th style="width: 40%;"></th>
                                        <th style="width: 20%;">Average</th>
                                        <th style="width: 20%;">Standard</th>
                                        <th style="width: 20%;">Remarks</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="row1">
                                        <td class="td-sampling-date-add">Sampling Date </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="row2">
                                        <td>Nitrogen Dioxide Emissions (mg/Ncm) </td>
                                        <td></td>
                                        <td>2,000</td>
                                        <td></td>
                                    </tr>
                                    <tr class="row3">
                                        <td>Carbon Monoxide Emissions (mg/Ncm)</td>
                                        <td></td>
                                        <td>500</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="diesel-fueled-set-proceed">Proceed</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="proress_bar">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-group">
                        Saving . . .
                        <div class="progress">
                            <div class="progress-bar"></div>
                        </div>
                        <div id="uploadStatus"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    $(function () {

        var rf = sessionStorage.getItem("report-for");
        const array1 = JSON.parse(rf);

        const AIR = array1.find(element => element == 'AIR');
        const HAZWASTE = array1.find(element => element == 'HAZWASTE');
        const WATER = array1.find(element => element == 'WATER');
        const CHEMICALS = array1.find(element => element == 'CHEMICALS');
        const EIA = array1.find(element => element == 'EIA');
        const SOLIDWASTE = array1.find(element => element == 'SOLID WASTE');


        if (!AIR) {
            $("#RA-8749-table-tr").attr('hidden', 'hidden');
            $("#AQM-input").attr('hidden', 'hidden');
            $("#AIR-StackA-input").attr('hidden', 'hidden');
            $("#AIR-StackB-input").attr('hidden', 'hidden');
        }

        if (!SOLIDWASTE) {
            $("#RA-9003-table-tr").attr('hidden', 'hidden');
            $("#SWM-input").attr('hidden', 'hidden');
        }

        if (!HAZWASTE) {
            $("#RA-6969-table-tr").attr('hidden', 'hidden');
            $("#HWM-input").attr('hidden', 'hidden');
        }

        if (!WATER) {
            $("#RA-9275-table-tr").attr('hidden', 'hidden');
            $("#WQM-input").attr('hidden', 'hidden');
        }

        if (!CHEMICALS) {
            // $("#RA-6969-table-tr").attr('hidden', 'hidden');
            $("#CM-input").attr('hidden', 'hidden');
        }

        if (!EIA) {
            $("#ECC-Conditionalities-tr").attr('hidden', 'hidden');
            $("#EISS-input").attr('hidden', 'hidden');
        }


        $('#setdateofissue').datetimepicker({
            format: 'DD/MM/YYYY',
        });

        $('#expirydate').datetimepicker({
            format: 'DD/MM/YYYY',
        });

        $('#setdate').datetimepicker({
            format: 'DD/MM/YYYY',

        });

        var emb_id = sessionStorage.getItem("emb-id");
        var idParameter = getUrlParameters("id", "", true);

        $.ajax({
            url: "{{route('/get/file')}}",
            type: 'POST',
            data: {
                emb_id : emb_id,
                id: idParameter,
                _token: '{{csrf_token()}}',
            },
            success: function (response) {

                $.each(response, function (index, value) {

                    $("#uploaded-pictures").append(
                        `<div class="col-md-6">
                                        <img src="../../`+value['file_path']+`" alt="Italian Trulli" style="width: 100%; height: auto;">
                                </div>
                                <div class="col-md-6">
                                    <textarea class="form-control" disabled>`+value['remarks']+`</textarea>
                                    <button class="btn btn-danger" title="delete"><i class="fa-solid fa-trash"></i></button>
                                </div>`);

                    
                });
            },
        });


        $("#submit-upload").on('click', function () {
              // Get the selected file
              var files = $("#files")[0].files;
              var emb_id = sessionStorage.getItem("emb-id");
              var idParameter = getUrlParameters("id", "", true);
              var remarks = $("#findings-observation-input-pictures").val();

              var fd = new FormData();
              fd.append('id', idParameter);
              fd.append('emb_id', emb_id);
              fd.append('file', files[0]);
              fd.append('remarks', remarks);
              fd.append('_token', '{{csrf_token()}}');

              $.ajax({
                xhr: function () {
                  var xhr = new window.XMLHttpRequest();
                  xhr.upload.addEventListener("progress", function (evt) {
                    if (evt.lengthComputable) {
                      var percentComplete = ((evt.loaded / evt.total) * 100);
                      $(".progress-bar").width(percentComplete + '%');
                      $(".progress-bar").html(percentComplete + '%');
                    }
                  }, false);
                  return xhr;
                },
                url: "{{route('/upload/file')}}",
                method: 'post',
                data: fd,
                contentType: false,
                processData: false,
                dataType: 'json',
                beforeSend: function () {
                  $(".progress-bar").width('0%');
                  $('#uploadStatus').html('<img src="images/loading.gif"/>');
                },
                error: function () {
                  $('#uploadStatus').html('<p style="color:#EA4335;">File upload failed, please try again.</p>');
                },
                success: function (response) {
                  console.log(response);
                  if (response['success'] == 1) {
                    alert(response['message']);
                    location.reload();
                  } else {
                    alert(response['message']);
                  }
                },
              });

            });

        $("#issued-add").on('change', function () {
            var checkbox1 = $(this).prop('checked');
            if (checkbox1) {
                $("#date-of-issue-add").removeAttr('disabled');
                $("#expiry-date-add").removeAttr('disabled');
            } else {
                $("#date-of-issue-add").attr('disabled', 'disabled');
                $("#expiry-date-add").attr('disabled', 'disabled');
            }
        });


        $("#environmental-law-add").on('change', function () {

            if ($(this).val() == 'PD 1586') {

                $details = '<option>ECC1</option>';
                $details += '<option>ECC2</option>';
                $details += '<option>ECC3</option>';
                $("#entity-add").html($details);

            } else if ($(this).val() == 'RA 6969') {

                $details = '<option>DENR Registry ID</option>';
                $details += '<option>SQI Clearance</option>';
                $details += '<option>CCO Registry</option>';
                $details += '<option>PCL Compliance Certificate</option>';
                $details += '<option>Importer Clearance No.</option>';
                $details += '<option>Permit to Transport</option>';
                $details += '<option>Copy of COT issued by licensed TSD Facility</option>';
                $("#entity-add").html($details);

            } else if ($(this).val() == 'RA 8749') {

                $details = '<option>POA No.</option>';
                $("#entity-add").html($details);

            } else if ($(this).val() == 'RA 9003') {

                $details = '<option>With MOA/Agreement for residuals disposed off to a SLF w/ ECC</option>';
                $("#entity-add").html($details);

            } else if ($(this).val() == 'RA 9275') {

                $details = '<option>Discharge Permit No.</option>';
                $("#entity-add").html($details);

            } else {

                $details = '<option value="">---</option>';
                $("#entity-add").html($details);

            }

        });

        $("#add-dlc").on('click', function () {

            var environmentalLawAdd = $("#environmental-law-add :selected").val();
            var entityAdd = $("#entity-add :selected").val();
            var issuedAdd = $("#issued-add").prop('checked');
            var dateOfIssuedAdd = $("#date-of-issue-add").val();
            var expiryDateAdd = $("#expiry-date-add").val();

            if (issuedAdd) {
                var issued = 'Issued';
                var dateofIssued = dateOfIssuedAdd;
                var expiryDate = expiryDateAdd;
            } else {
                var issued = 'N/A';
                var dateofIssued = 'N/A';
                var expiryDate = 'N/A';
            }

            var details = `
                    <tr>
                        <td>`+ environmentalLawAdd + `</td>
                        <td>`+ entityAdd + `</td>
                        <td>`+ issued + `</td>
                        <td>`+ dateofIssued + `</td>
                        <td>`+ expiryDate + `</td>
                        <td><button class="btn btn-danger dlc-table-delete-btn" id="dlc-table-delete-btn">Delete</button></td>
                    </tr>`;

            $("#dlc-table-tbody").append(details);


        });


        $("#dlc-table").on('click', '.dlc-table-delete-btn', function () {
            var currentRow = $(this).closest("tr");
            var TDID = currentRow.attr('id');

            currentRow.remove();

        });

        $("#dlc-table-add-proceed").on('click', function () {
            var tableBody = $("#dlc-table-tbody").html();
            var details = ``;

            $("#dlc-table-tbody").find('tr').each(function () {
                var td0;
                var td1;
                var td2;
                var td3;
                var td4;

                $(this).find("td:eq(0)").each(function () {
                    td0 = this.innerHTML;
                });

                $(this).find("td:eq(1)").each(function () {
                    td1 = this.innerHTML;
                });


                $(this).find("td:eq(2)").each(function () {
                    td2 = this.innerHTML;
                });

                $(this).find("td:eq(3)").each(function () {
                    td3 = this.innerHTML;
                });

                $(this).find("td:eq(4)").each(function () {
                    td4 = this.innerHTML;
                });

                details += `
                    <tr>
                        <td>`+ td0 + `</td>
                        <td>`+ td1 + `</td>
                        <td>`+ td2 + `</td>
                        <td>`+ td3 + `</td>
                        <td>`+ td4 + `</td>
                    </tr>`;


            });


            $("#denr-dlc").html(details);
            // $("#denr-dlc").html(tableBody);

            $("#modal-add-dlc").modal('hide');
        });

        $("#denr-dlc").on('click', '.dlc-table-delete-btn', function () {
            var currentRow = $(this).closest("tr");
            var TDID = currentRow.attr('id');

            currentRow.remove();

        });

        //  Environmental Compliance Certificate (ECC) Conditionalities
        $("#ECC-Conditionalities").on('click', '.ecc-add-status', function () {
            $("#modal-add-ecc-conditionalities").modal();

            var currentRow = $(this).closest("tr");
            var TDID = currentRow.attr('id');

            currentRow.find("td:eq(0)").each(function () {
                $("#card-header").html(this.innerHTML);
            });

            currentRow.find("td:eq(1) > a").each(function () {
                $("#card-body").html(this.innerHTML);
            });


            currentRow.find("td:eq(2)").each(function () {
                console.log(this.innerHTML);
                document.getElementById("complied-add").value = this.innerHTML;
            });

            currentRow.find("td:eq(3)").each(function () {
                console.log(this.innerHTML);
                document.getElementById("remarks-add").value = this.innerHTML;
            });

            $("#ecc-conditionalities-table-proceed").attr('data-id', currentRow[0].id);
            $("#law-and-citation-table-proceed").val("ECC-Conditionalities");
        });

        $("#ecc-conditionalities-table-proceed").on('click', function () {
            var complied = $("#complied-add").val();
            var remarks = $("#remarks-add").val();
            var id = $(this).attr('data-id');
            var table = $("#law-and-citation-table-proceed").val();

            $("#" + table + " tr#" + id).find("td:eq(2)").each(function () {
                $(this).html(complied);
            });
            $("#" + table + " tr#" + id).find("td:eq(3)").each(function () {
                $(this).html(remarks);
            });

            $("#modal-add-ecc-conditionalities").modal('hide');


        });

        //  RA 6969 Toxic Substances and Hazardous and Nuclear Wastes Control Act
        $("#RA-6969-table").on('click', '.ra6969-add-status', function () {

            $("#modal-add-ecc-conditionalities").modal();
            var currentRow = $(this).closest("tr");
            var TDID = currentRow.attr('id');

            currentRow.find("td:eq(0)").each(function () {
                $("#card-header").html(this.innerHTML);
            });

            currentRow.find("td:eq(1)").each(function () {
                $("#card-body").html(this.innerHTML);
            });

            currentRow.find("td:eq(2)").each(function () {
                console.log(this.innerHTML);
                document.getElementById("complied-add").value = this.innerHTML;
            });

            currentRow.find("td:eq(3)").each(function () {
                console.log(this.innerHTML);
                document.getElementById("remarks-add").value = this.innerHTML;
            });

            $("#ecc-conditionalities-table-proceed").attr('data-id', currentRow[0].id);
            $("#law-and-citation-table-proceed").val("RA-6969-table");
        });

        // RA 8749 - Clean Air Act
        $("#RA-8749-table").on('click', '.ra8749-add-status', function () {
            var currentRow = $(this).closest("tr");
            var TDID = currentRow.attr('id');

            currentRow.find("td:eq(0)").each(function () {
                $("#card-header").html(this.innerHTML);
            });

            currentRow.find("td:eq(1)").each(function () {
                $("#card-body").html(this.innerHTML);
            });

            currentRow.find("td:eq(2)").each(function () {
                console.log(this.innerHTML);
                document.getElementById("complied-add").value = this.innerHTML;
            });

            currentRow.find("td:eq(3)").each(function () {
                console.log(this.innerHTML);
                document.getElementById("remarks-add").value = this.innerHTML;
            });

            $("#modal-add-ecc-conditionalities").modal();

            $("#ecc-conditionalities-table-proceed").attr('data-id', currentRow[0].id);
            $("#law-and-citation-table-proceed").val("RA-8749-table");
        });

        // RA 9003 – Ecological Solid Waste Management Act
        $("#RA-9003-table").on('click', '.ra9003-add-status', function () {
            var currentRow = $(this).closest("tr");
            var TDID = currentRow.attr('id');

            currentRow.find("td:eq(0)").each(function () {
                $("#card-header").html(this.innerHTML);
            });

            currentRow.find("td:eq(1)").each(function () {
                $("#card-body").html(this.innerHTML);
            });

            currentRow.find("td:eq(2)").each(function () {
                console.log(this.innerHTML);
                document.getElementById("complied-add").value = this.innerHTML;
            });

            currentRow.find("td:eq(3)").each(function () {
                console.log(this.innerHTML);
                document.getElementById("remarks-add").value = this.innerHTML;
            });

            $("#modal-add-ecc-conditionalities").modal();

            $("#ecc-conditionalities-table-proceed").attr('data-id', currentRow[0].id);
            $("#law-and-citation-table-proceed").val("RA-9003-table");
        });

        // RA 9275 – Clean Water Act
        $("#RA-9275-table").on('click', '.ra9275-add-status', function () {
            var currentRow = $(this).closest("tr");
            var TDID = currentRow.attr('id');

            currentRow.find("td:eq(0)").each(function () {
                $("#card-header").html(this.innerHTML);
            });

            currentRow.find("td:eq(1)").each(function () {
                $("#card-body").html(this.innerHTML);
            });

            currentRow.find("td:eq(2)").each(function () {
                console.log(this.innerHTML);
                document.getElementById("complied-add").value = this.innerHTML;
            });

            currentRow.find("td:eq(3)").each(function () {
                console.log(this.innerHTML);
                document.getElementById("remarks-add").value = this.innerHTML;
            });

            $("#modal-add-ecc-conditionalities").modal();

            $("#ecc-conditionalities-table-proceed").attr('data-id', currentRow[0].id);
            $("#law-and-citation-table-proceed").val("RA-9275-table");
        });

        // Pollution Control Officer Accreditation
        $("#PCOA-table").on('click', '.pcoa-add-status', function () {
            var currentRow = $(this).closest("tr");
            var TDID = currentRow.attr('id');

            currentRow.find("td:eq(0)").each(function () {
                $("#card-header").html(this.innerHTML);
            });

            currentRow.find("td:eq(1)").each(function () {
                $("#card-body").html(this.innerHTML);
            });

            currentRow.find("td:eq(2)").each(function () {
                console.log(this.innerHTML);
                document.getElementById("complied-add").value = this.innerHTML;
            });

            currentRow.find("td:eq(3)").each(function () {
                console.log(this.innerHTML);
                document.getElementById("remarks-add").value = this.innerHTML;
            });

            $("#modal-add-ecc-conditionalities").modal();

            $("#ecc-conditionalities-table-proceed").attr('data-id', currentRow[0].id);
            $("#law-and-citation-table-proceed").val("PCOA-table");
        });

        //  Self-Monitoring Report	
        $("#SMR-table").on('click', '.smr-add-status', function () {
            var currentRow = $(this).closest("tr");
            var TDID = currentRow.attr('id');

            currentRow.find("td:eq(0)").each(function () {
                $("#card-header").html(this.innerHTML);
            });

            currentRow.find("td:eq(1)").each(function () {
                $("#card-body").html(this.innerHTML);
            });

            currentRow.find("td:eq(2)").each(function () {
                console.log(this.innerHTML);
                document.getElementById("complied-add").value = this.innerHTML;
            });

            currentRow.find("td:eq(3)").each(function () {
                document.getElementById("remarks-add").value = this.innerHTML;
            });

            $("#modal-add-ecc-conditionalities").modal();

            $("#ecc-conditionalities-table-proceed").attr('data-id', currentRow[0].id);
            $("#law-and-citation-table-proceed").val("SMR-table");
        });

        $("#findings-and-observations-proceed").on("click", function () {
            var inputId = $("#input-id").val();
            var input = $("#findings-observation-input").val();


            $("#" + inputId).val(input);

            $("#modal-summary-findings-and-observations").modal('hide');
        });


        $("#diesel-fueled-set-proceed").on("click", function () {
            var stack = $("#stack-type-add").val();

            var tableBody = $("#diesel-fueled-table-add tbody").html();

            if (stack == 'Stack A') {

                $("#diesel-fueled-table-stack-a tbody").html(tableBody);

                $("#modal-diesel-fueled-set").modal('hide');

            } else {

                $("#diesel-fueled-table-stack-b tbody").html(tableBody);

                $("#modal-diesel-fueled-set").modal('hide');

            }

        });

    });

    function SummaryFindingsAndObservation(text, id) {

        if (text == 'Pictures') {

            var input = $("#" + id).val();

            $("#input-id-pictures").val(id);

            $("#findings-observation-input-pictures").val(input);

            $("#modal-upload-pictures").modal();
        } else {
            var input = $("#" + id).val();

            $("#input-id").val(id);

            $("#findings-observation-input").val(input);

            $("#sfo-card-header").text(text);
            $("#modal-summary-findings-and-observations").modal();
        }
        
    }

    function SummaryDieselFueledGenSet(text, stack) {

        $("#dfs-card-header").text(text);
        $("#modal-diesel-fueled-set").modal();

        $("#stack-type-add").val(stack);

        // APSE: 850 kVA Diesel Fueled Generator Set

        $("#diesel-fueled-set-add").on('click', function () {
            var DateOfIssue = $("#diesel-fueled-date-of-issue-add").val();
            var PolutantDegree = $("#polutan-degree-add").val();
            var Average = $("#average-add").val();


            $("#diesel-fueled-table-add tr.row1").find("td:eq(0)").each(function () {
                $(this).html('Sampling Date: ' + DateOfIssue);
            });

            $("#diesel-fueled-table-add tr." + PolutantDegree).find("td:eq(1)").each(function () {
                $(this).html(Average);
            });

            $("#diesel-fueled-table-add tr." + PolutantDegree).find("td:eq(3)").each(function () {

                if (PolutantDegree == 'row2') {

                    if (Average > 2000) {
                        Remarks = 'Within on standards';
                    } else {
                        Remarks = 'Without on standards';
                    }

                    $(this).html(Remarks);
                } else if (PolutantDegree == 'row3') {

                    if (Average > 500) {
                        Remarks = 'Within on standards';
                    } else {
                        Remarks = 'Without on standards';
                    }

                    $(this).html(Remarks);
                }
            });
        });

    }

    function validateFileType() {
            var selectedFile = document.getElementById('files').files[0];
            var allowedTypes = ['image/jpeg', 'image/png', 'application/json'];
            console.log(selectedFile);
            if (!allowedTypes.includes(selectedFile.type)) {
                alert('Invalid file type. Please upload a JPEG, PNG, or GeoJSON file.');
                document.getElementById('files').value = '';
            }
        }
</script>