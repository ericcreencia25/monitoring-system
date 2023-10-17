<tr id="1">
    <td >Priority Chemicals List</td>
    <td class="td">Valid PCL Compliance Certificate
    </td>
    <td class="td2"></td>
    <td class="td3"></td>
    <td style="text-align: center;">
        <button class="btn btn-primary ra6969-add-status" id="ra6969-add-status" title="Add Compliance Status">
            <i class="fas fa-plus"></i>
        </button>
    </td>
</tr>
<tr id="2">
    <td >Priority Chemicals List</td>
    <td class="td">Annual Reporting
    </td>
    <td class="td2"></td>
    <td class="td3"></td>
    <td style="text-align: center;">
        <button class="btn btn-primary ra6969-add-status" id="ra6969-add-status" title="Add Compliance Status">
            <i class="fas fa-plus"></i>
        </button>
    </td>
</tr>

<!-- --->
<tr id="3">
    <td class="parents-td">Chemical Control Orders</td>
    <td class="td">Biennial Report for those chemicals that are for issuance of CCO
    </td>
    <td class="td2"></td>
    <td class="td3"></td>
    <td style="text-align: center;">
        <button class="btn btn-primary ra6969-add-status" id="ra6969-add-status" title="Add Compliance Status">
            <i class="fas fa-plus"></i>
        </button>
    </td>
</tr>
<tr id="4">
    <td class="parents-td">Chemical Control Orders</td>
    <td class="td">CCO Registration
    </td>
    <td class="td2"></td>
    <td class="td3"></td>
    <td style="text-align: center;">
        <button class="btn btn-primary ra6969-add-status" id="ra6969-add-status" title="Add Compliance Status">
            <i class="fas fa-plus"></i>
        </button>
    </td>
</tr>

<!-- --->
<tr id="5">
    <td class="parents-td">Importation</td>
    <td class="td">Valid Small Quality Importation Clearance
    </td>
    <td class="td2"></td>
    <td class="td3"></td>
    <td style="text-align: center;">
        <button class="btn btn-primary ra6969-add-status" id="ra6969-add-status" title="Add Compliance Status">
            <i class="fas fa-plus"></i>
        </button>
    </td>
</tr>

<!-- --->
<tr id="6">
    <td class="parents-td">Hazardous Waste Generator
    </td>
    <td class="td">Registration as Hazardous Waste Generator
    </td>
    <td class="td2"></td>
    <td class="td3"></td>
    <td style="text-align: center;">
        <button class="btn btn-primary ra6969-add-status" id="ra6969-add-status" title="Add Compliance Status">
            <i class="fas fa-plus"></i>
        </button>
    </td>
</tr>
<tr id="7">
    <td class="parents-td">Hazardous Waste Generator
    </td>
    <td class="td">Reporting of Hazardous Waste Generated
    </td>
    <td class="td2"></td>
    <td class="td3"></td>
    <td style="text-align: center;">
        <button class="btn btn-primary ra6969-add-status" id="ra6969-add-status" title="Add Compliance Status">
            <i class="fas fa-plus"></i>
        </button>
    </td>
</tr>

<!-- --->
<tr id="8">
    <td class="parents-td">Hazardous Waste Storage and Labeling
    </td>
    <td class="td">Classification of Hazardous Waste
    </td>
    <td class="td2"></td>
    <td class="td3"></td>
    <td style="text-align: center;">
        <button class="btn btn-primary ra6969-add-status" id="ra6969-add-status" title="Add Compliance Status">
            <i class="fas fa-plus"></i>
        </button>
    </td>
</tr>
<tr id="9">
    <td class="parents-td">Hazardous Waste Storage and Labeling
    </td>
    <td class="td">Hazardous waste storage and labeling
    </td>
    <td class="td2"></td>
    <td class="td3"></td>
    <td style="text-align: center;">
        <button class="btn btn-primary ra6969-add-status" id="ra6969-add-status" title="Add Compliance Status">
            <i class="fas fa-plus"></i>
        </button>
    </td>
</tr>

<!-- --->
<tr id="10">
    <td class="parents-td">Waste Transporter; Waste Transport Record; Waste Treatment and Disposal Premises
    </td>
    <td class="td">Valid registration of transporters and treaters
    </td>
    <td class="td2"></td>
    <td class="td3"></td>
    <td style="text-align: center;">
        <button class="btn btn-primary ra6969-add-status" id="ra6969-add-status" title="Add Compliance Status">
            <i class="fas fa-plus"></i>
        </button>
    </td>
</tr>
<tr id="11">
    <td class="parents-td">Waste Transporter; Waste Transport Record; Waste Treatment and Disposal Premises
    </td>
    <td class="td">Compliance with Manifest System (Waste Transport Record)
    </td>
    <td class="td2"></td>
    <td class="td3"></td>
    <td style="text-align: center;">
        <button class="btn btn-primary ra6969-add-status" id="ra6969-add-status" title="Add Compliance Status">
            <i class="fas fa-plus"></i>
        </button>
    </td>
</tr>
<tr id="12">
    <td class="parents-td">Waste Transporter; Waste Transport Record; Waste Treatment and Disposal Premises
    </td>
    <td class="td">Valid/completed certificate of treatment
    </td>
    <td class="td2"></td>
    <td class="td3"></td>
    <td style="text-align: center;">
        <button class="btn btn-primary ra6969-add-status" id="ra6969-add-status" title="Add Compliance Status">
            <i class="fas fa-plus"></i>
        </button>
    </td>
</tr>

<script src="../../AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<script>
    $(function () {

        //assumption: the column that you wish to rowspan is sorted.

        //this is where you put in your settings
        var indexOfColumnToRowSpan = 0;
        var $table = $('#RA-6969-table');


        //this is the code to do spanning, should work for any table
        var rowSpanMap = {};
        $table.find('tr').each(function () {
            var valueOfTheSpannableCell = $($(this).children('td')[indexOfColumnToRowSpan]).text();
            $($(this).children('td')[indexOfColumnToRowSpan]).attr('data-original-value', valueOfTheSpannableCell);
            rowSpanMap[valueOfTheSpannableCell] = true;
        });

        for (var rowGroup in rowSpanMap) {
            var $cellsToSpan = $('td[data-original-value="' + rowGroup + '"]');
            var numberOfRowsToSpan = $cellsToSpan.length;
            $cellsToSpan.each(function (index) {
                if (index == 0) {
                    $(this).attr('rowspan', numberOfRowsToSpan);
                } else {
                    $(this).hide();
                }
            });
        }

    });
</script>