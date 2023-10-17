<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Enforcement and Monitoring System</title>

</head>
<div>
    <div style="clear:both;">
        <table cellspacing="0" cellpadding="0" style="border-collapse:collapse;">
            <tbody>
                <tr>
                    <td
                        style="width:241pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                style="font-family:'Bookman Old Style';">Integrated Compliance
                                Inspection Report</span></p>
                    </td>
                    <td
                        style="width:241pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:9pt;">
                            <span style="font-family:'Bookman Old Style';">&lt;Name of
                                Establishment&gt;</span>
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:normal; font-size:1pt;">&nbsp;</p>
    </div>
    <p style="margin-top:0pt; margin-bottom:10pt; text-align:center; line-height:115%; font-size:10pt;">
        <strong><span style="font-family:'Bookman Old Style';">INTEGRATED COMPLIANCE INSPECTION
                REPORT</span></strong>
    </p>
    <h1
        style="margin-top:0pt; margin-left:36pt; margin-bottom:3pt; text-indent:-18pt; line-height:115%; font-size:10pt;">
        <span style="font-family:'Bookman Old Style';">1</span><span
            style="width:11.4pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-family:'Bookman Old Style';">GENERAL INFORMATION</span>
    </h1>
    <table cellspacing="0" cellpadding="0" style="border:0.75pt solid #000000; border-collapse:collapse;">
        <tbody>
            <tr>
                <td
                    style="width:150pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">Name of Establishment:</span>
                    </p>
                </td>
                <td colspan="2"
                    style="width:400pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><strong><span
                                style="font-family:'Bookman Old Style';">{{
                                $data['inspection_report']->establishment_name }}&nbsp;</span></strong>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width:111.6pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">Address:</span></p>
                </td>
                <td colspan="2"
                    style="width:364.95pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><strong><span
                                style="font-family:'Bookman Old Style';">{{
                                $data['inspection_report']->address}}&nbsp;</span></strong></p>
                </td>
            </tr>
            <tr>
                <td
                    style="width:111.6pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">Nature of Business:</span></p>
                </td>
                <td
                    style="width:177.05pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><strong><span
                                style="font-family:'Bookman Old Style';">{{
                                $data['inspection_report']->nature_of_business}}&nbsp;</span></strong>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width:111.6pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">PSIC Code: </span></p>
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                        <strong><span style="font-family:'Bookman Old Style';">{{
                                $data['inspection_report']->psic_code}}&nbsp;</span></strong>
                    </p>
                </td>
                <td
                    style="width:177.05pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">Product: </span></p>
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                        <strong><span style="font-family:'Bookman Old Style';">{{
                                $data['inspection_report']->product}}&nbsp;</span></strong>
                    </p>
                </td>
                <td
                    style="width:177.1pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">Year Established: </span></p>
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                        <strong><span style="font-family:'Bookman Old Style';">{{
                                $data['inspection_report']->year_established}}&nbsp;</span></strong>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width:111.6pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">Operating hours/day:</span></p>
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                        <strong><span style="font-family:'Bookman Old Style';">{{
                                $data['inspection_report']->operating_hours_per_day}}&nbsp;</span></strong>
                    </p>
                </td>
                <td
                    style="width:177.05pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">Operating days/week:</span></p>
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                        <strong><span style="font-family:'Bookman Old Style';">{{
                                $data['inspection_report']->operating_hours_per_week}}&nbsp;</span></strong>
                    </p>
                </td>
                <td
                    style="width:177.1pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">Operating days/year:</span></p>
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                        <strong><span style="font-family:'Bookman Old Style';">{{
                                $data['inspection_report']->operating_hours_per_year}}&nbsp;</span></strong>
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:3pt;">&nbsp;</p>
    <table cellspacing="0" cellpadding="0" style="border:0.75pt solid #000000; border-collapse:collapse;">
        <tbody>
            <tr>
                <td
                    style="width:168pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#bfbfbf;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                        <strong><span style="font-family:'Bookman Old Style';">Product
                                Lines</span></strong>
                    </p>
                </td>
                <td
                    style="width:168pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#bfbfbf;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                        <strong><span style="font-family:'Bookman Old Style';">Production Rate as
                                Declared in the ECC</span></strong>
                    </p>
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                        <strong><span style="font-family:'Bookman Old Style';">(Unit/day)</span></strong>
                    </p>
                </td>
                <td
                    style="width:168pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#bfbfbf;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                        <strong><span style="font-family:'Bookman Old Style';">Actual Production
                                Rate</span></strong><strong><span
                                style="font-family:'Bookman Old Style'; font-size:6pt;"><sup>1</sup></span></strong>
                    </p>
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                        <strong><span style="font-family:'Bookman Old Style';">(Unit/day)</span></strong>
                    </p>
                </td>
            </tr>

            @foreach($data['product_lines'] as $product_lines)
            <tr>
                <td
                    style="width:155.1pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt; text-align:center;">
                        <span style="font-family:'Bookman Old Style';">{{
                            $product_lines->product_lines}}&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width:155.3pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt; text-align:center;">
                        <span style="font-family:'Bookman Old Style';">{{
                            $product_lines->declared_rate_per_day}}&nbsp;</span>
                    </p>
                </td>
                <td
                    style="width:155.35pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt; text-align:center;">
                        <span style="font-family:'Bookman Old Style';">{{
                            $product_lines->actual_rate_per_day}}&nbsp;</span>
                    </p>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:4pt;">&nbsp;</p>
    <table cellspacing="0" cellpadding="0" style="border-collapse:collapse;">
        <tbody>
            <tr style="height:6.3pt;">
                <td style="width:150pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">Name of Managing Head:</span>
                    </p>
                </td>
                <td colspan="3" style="width:360.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><strong><span
                                style="font-family:'Bookman Old Style';">{{
                                $data['inspection_report']->managing_head}}&nbsp;</span></strong></p>
                </td>
            </tr>
            <tr style="height:4.35pt;">
                <td style="width:116.1pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">Name of PCO:</span></p>
                </td>
                <td colspan="3" style="width:360.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><strong><span
                                style="font-family:'Bookman Old Style';">{{
                                $data['inspection_report']->pco_name}}&nbsp;</span></strong></p>
                </td>
            </tr>
            <tr style="height:4.35pt;">
                <td style="width:116.1pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">PCO Accreditation No.:</span>
                    </p>
                </td>
                <td style="width:118.5pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><strong><span
                                style="font-family:'Bookman Old Style';">{{
                                $data['inspection_report']->pco_accreditation}}&nbsp;</span></strong>
                    </p>
                </td>
                <td style="width:102.9pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">Date of Effectivity:</span></p>
                </td>
                <td style="width:117.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><strong><span
                                style="font-family:'Bookman Old Style';">
                                {{ date("m/d/Y",
                                strtotime($data['inspection_report']->effectivity_date))}}&nbsp;
                            </span></strong></p>
                </td>
            </tr>
            <tr style="height:4.35pt;">
                <td style="width:116.1pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">Phone/Fax:</span></p>
                </td>
                <td style="width:118.5pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><strong><span
                                style="font-family:'Bookman Old Style';">{{
                                $data['inspection_report']->phone_fax_number }}&nbsp;</span></strong>
                    </p>
                </td>
                <td style="width:102.9pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">Email:</span></p>
                </td>
                <td style="width:117.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><strong><span
                                style="font-family:'Bookman Old Style';">{{
                                $data['inspection_report']->email }}&nbsp;</span></strong></p>
                </td>
            </tr>
        </tbody>
    </table>
    <p style="margin-top:10pt; margin-bottom:0pt; line-height:115%; font-size:4pt;"><span
            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
    <h1
        style="margin-top:0pt; margin-left:36pt; margin-bottom:3pt; text-indent:-18pt; line-height:115%; font-size:10pt;">
        <span style="font-family:'Bookman Old Style';">2</span><span
            style="width:11.4pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-family:'Bookman Old Style';">PURPOSE OF INSPECTION</span><i
            class="fa fa-fw fa-check-square-o"></i>
    </h1>

    <table cellspacing="0" cellpadding="0" style="border:0.75pt solid #000000; border-collapse:collapse;">
        <tbody>
            <tr style="height:47.65pt;">
                <td style="width:515pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p
                        style="margin-top:0pt; margin-left:12.35pt; margin-bottom:0pt; text-indent:-12.35pt; line-height:115%; font-size:9pt;">
                        <span style="font-family:'Bookman Old Style';">[</span>
                        @if($data['purpose_of_inspection']->verify_accuracy == 'true')
                        <span style="font-family: DejaVu Sans, sans-serif;">✔</span>
                        @else
                        <span style="font-family:'Bookman Old Style';">&nbsp;&nbsp;&nbsp;</span>
                        @endif
                        <span style="font-family:'Bookman Old Style';">]&nbsp;Verify accuracy of
                            information submitted by the establishment pertaining to new permit
                            applications, renewals, or modifications</span>
                    </p>
                    <table cellspacing="0" cellpadding="0" style="margin-left:12.35pt; border-collapse:collapse;">
                        <tbody>
                            <tr>
                                <td
                                    style="width:318.85pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;">
                                        <span style="font-family:'Bookman Old Style';">&nbsp;</span>
                                    </p>
                                </td>
                                <td style="width:30.35pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                                        <span style="font-family:'Bookman Old Style';">New</span>
                                    </p>
                                </td>
                                <td style="width:47.05pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                                        <span style="font-family:'Bookman Old Style';">Renewal</span>
                                    </p>
                                </td>
                            </tr>
                            <tr>

                                <td
                                    style="width:318.85pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:6pt; line-height:115%; font-size:9pt;">
                                        <span style="font-family:'Bookman Old Style';">[</span>
                                        @if($data['establishment_permits']->pmpin != '')
                                        <span style="font-family: DejaVu Sans, sans-serif;">✔</span>
                                        @else
                                        <span style="font-family:'Bookman Old Style';">&nbsp;&nbsp;&nbsp;</span>
                                        @endif
                                        <span style="font-family:'Bookman Old Style';">] PMPIN
                                            Application</span>
                                    </p>
                                    <p style="margin-top:0pt; margin-bottom:6pt; line-height:115%; font-size:9pt;">
                                        <span style="font-family:'Bookman Old Style';">[</span>
                                        @if($data['establishment_permits']->hazwaste_id_reg != '')
                                        <span style="font-family: DejaVu Sans, sans-serif;">✔</span>
                                        @else
                                        <span style="font-family:'Bookman Old Style';">&nbsp;&nbsp;&nbsp;</span>
                                        @endif
                                        <span style="font-family:'Bookman Old Style';">] Hazardous
                                            Waste
                                            ID Registration</span>
                                    </p>
                                    <p style="margin-top:0pt; margin-bottom:6pt; line-height:115%; font-size:9pt;">
                                        <span style="font-family:'Bookman Old Style';">[</span>

                                        @if($data['establishment_permits']->hazwaste_trans_reg != '')
                                        <span style="font-family: DejaVu Sans, sans-serif;">✔</span>
                                        @else
                                        <span style="font-family:'Bookman Old Style';">&nbsp;&nbsp;&nbsp;</span>
                                        @endif

                                        <span style="font-family:'Bookman Old Style';">] Hazardous Waste
                                            Transporter Registration</span>
                                    </p>
                                    <p style="margin-top:0pt; margin-bottom:6pt; line-height:115%; font-size:9pt;">
                                        <span style="font-family:'Bookman Old Style';">[</span>

                                        @if($data['establishment_permits']->hazwaste_tsd_reg != '')
                                        <span style="font-family: DejaVu Sans, sans-serif;">✔</span>
                                        @else
                                        <span style="font-family:'Bookman Old Style';">&nbsp;&nbsp;&nbsp;</span>
                                        @endif

                                        <span style="font-family:'Bookman Old Style';">] Hazardous Waste
                                            TSD Registration</span>
                                    </p>
                                    <p style="margin-top:0pt; margin-bottom:6pt; line-height:115%; font-size:9pt;">
                                        <span style="font-family:'Bookman Old Style';">[</span>

                                        @if($data['establishment_permits']->pto_apse != '')
                                        <span style="font-family: DejaVu Sans, sans-serif;">✔</span>
                                        @else
                                        <span style="font-family:'Bookman Old Style';">&nbsp;&nbsp;&nbsp;</span>
                                        @endif

                                        <span style="font-family:'Bookman Old Style';">] Permit to
                                            Operate APSE</span>
                                    </p>
                                    <p style="margin-top:0pt; margin-bottom:6pt; line-height:115%; font-size:9pt;">
                                        <span style="font-family:'Bookman Old Style';">[</span>

                                        @if($data['establishment_permits']->discharge_permit != '')
                                        <span style="font-family: DejaVu Sans, sans-serif;">✔</span>
                                        @else
                                        <span style="font-family:'Bookman Old Style';">&nbsp;&nbsp;&nbsp;</span>
                                        @endif
                                        <span style="font-family:'Bookman Old Style';">] Discharge
                                            Permit</span>
                                    </p>
                                    <p style="margin-top:0pt; margin-bottom:6pt; line-height:115%; font-size:9pt;">
                                        <span style="font-family:'Bookman Old Style';">[</span>
                                        <span style="font-family:'Bookman Old Style';">&nbsp;&nbsp;&nbsp;</span>
                                        <span style="font-family:'Bookman Old Style';">] Others
                                            ____________________</span>
                                    </p>
                                </td>
                                <td style="width:30.35pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:5pt; text-align:center; font-size:9pt;">
                                        <span style="font-family:'Bookman Old Style';">[</span>
                                        @if($data['establishment_permits']->pmpin
                                        == 'new')
                                        <span style="font-family: DejaVu Sans, sans-serif;">✔</span>
                                        @else
                                        <span style="font-family:'Bookman Old Style';">&nbsp;&nbsp;&nbsp;</span>
                                        @endif
                                        <span style="font-family:'Bookman Old Style';">]</span>
                                    </p>

                                    <p style="margin-top:0pt; margin-bottom:5pt; text-align:center; font-size:9pt;">
                                        <span style="font-family:'Bookman Old Style';">[</span>
                                        @if($data['establishment_permits']->hazwaste_id_reg
                                        == 'new')
                                        <span style="font-family: DejaVu Sans, sans-serif;">✔</span>
                                        @else
                                        <span style="font-family:'Bookman Old Style';">&nbsp;&nbsp;&nbsp;</span>
                                        @endif
                                        <span style="font-family:'Bookman Old Style';">]</span>
                                    </p>
                                    <p style="margin-top:0pt; margin-bottom:5pt; text-align:center; font-size:9pt;">
                                        <span style="font-family:'Bookman Old Style';">[</span>
                                        @if($data['establishment_permits']->hazwaste_trans_reg
                                        == 'new')
                                        <span style="font-family: DejaVu Sans, sans-serif;">✔</span>
                                        @else
                                        <span style="font-family:'Bookman Old Style';">&nbsp;&nbsp;&nbsp;</span>
                                        @endif
                                        <span style="font-family:'Bookman Old Style';">]</span>
                                    </p>
                                    <p style="margin-top:0pt; margin-bottom:5pt; text-align:center; font-size:9pt;">
                                        <span style="font-family:'Bookman Old Style';">[</span>
                                        @if($data['establishment_permits']->hazwaste_tsd_reg
                                        == 'new')
                                        <span style="font-family: DejaVu Sans, sans-serif;">✔</span>
                                        @else
                                        <span style="font-family:'Bookman Old Style';">&nbsp;&nbsp;&nbsp;</span>
                                        @endif
                                        <span style="font-family:'Bookman Old Style';">]</span>
                                    </p>
                                    <p style="margin-top:0pt; margin-bottom:5pt; text-align:center; font-size:9pt;">
                                        <span style="font-family:'Bookman Old Style';">[</span>
                                        @if($data['establishment_permits']->pto_apse
                                        == 'new')
                                        <span style="font-family: DejaVu Sans, sans-serif;">✔</span>
                                        @else
                                        <span style="font-family:'Bookman Old Style';">&nbsp;&nbsp;&nbsp;</span>
                                        @endif
                                        <span style="font-family:'Bookman Old Style';">]</span>
                                    </p>
                                    <p style="margin-top:0pt; margin-bottom:5pt; text-align:center; font-size:9pt;">
                                        <span style="font-family:'Bookman Old Style';">[</span>
                                        @if($data['establishment_permits']->discharge_permit
                                        == 'new')
                                        <span style="font-family: DejaVu Sans, sans-serif;">✔</span>
                                        @else
                                        <span style="font-family:'Bookman Old Style';">&nbsp;&nbsp;&nbsp;</span>
                                        @endif
                                        <span style="font-family:'Bookman Old Style';">]</span>
                                    </p>
                                    <p style="margin-top:0pt; margin-bottom:5pt; text-align:center; font-size:9pt;">
                                        <span style="font-family:'Bookman Old Style';">[</span>
                                        @if($data['establishment_permits']->other
                                        == 'new')
                                        <span style="font-family: DejaVu Sans, sans-serif;">✔</span>
                                        @else
                                        <span style="font-family:'Bookman Old Style';">&nbsp;&nbsp;&nbsp;</span>
                                        @endif
                                        <span style="font-family:'Bookman Old Style';">]</span>
                                    </p>
                                </td>
                                <td style="width:30.35pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:5pt; text-align:center; font-size:9pt;">
                                        <span style="font-family:'Bookman Old Style';">[</span>
                                        @if($data['establishment_permits']->pmpin
                                        == 'renewal')
                                        <span style="font-family: DejaVu Sans, sans-serif;">✔</span>
                                        @else
                                        <span style="font-family:'Bookman Old Style';">&nbsp;&nbsp;&nbsp;</span>
                                        @endif
                                        <span style="font-family:'Bookman Old Style';">]</span>
                                    </p>
                                    <p style="margin-top:0pt; margin-bottom:5pt; text-align:center; font-size:9pt;">
                                        <span style="font-family:'Bookman Old Style';">[</span>
                                        @if($data['establishment_permits']->hazwaste_id_reg
                                        == 'renewal')
                                        <span style="font-family: DejaVu Sans, sans-serif;">✔</span>
                                        @else
                                        <span style="font-family:'Bookman Old Style';">&nbsp;&nbsp;&nbsp;</span>
                                        @endif
                                        <span style="font-family:'Bookman Old Style';">]</span>
                                    </p>
                                    <p style="margin-top:0pt; margin-bottom:5pt; text-align:center; font-size:9pt;">
                                        <span style="font-family:'Bookman Old Style';">[</span>
                                        @if($data['establishment_permits']->hazwaste_trans_reg
                                        == 'renewal')
                                        <span style="font-family: DejaVu Sans, sans-serif;">✔</span>
                                        @else
                                        <span style="font-family:'Bookman Old Style';">&nbsp;&nbsp;&nbsp;</span>
                                        @endif
                                        <span style="font-family:'Bookman Old Style';">]</span>
                                    </p>
                                    <p style="margin-top:0pt; margin-bottom:5pt; text-align:center; font-size:9pt;">
                                        <span style="font-family:'Bookman Old Style';">[</span>
                                        @if($data['establishment_permits']->hazwaste_tsd_reg
                                        == 'renewal')
                                        <span style="font-family: DejaVu Sans, sans-serif;">✔</span>
                                        @else
                                        <span style="font-family:'Bookman Old Style';">&nbsp;&nbsp;&nbsp;</span>
                                        @endif
                                        <span style="font-family:'Bookman Old Style';">]</span>
                                    </p>
                                    <p style="margin-top:0pt; margin-bottom:5pt; text-align:center; font-size:9pt;">
                                        <span style="font-family:'Bookman Old Style';">[</span>
                                        @if($data['establishment_permits']->pto_apse
                                        == 'renewal')
                                        <span style="font-family: DejaVu Sans, sans-serif;">✔</span>
                                        @else
                                        <span style="font-family:'Bookman Old Style';">&nbsp;&nbsp;&nbsp;</span>
                                        @endif
                                        <span style="font-family:'Bookman Old Style';">]</span>
                                    </p>
                                    <p style="margin-top:0pt; margin-bottom:5pt; text-align:center; font-size:9pt;">
                                        <span style="font-family:'Bookman Old Style';">[</span>
                                        @if($data['establishment_permits']->discharge_permit
                                        == 'renewal')
                                    <div style="font-family: DejaVu Sans, sans-serif;">✔</div>
                                    @else
                                    <span style="font-family:'Bookman Old Style';">&nbsp;&nbsp;&nbsp;</span>
                                    @endif
                                    <span style="font-family:'Bookman Old Style';">]</span>
                                    </p>
                                    <p style="margin-top:0pt; margin-bottom:5pt; text-align:center; font-size:9pt;">
                                        <span style="font-family:'Bookman Old Style';">[</span>
                                        @if($data['establishment_permits']->other
                                        == 'renewal')
                                    <div style="font-family: DejaVu Sans, sans-serif;">✔</div>
                                    @else
                                    <span style="font-family:'Bookman Old Style';">&nbsp;&nbsp;&nbsp;</span>
                                    @endif
                                    <span style="font-family:'Bookman Old Style';">]</span>
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                        09178120370
                    </table>
                    <p
                        style="margin-top:0pt; margin-left:12.35pt; margin-bottom:0pt; text-indent:-12.35pt; line-height:115%; font-size:9pt;">
                        <span style="font-family:'Bookman Old Style';">[</span>
                        @if($data['purpose_of_inspection']->determine_compliance_status == 'true')
                        <span style="font-family: DejaVu Sans, sans-serif;">✔</span>
                        @else
                        <span style="font-family:'Bookman Old Style';">&nbsp;&nbsp;&nbsp;</span>
                        @endif

                        <span style="font-family:'Bookman Old Style';">]&nbsp;Determine Compliance
                            Status
                            with environmental regulations, permit conditions, and other
                            requirements</span>
                    </p>
                    <p
                        style="margin-top:0pt; margin-left:12.35pt; margin-bottom:0pt; text-indent:-12.35pt; line-height:115%; font-size:9pt;">
                        <span style="font-family:'Bookman Old Style';">[</span>
                        @if($data['purpose_of_inspection']->investigate_community == 'true')
                        <span style="font-family: DejaVu Sans, sans-serif;">✔</span>
                        @else
                        <span style="font-family:'Bookman Old Style';">&nbsp;&nbsp;&nbsp;</span>
                        @endif

                        <span style="font-family:'Bookman Old Style';">]&nbsp;Investigate community
                            complaints</span>
                    </p>


                    <p
                        style="margin-top:0pt; margin-left:12.35pt; margin-bottom:6pt; text-indent:-12.35pt; line-height:115%; font-size:9pt;">
                        <span style="font-family:'Bookman Old Style';">[</span>
                        @if($data['purpose_of_inspection']->check_status == 'true')
                        <span style="font-family: DejaVu Sans, sans-serif;">✔</span>
                        @else
                        <span style="font-family:'Bookman Old Style';">&nbsp;&nbsp;&nbsp;</span>
                        @endif
                        <span style="font-family:'Bookman Old Style';">]&nbsp;Check status of
                            commitment(s)</span>
                    </p>
                    <p style="margin-top:0pt; margin-left:12.35pt; margin-bottom:6pt; line-height:115%; font-size:9pt;">
                        <span style="font-family:'Bookman Old Style';">[</span><span
                            style="font-family:'Bookman Old Style';">&nbsp;&nbsp;</span><span
                            style="font-family:'Bookman Old Style';">] Industrial EcoWatch
                            Program</span>
                    </p>
                    <p style="margin-top:0pt; margin-left:12.35pt; margin-bottom:6pt; line-height:115%; font-size:9pt;">
                        <span style="font-family:'Bookman Old Style';">[</span><span
                            style="font-family:'Bookman Old Style';">&nbsp;&nbsp;</span><span
                            style="font-family:'Bookman Old Style';">] Philippine Environmental
                            Partnership Program (PEPP)</span>
                    </p>
                    <p style="margin-top:0pt; margin-left:12.35pt; margin-bottom:6pt; line-height:115%; font-size:9pt;">
                        <span style="font-family:'Bookman Old Style';">[</span><span
                            style="font-family:'Bookman Old Style';">&nbsp;&nbsp;</span><span
                            style="font-family:'Bookman Old Style';">] Pollution Adjudication Board
                            (PAB)</span>
                    </p>
                    <p style="margin-top:0pt; margin-left:12.35pt; margin-bottom:6pt; line-height:115%; font-size:9pt;">
                        <span style="font-family:'Bookman Old Style';">[</span><span
                            style="font-family:'Bookman Old Style';">&nbsp;&nbsp;</span><span
                            style="font-family:'Bookman Old Style';">] Others
                            ____________________</span>
                    </p>
                    <p
                        style="margin-top:0pt; margin-left:12.35pt; margin-bottom:6pt; text-indent:-12.35pt; line-height:115%; font-size:9pt;">
                        <span style="font-family:'Bookman Old Style';">[</span>
                        <span style="font-family:'Bookman Old Style';">&nbsp;&nbsp;&nbsp;</span>

                        <span style="font-family:'Bookman Old Style';">]&nbsp;Others
                            ______________________________________________________</span>
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
    <p style="margin-top:10pt; margin-bottom:3pt; line-height:115%; font-size:3pt;"><span
            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
    <h1
        style="margin-top:15pt; margin-left:36pt; margin-bottom:0pt; text-indent:-18pt; line-height:115%; font-size:10pt;">
        <span style="font-family:'Bookman Old Style';">3</span><span
            style="width:11.4pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-family:'Bookman Old Style';">COMPLIANCE STATUS</span>
    </h1>
    <h2
        style="margin-top:6pt; margin-left:40.3pt; margin-bottom:0pt; text-indent:-22.3pt; line-height:115%; font-size:10pt;">
        <span style="font-family:'Bookman Old Style';">3.1</span><span
            style="width:5.7pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-family:'Bookman Old Style';">DENR Permits/Licenses/Clearances</span>
    </h2>
    <table cellspacing="0" cellpadding="0" style="border:0.75pt solid #000000; border-collapse:collapse;">

        <tbody>

            <tr>
                <td
                    style="width:60pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#bfbfbf;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                        <strong><span style="font-family:'Bookman Old Style';">Environmental
                                Law</span></strong>
                    </p>
                </td>
                <td colspan="2"
                    style="width:220pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#bfbfbf;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                        <strong><span style="font-family:'Bookman Old Style';">Permits</span></strong>
                    </p>
                </td>
                <td
                    style="width:60pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#bfbfbf;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                        <strong><span style="font-family:'Bookman Old Style';">Date of
                                Issue</span></strong>
                    </p>
                </td>
                <td
                    style="width:60pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#bfbfbf;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                        <strong><span style="font-family:'Bookman Old Style';">Expiry
                                Date</span></strong>
                    </p>
                </td>
            </tr>

            @foreach($data['denr_permits'] as $denr_permits)
            <tr>
                <td
                    style="width:69.95pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{ $denr_permits->environmental_law}}</span></p>
                </td>
                <td
                    style="width:124.2pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{ $denr_permits->permits}}</span></p>
                </td>
                <td
                    style="width:146.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{ $denr_permits->issued}}</span></p>
                </td>
                <td
                    style="width:54.35pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{ date("m/d/Y",
                            strtotime($denr_permits->issued_date))}}</span></p>
                </td>
                <td
                    style="width:54.4pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{ date("m/d/Y",
                            strtotime($denr_permits->expiry_date))}}</span></p>
                </td>
            </tr>
            @endforeach
            <!-- 
            <tr>
                <td
                    style="width:124.2pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">ECC 2</span></p>
                </td>
                <td
                    style="width:146.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                </td>
                <td
                    style="width:54.35pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                </td>
                <td
                    style="width:54.4pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                </td>
            </tr>
            <tr>
                <td
                    style="width:124.2pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">ECC 3</span></p>
                </td>
                <td
                    style="width:146.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                </td>
                <td
                    style="width:54.35pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                </td>
                <td
                    style="width:54.4pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                </td>
            </tr>
            <tr>
                <td rowspan="5"
                    style="width:69.95pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">RA 6969</span></p>
                </td>
                <td
                    style="width:124.2pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">DENR Registry ID</span></p>
                </td>
                <td
                    style="width:146.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                </td>
                <td
                    style="width:54.35pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                </td>
                <td
                    style="width:54.4pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                </td>
            </tr>
            <tr>
                <td
                    style="width:124.2pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">PCL Compliance
                            Certificate</span>
                    </p>
                </td>
                <td
                    style="width:146.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                </td>
                <td
                    style="width:54.35pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                </td>
                <td
                    style="width:54.4pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                </td>
            </tr>
            <tr>
                <td
                    style="width:124.2pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">CCO Registry</span></p>
                </td>
                <td
                    style="width:146.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                </td>
                <td
                    style="width:54.35pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                </td>
                <td
                    style="width:54.4pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                </td>
            </tr>
            <tr>
                <td
                    style="width:124.2pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">Importer Clearance No.</span>
                    </p>
                </td>
                <td
                    style="width:146.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                </td>
                <td
                    style="width:54.35pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                </td>
                <td
                    style="width:54.4pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                </td>
            </tr>
            <tr>
                <td
                    style="width:124.2pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">Permit to Transport</span></p>
                </td>
                <td
                    style="width:146.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                </td>
                <td
                    style="width:54.35pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                </td>
                <td
                    style="width:54.4pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                </td>
            </tr>
            <tr>
                <td
                    style="width:69.95pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">RA 8749</span></p>
                </td>
                <td
                    style="width:124.2pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">Permit to Operate No.</span>
                    </p>
                </td>
                <td
                    style="width:146.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                </td>
                <td
                    style="width:54.35pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                </td>
                <td
                    style="width:54.4pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                </td>
            </tr>
            <tr>
                <td
                    style="width:69.95pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">RA 9003</span></p>
                </td>
                <td
                    style="width:124.2pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">ECC for Sanitary
                            Landfill</span>
                    </p>
                </td>
                <td
                    style="width:146.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                </td>
                <td
                    style="width:54.35pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                </td>
                <td
                    style="width:54.4pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                </td>
            </tr>
            <tr>
                <td
                    style="width:69.95pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">RA 9275</span></p>
                </td>
                <td
                    style="width:124.2pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">Discharge Permit No.</span></p>
                </td>
                <td
                    style="width:146.7pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                </td>
                <td
                    style="width:54.35pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                </td>
                <td
                    style="width:54.4pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                </td>
            </tr> -->
        </tbody>
    </table>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:3pt;">&nbsp;</p>
    <h2
        style="margin-top:6pt; margin-left:40.3pt; margin-bottom:0pt; text-indent:-22.3pt; line-height:115%; font-size:10pt;">
        <span style="font-family:'Bookman Old Style';">3.2</span><span
            style="width:5.7pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-family:'Bookman Old Style';">Summary of Compliance</span>
    </h2>
    <p style="margin-top:0pt; margin-bottom:6pt; line-height:115%; font-size:9pt;"><span
            style="font-family:'Bookman Old Style';">The table below summarizes the compliance
            of&nbsp;</span><strong><span style="font-family:'Bookman Old Style';">{{
                $data['inspection_report']->establishment_name }}</span></strong><span
            style="font-family:'Bookman Old Style';">&nbsp;to
            applicable laws and citations. For the detailed compliance status, refer to the attached
            multimedia checklists.</span></p>
    <table cellspacing="0" cellpadding="0" style="width:100%; border:0.75pt solid #000000; border-collapse:collapse;">
        <tbody>
            <tr>
                <td
                    style="width:30%; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#bfbfbf;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                        <strong><span style="font-family:'Bookman Old Style';">Applicable Laws and
                                Citations</span></strong>
                    </p>
                </td>
                <td
                    style="width:40%; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#bfbfbf;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                        <strong><span style="font-family:'Bookman Old Style';">Compliance
                                Requirements</span></strong>
                    </p>
                </td>
                <td
                    style="width:10%; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#bfbfbf;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                        <strong><span style="font-family:'Bookman Old Style';">Complied?</span></strong>
                    </p>
                </td>
                <td
                    style="width:20%; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#bfbfbf;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                        <strong><span style="font-family:'Bookman Old Style';">Remarks</span></strong>
                    </p>
                </td>
            </tr>
            <!-- <tr>
                <td
                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#bfbfbf;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                        <strong><span style="font-family:'Bookman Old Style';">Yes</span></strong>
                    </p>
                </td>
                <td
                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#bfbfbf;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                        <strong><span style="font-family:'Bookman Old Style';">No</span></strong>
                    </p>
                </td>
                <td
                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#bfbfbf;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                        <strong><span style="font-family:'Bookman Old Style';">N/A</span></strong>
                    </p>
                </td>
            </tr> -->
            <tr>
                <td colspan="4"
                    style="border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><strong><span
                                style="font-family:'Bookman Old Style';">Environmental Compliance
                                Certificate (ECC) Conditionalities</span></strong></p>
                </td>
            </tr>
            @foreach($data['law_citation_ecc_conditionalities'] as $law_citation_ecc_conditionalities)
            <tr>
                <!-- {{ $data['law_citation_ecc_conditionalities'][0]->complied }} -->
                <td
                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{
                            $law_citation_ecc_conditionalities->applicable_law}}&nbsp;</span></p>
                </td>
                <td
                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{
                            $law_citation_ecc_conditionalities->compliance_requirements}}
                            &nbsp;</span></p>
                </td>
                <td
                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;">
                        <!-- <span
                            style="font-family:'Bookman Old Style';">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                                <span style="font-family:'Bookman Old Style';"></span>
                                <span style="font-family: DejaVu Sans, sans-serif;">✔</span>
                                <span style="font-family:'Bookman Old Style';"></span>
                            </p>&nbsp;
                        </span> -->
                        {{ $law_citation_ecc_conditionalities->complied}}
                    </p>
                </td>

                <td
                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;">
                        <span style="font-family:'Bookman Old Style';">{{ $law_citation_ecc_conditionalities->remarks}}
                        </span>
                    </p>
                </td>
            </tr>
            @endforeach
            <tr>
                <td colspan="4"
                    style="border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><strong><span
                                style="font-family:'Bookman Old Style';">RA 6969 Toxic Substances and
                                Hazardous and Nuclear Wastes Control Act</span></strong></p>
                </td>
            </tr>
            <tr>
                <td rowspan="2"
                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">Priority Chemicals List</span>
                    </p>
                </td>
                <td
                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">Valid PCL Compliance
                            Certificate</span></p>
                </td>
                <td
                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$data['law_citation_ra_6969'][0]->complied}}</span>
                    </p>
                </td>

                <td
                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$data['law_citation_ra_6969'][0]->remarks}}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">Annual Reporting</span></p>
                </td>
                <td
                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$data['law_citation_ra_6969'][1]->complied}}</span>
                    </p>
                </td>

                <td
                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$data['law_citation_ra_6969'][1]->remarks}}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td rowspan="2"
                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">Chemical Control Orders</span>
                    </p>
                </td>
                <td
                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">Biennial Report for those chemicals
                            that are for issuance of CCO</span></p>
                </td>

                <td
                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$data['law_citation_ra_6969'][2]->complied}}</span>
                    </p>
                </td>

                <td
                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$data['law_citation_ra_6969'][2]->remarks}}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">CCO Registration</span></p>
                </td>
                <td
                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$data['law_citation_ra_6969'][3]->complied}}</span>
                    </p>
                </td>

                <td
                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$data['law_citation_ra_6969'][3]->remarks}}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">Importation</span></p>
                </td>
                <td
                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">Valid Small Quality Importation
                            Clearance</span></p>
                </td>
                <td
                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$data['law_citation_ra_6969'][4]->complied}}</span>
                    </p>
                </td>

                <td
                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$data['law_citation_ra_6969'][4]->remarks}}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td rowspan="2"
                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">Hazardous Waste Generator</span>
                    </p>
                </td>
                <td
                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">Registration as Hazardous Waste
                            Generator</span></p>
                </td>
                <td
                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$data['law_citation_ra_6969'][5]->complied}}</span>
                    </p>
                </td>

                <td
                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$data['law_citation_ra_6969'][5]->remarks}}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">Reporting of Hazardous Waste
                            Generated</span></p>
                </td>
                <td
                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$data['law_citation_ra_6969'][6]->complied}}</span>
                    </p>
                </td>

                <td
                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$data['law_citation_ra_6969'][6]->remarks}}</span>
                    </p>
                </td>
            </tr>
            <tr style="height:15.6pt;">
                <td rowspan="2"
                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">Hazardous Waste Storage and
                            Labeling</span></p>
                </td>
                <td
                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">Classification of Hazardous
                            Waste</span></p>
                </td>
                <td
                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$data['law_citation_ra_6969'][7]->complied}}</span>
                    </p>
                </td>

                <td
                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$data['law_citation_ra_6969'][7]->remarks}}</span>
                    </p>
                </td>
            </tr>
            <tr style="height:15.6pt;">
                <td
                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">Hazardous waste storage and
                            labeling</span></p>
                </td>
                <td
                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$data['law_citation_ra_6969'][8]->complied}}</span>
                    </p>
                </td>

                <td
                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$data['law_citation_ra_6969'][8]->remarks}}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td rowspan="3"
                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">Waste Transporter; Waste Transport
                            Record; Waste Treatment and Disposal Premises</span></p>
                </td>
                <td
                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">Valid registration of transporters
                            and treaters</span></p>
                </td>
                <td
                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$data['law_citation_ra_6969'][9]->complied}}</span>
                    </p>
                </td>

                <td
                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$data['law_citation_ra_6969'][9]->remarks}}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">Compliance with Manifest System
                            (Waste Transport Record)</span></p>
                </td>
                <td
                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$data['law_citation_ra_6969'][10]->complied}}</span>
                    </p>
                </td>

                <td
                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$data['law_citation_ra_6969'][10]->remarks}}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">Valid/completed certificate of
                            treatment</span></p>
                </td>
                <td
                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$data['law_citation_ra_6969'][11]->complied}}</span>
                    </p>
                </td>

                <td
                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$data['law_citation_ra_6969'][11]->remarks}}</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="4"
                    style="border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><strong><span
                                style="font-family:'Bookman Old Style';">RA 8749 - Clean Air
                                Act</span></strong></p>
                </td>
            </tr>

            @foreach($data['law_citation_ra_8749'] as $law_citation_ra_8749)
            <tr>
                <td
                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$law_citation_ra_8749->applicable_law}}</span>
                    </p>
                </td>
                <td
                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$law_citation_ra_8749->compliance_requirements}}</span>
                    </p>
                </td>
                <td
                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$law_citation_ra_8749->complied}}</span></p>
                </td>

                <td
                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$law_citation_ra_8749->remarks}}</span></p>
                </td>
            </tr>
            @endforeach
            <tr>
                <td colspan="4"
                    style="border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><strong><span
                                style="font-family:'Bookman Old Style';">RA 9003 &ndash; Ecological
                                Solid Waste Management Act</span></strong></p>
                </td>
            </tr>
            @foreach($data['law_citation_ra_9003'] as $law_citation_ra_9003)
            <tr>
                <td
                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$law_citation_ra_9003->applicable_law}}</span>
                    </p>
                </td>
                <td
                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$law_citation_ra_9003->compliance_requirements}}</span>
                    </p>
                </td>
                <td
                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$law_citation_ra_9003->complied}}</span></p>
                </td>

                <td
                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$law_citation_ra_9003->remarks}}</span></p>
                </td>
            </tr>
            @endforeach
            <tr>
                <td colspan="4"
                    style="border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><strong><span
                                style="font-family:'Bookman Old Style';">RA 9275 &ndash; Clean Water
                                Act</span></strong></p>
                </td>
            </tr>
            @foreach($data['law_citation_ra_9275'] as $law_citation_ra_9275)
            <tr>
                <td
                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$law_citation_ra_9275->applicable_law}}</span>
                    </p>
                </td>
                <td
                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$law_citation_ra_9275->compliance_requirements}}</span>
                    </p>
                </td>
                <td
                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$law_citation_ra_9275->complied}}</span></p>
                </td>

                <td
                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$law_citation_ra_9275->remarks}}</span></p>
                </td>
            </tr>
            @endforeach
            <tr style="height:3.5pt;">
                <td colspan="4"
                    style="border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><strong><span
                                style="font-family:'Bookman Old Style';">Pollution Control Officer
                                Accreditation</span></strong></p>
                </td>
            </tr>

            @foreach($data['law_citation_pcoa'] as $law_citation_pcoa)
            <tr>
                <td
                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$law_citation_pcoa->applicable_law}}</span>
                    </p>
                </td>
                <td
                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$law_citation_pcoa->compliance_requirements}}</span>
                    </p>
                </td>
                <td
                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$law_citation_pcoa->complied}}</span></p>
                </td>

                <td
                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$law_citation_pcoa->remarks}}</span></p>
                </td>
            </tr>
            @endforeach
            <tr>
                <td colspan="4"
                    style="border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><strong><span
                                style="font-family:'Bookman Old Style';">Self-Monitoring
                                Report</span></strong></p>
                </td>
            </tr>
            @foreach($data['law_citation_smr'] as $law_citation_smr)
            <tr>
                <td
                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$law_citation_smr->applicable_law}}</span>
                    </p>
                </td>
                <td
                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$law_citation_smr->compliance_requirements}}</span>
                    </p>
                </td>
                <td
                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$law_citation_smr->complied}}</span></p>
                </td>

                <td
                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{$law_citation_smr->remarks}}</span></p>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <p style="margin-top:30pt; margin-bottom:0pt; line-height:115%; font-size:3pt;">&nbsp;</p>
    <h2
        style="margin-top:6pt; margin-left:40.3pt; margin-bottom:0pt; text-indent:-22.3pt; line-height:115%; font-size:10pt;">
        <span style="font-family:'Bookman Old Style';">3.3</span><span
            style="width:5.7pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-family:'Bookman Old Style';">Summary of Findings and Observations</span>
    </h2>
    <h3
        style="margin-top:0pt; margin-left:54pt; margin-bottom:6pt; text-indent:-36pt; line-height:115%; font-size:9pt;">
        <em><span style="font-family:'Bookman Old Style';">3.3.1</span></em><span
            style="width:11.52pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><em><span
                style="font-family:'Bookman Old Style';">Environmental Impact Statement
                System</span></em>
    </h3>
    <p style="margin-top:0pt; margin-bottom:6pt; margin-left: 50pt; line-height:115%; font-size:9pt;">
        <span style="font-family:'Bookman Old Style';">
            {{ $data['findings_and_observation'][3]->details}}&nbsp;</span>
    </p>
    <h3
        style="margin-top:0pt; margin-left:54pt; margin-bottom:6pt; text-indent:-36pt; line-height:115%; font-size:9pt;">
        <em><span style="font-family:'Bookman Old Style';">3.3.2</span></em><span
            style="width:11.52pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><em><span
                style="font-family:'Bookman Old Style';">Chemicals Management</span></em>
    </h3>
    <p style="margin-top:0pt; margin-bottom:6pt; margin-left: 50pt; line-height:115%; font-size:9pt;">
        <span style="font-family:'Bookman Old Style';">{{
            $data['findings_and_observation'][1]->details}}&nbsp;</span>
    </p>
    <h3
        style="margin-top:0pt; margin-left:54pt; margin-bottom:6pt; text-indent:-36pt; line-height:115%; font-size:9pt;">
        <em><span style="font-family:'Bookman Old Style';">3.3.3</span></em><span
            style="width:11.52pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><em><span
                style="font-family:'Bookman Old Style';">Hazardous Waste Management</span></em>
    </h3>
    <p style="margin-top:0pt; margin-bottom:6pt; margin-left: 50pt; line-height:115%; font-size:9pt;">
        <span style="font-family:'Bookman Old Style';">{{
            $data['findings_and_observation'][4]->details}}&nbsp;</span>
    </p>
    <h3
        style="margin-top:0pt; margin-left:54pt; margin-bottom:6pt; text-indent:-36pt; line-height:115%; font-size:9pt;">
        <em><span style="font-family:'Bookman Old Style';">3.3.4</span></em><span
            style="width:11.52pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><em><span
                style="font-family:'Bookman Old Style';">Air Quality Management</span></em>
    </h3>
    <p style="margin-top:0pt; margin-bottom:6pt; margin-left: 50pt; line-height:115%; font-size:9pt;">
        <span style="font-family:'Bookman Old Style';">{{
            $data['findings_and_observation'][0]->details}}&nbsp;</span>
    </p>
    <h3
        style="margin-top:0pt; margin-left:54pt; margin-bottom:6pt; text-indent:-36pt; line-height:115%; font-size:9pt;">
        <em><span style="font-family:'Bookman Old Style';">3.3.5</span></em><span
            style="width:11.52pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><em><span
                style="font-family:'Bookman Old Style';">Solid Waste Management</span></em>
    </h3>
    <p style="margin-top:0pt; margin-bottom:6pt; margin-left: 50pt; line-height:115%; font-size:9pt;">
        <span style="font-family:'Bookman Old Style';">{{
            $data['findings_and_observation'][5]->details}}&nbsp;</span>
    </p>
    <h3
        style="margin-top:0pt; margin-left:54pt; margin-bottom:6pt; text-indent:-36pt; line-height:115%; font-size:9pt;">
        <em><span style="font-family:'Bookman Old Style';">3.3.6</span></em><span
            style="width:11.52pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><em><span
                style="font-family:'Bookman Old Style';">Water Quality Management</span></em>
    </h3>
    <p style="margin-top:0pt; margin-bottom:6pt; margin-left: 50pt; line-height:115%; font-size:9pt;">
        <span style="font-family:'Bookman Old Style';">{{
            $data['findings_and_observation'][6]->details}}&nbsp;</span>
    </p>
    <h3
        style="margin-top:0pt; margin-left:54pt; margin-bottom:6pt; text-indent:-36pt; line-height:115%; font-size:9pt;">
        <em><span style="font-family:'Bookman Old Style';">3.3.7</span></em><span
            style="width:11.52pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><em><span
                style="font-family:'Bookman Old Style';">Commitment to &lt;Insert voluntary
                commitment/consent agreement&gt;</span></em>
    </h3>
    <p style="margin-top:0pt; margin-bottom:10pt; margin-left: 50pt; line-height:115%; font-size:9pt;">
        <span style="font-family:'Bookman Old Style';">{{
            $data['findings_and_observation'][2]->details}}&nbsp;</span>
    </p>
    <h1
        style="margin-top:30pt; margin-left:36pt; margin-bottom:3pt; text-indent:-18pt; line-height:115%; font-size:10pt;">
        <span style="font-family:'Bookman Old Style';">4</span><span
            style="width:11.4pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
            style="font-family:'Bookman Old Style';">RECOMMENDATION</span>
    </h1>

    <ul style="list-style-type: disc; margin-left:34.6pt;">
        @foreach($data['recommendation'] as $recommendation)
        <li><span
                style='line-height:115%;font-family:"Arial",sans-serif;font-size:12px; padding-left:5.03pt;'>{{$recommendation->value}}</span>
        </li>
        @endforeach
    </ul>

    <table cellspacing="0" cellpadding="0" style="width:504.1pt; border-collapse:collapse;">
        <tbody>
            <tr>
                <td colspan="7" style="width:493.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><strong><span
                                style="font-family:'Bookman Old Style';">Other
                                recommendations:</span></strong></p>
                </td>
            </tr>
            <tr style="height:45pt;">
                <td colspan="7" style="width:493.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                </td>
            </tr>

        </tbody>
    </table>


    <table cellspacing="0" cellpadding="0" style="width:504.1pt; border-collapse:collapse;">
        <tbody>

            <tr style="height:39.35pt; padding-bottom:30pt">
                <td style="width:80pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><strong><span
                                style="font-family:'Bookman Old Style';">Date of
                                Inspection:</span></strong></p>
                </td>
                <td
                    style="width:107.1pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">{{ date("m/d/Y",
                            strtotime($data['inspection']->inspection_date))}}&nbsp;</span></p>
                </td>
                <td colspan="5" style="width:245.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                </td>
            </tr>
        </tbody>
    </table>
</div>


<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'><br>&nbsp;<strong><span style='font-size:12px;line-height:115%;font-family:"Bookman Old Style",serif;'>Submitted by the Inspection Team:</span></strong></p>
<table style="border-collapse:collapse;border:none;">
    <tbody>
        @foreach(json_decode($data['inspection']->inspection_team) as $inspection_team)
        <tr>
            <td style="width: 467.5pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                <table style="border-collapse:collapse;border:none;">
                    <tbody>
                        <tr>
                            <td style="width: 121.8pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                            </td>
                            <td style="width: 212.6pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top; border-bottom-style:solid;">
                                <p style='margin-top:12.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><span style='font-size:12px;line-height:115%;font-family:"Bookman Old Style",serif; border-bottom-style:solid;'>{{$inspection_team}}</span></p>
                            </td>
                            <td style="width: 121.8pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'><br></p>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
<table style="float: left;width: 5.0e+2pt;border-collapse:collapse;border:none;margin-left:6.75pt;margin-right:6.75pt;">
    <tbody>
        <tr>
            <td style="width: 212.4pt;border: none;padding: 0cm 5.4pt;height: 40.05pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'><strong><span style='font-size:12px;line-height:  115%;font-family:"Bookman Old Style",serif;'>Recommending Approval:</span></strong></p>
            </td>
            <td style="width: 42.5pt;border: none;padding: 0cm 5.4pt;height: 40.05pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'><strong><span style='font-size:12px;line-height:  115%;font-family:"Bookman Old Style",serif;'>&nbsp;</span></strong></p>
            </td>
            <td style="width: 248.1pt;border: none;padding: 0cm 5.4pt;height: 40.05pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'><strong><span style='font-size:12px;line-height:  115%;font-family:"Bookman Old Style",serif;'>Approved by:</span></strong></p>
            </td>
        </tr>
        <tr>
            <td style="width: 212.4pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top; border-bottom-style:solid;">
                <p style='margin-top:12.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><span style='font-size:12px;line-height:115%;font-family:"Bookman Old Style",serif; '>{{
                    $data['inspection']->recommending_approval }}</span></p>
            </td>
            <td style="width: 42.5pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><span style='font-size:12px;line-height:115%;font-family:"Bookman Old Style",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 248.1pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top; border-bottom-style:solid;">
                <p style='margin-top:12.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><span style='font-size:12px;font-family:"Bookman Old Style",serif;'>{{
                    $data['inspection']->regional_director }}</span></p>
            </td>
        </tr>
        <tr>
            <td style="width: 212.4pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><strong><span style='font-size:12px;line-height:115%;font-family:  "Bookman Old Style",serif;'>Chief, EMED</span></strong></p>
                
            </td>
            <td style="width: 42.5pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><strong><span style='font-size:12px;line-height:115%;font-family:  "Bookman Old Style",serif;'>&nbsp;</span></strong></p>
            </td>
            <td style="width: 248.1pt;border: none;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><strong><span style='font-size:12px;line-height:115%;font-family:  "Bookman Old Style",serif;'>Regional Director</span></strong></p>
            </td>
        </tr>
    </tbody>
</table>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'><br>&nbsp;</p>

</html>