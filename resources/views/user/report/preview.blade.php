<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Enforcement and Monitoring System</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../../AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="../../AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../../../AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../../AdminLTE-3.2.0/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../../AdminLTE-3.2.0/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../../../AdminLTE-3.2.0/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../../../AdminLTE-3.2.0/plugins/summernote/summernote-bs4.min.css">
</head>

<body class="layout-top-nav">
    <div class="wrapper">
        <!-- <div class="content-wrapper" style="height: auto;"> -->
        <div class="container-fluid" style="background-color: #bfbfbf;">
            <button class="btn btn-default" id="download-button">Download as PDF</button>

            <div class="container-fluid" id="invoice" style="width: 20cm; background-color: white;">
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
                    <table cellspacing="0" cellpadding="0"
                        style="border:0.75pt solid #000000; border-collapse:collapse;">
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
                    <table cellspacing="0" cellpadding="0"
                        style="border:0.75pt solid #000000; border-collapse:collapse;">
                        <tbody>
                            <tr>
                                <td
                                    style="width:183.33pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#bfbfbf;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                                        <strong><span style="font-family:'Bookman Old Style';">Product
                                                Lines</span></strong>
                                    </p>
                                </td>
                                <td
                                    style="width:183.33pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#bfbfbf;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                                        <strong><span style="font-family:'Bookman Old Style';">Production Rate as
                                                Declared in the ECC</span></strong>
                                    </p>
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                                        <strong><span
                                                style="font-family:'Bookman Old Style';">(Unit/day)</span></strong>
                                    </p>
                                </td>
                                <td
                                    style="width:183.33pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; background-color:#bfbfbf;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                                        <strong><span style="font-family:'Bookman Old Style';">Actual Production
                                                Rate</span></strong><strong><span
                                                style="font-family:'Bookman Old Style'; font-size:6pt;"><sup>1</sup></span></strong>
                                    </p>
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                                        <strong><span
                                                style="font-family:'Bookman Old Style';">(Unit/day)</span></strong>
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
                                <td
                                    style="width:150pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Name of Managing Head:</span>
                                    </p>
                                </td>
                                <td colspan="3"
                                    style="width:360.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><strong><span
                                                style="font-family:'Bookman Old Style';">{{
                                                $data['inspection_report']->managing_head}}&nbsp;</span></strong></p>
                                </td>
                            </tr>
                            <tr style="height:4.35pt;">
                                <td
                                    style="width:116.1pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Name of PCO:</span></p>
                                </td>
                                <td colspan="3"
                                    style="width:360.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><strong><span
                                                style="font-family:'Bookman Old Style';">{{
                                                $data['inspection_report']->pco_name}}&nbsp;</span></strong></p>
                                </td>
                            </tr>
                            <tr style="height:4.35pt;">
                                <td
                                    style="width:116.1pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">PCO Accreditation No.:</span>
                                    </p>
                                </td>
                                <td
                                    style="width:118.5pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><strong><span
                                                style="font-family:'Bookman Old Style';">{{
                                                $data['inspection_report']->pco_accreditation}}&nbsp;</span></strong>
                                    </p>
                                </td>
                                <td
                                    style="width:102.9pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Date of Effectivity:</span></p>
                                </td>
                                <td
                                    style="width:117.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><strong><span
                                                style="font-family:'Bookman Old Style';">
                                                {{ date("m/d/Y",
                                                strtotime($data['inspection_report']->effectivity_date))}}&nbsp;
                                            </span></strong></p>
                                </td>
                            </tr>
                            <tr style="height:4.35pt;">
                                <td
                                    style="width:116.1pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Phone/Fax:</span></p>
                                </td>
                                <td
                                    style="width:118.5pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><strong><span
                                                style="font-family:'Bookman Old Style';">{{
                                                $data['inspection_report']->phone_fax_number }}&nbsp;</span></strong>
                                    </p>
                                </td>
                                <td
                                    style="width:102.9pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Email:</span></p>
                                </td>
                                <td
                                    style="width:117.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><strong><span
                                                style="font-family:'Bookman Old Style';">{{
                                                $data['inspection_report']->email }}&nbsp;</span></strong></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="margin-top:30pt; margin-bottom:0pt; line-height:115%; font-size:4pt;"><span
                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                    <h1
                        style="margin-top:0pt; margin-left:36pt; margin-bottom:3pt; text-indent:-18pt; line-height:115%; font-size:10pt;">
                        <span style="font-family:'Bookman Old Style';">2</span><span
                            style="width:11.4pt; font:7pt 'Times New Roman'; display:inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
                            style="font-family:'Bookman Old Style';">PURPOSE OF INSPECTION</span><i
                            class="fa fa-fw fa-check-square-o"></i>
                    </h1>

                    <table cellspacing="0" cellpadding="0"
                        style="border:0.75pt solid #000000; border-collapse:collapse;">
                        <tbody>
                            <tr style="height:47.65pt;">
                                <td style="width:550pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p
                                        style="margin-top:0pt; margin-left:12.35pt; margin-bottom:0pt; text-indent:-12.35pt; line-height:115%; font-size:9pt;">
                                        @if($data['purpose_of_inspection']->verify_accuracy == 'true')
                                        <span style="font-family:Wingdings;"></span>
                                        @else
                                        <span style="font-family:Wingdings;"></span>
                                        @endif
                                        <i class="fa fa-fw fa-check-square-o"></i>
                                        <span style="font-family:'Bookman Old Style';">&nbsp;Verify accuracy of
                                            information submitted by the establishment pertaining to new permit
                                            applications, renewals, or modifications</span>
                                    </p>
                                    <table cellspacing="0" cellpadding="0"
                                        style="margin-left:12.35pt; border-collapse:collapse;">
                                        <tbody>
                                            <tr>
                                                <td
                                                    style="width:318.85pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;">
                                                        <span style="font-family:'Bookman Old Style';">&nbsp;</span>
                                                    </p>
                                                </td>
                                                <td
                                                    style="width:30.35pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                    <p
                                                        style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                                                        <span style="font-family:'Bookman Old Style';">New</span>
                                                    </p>
                                                </td>
                                                <td
                                                    style="width:47.05pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                    <p
                                                        style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                                                        <span style="font-family:'Bookman Old Style';">Renewal</span>
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td
                                                    style="width:318.85pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                    <p
                                                        style="margin-top:0pt; margin-bottom:6pt; line-height:115%; font-size:9pt;">
                                                        <span style="font-family:'Bookman Old Style';">[</span>

                                                        @if($data['establishment_permits']->pmpin != '')
                                                        <span style="font-family:Wingdings;"></span>
                                                        @else
                                                        <span
                                                            style="font-family:'Bookman Old Style';">&nbsp;&nbsp;</span>
                                                        @endif
                                                        <span style="font-family:'Bookman Old Style';">] PMPIN
                                                            Application</span>
                                                    </p>
                                                    <p
                                                        style="margin-top:0pt; margin-bottom:6pt; line-height:115%; font-size:9pt;">
                                                        <span style="font-family:'Bookman Old Style';">[</span>
                                                        @if($data['establishment_permits']->hazwaste_id_reg != '')
                                                        <span style="font-family:Wingdings;"></span>
                                                        @else
                                                        <span
                                                            style="font-family:'Bookman Old Style';">&nbsp;&nbsp;</span>
                                                        @endif
                                                        <span style="font-family:'Bookman Old Style';">] Hazardous
                                                            Waste
                                                            ID Registration</span>
                                                    </p>
                                                    <p
                                                        style="margin-top:0pt; margin-bottom:6pt; line-height:115%; font-size:9pt;">
                                                        <span style="font-family:'Bookman Old Style';">[</span>

                                                        @if($data['establishment_permits']->hazwaste_trans_reg != '')
                                                        <span style="font-family:Wingdings;"></span>
                                                        @else
                                                        <span
                                                            style="font-family:'Bookman Old Style';">&nbsp;&nbsp;</span>
                                                        @endif

                                                        <span style="font-family:'Bookman Old Style';">] Hazardous Waste
                                                            Transporter Registration</span>
                                                    </p>
                                                    <p
                                                        style="margin-top:0pt; margin-bottom:6pt; line-height:115%; font-size:9pt;">
                                                        <span style="font-family:'Bookman Old Style';">[</span>

                                                        @if($data['establishment_permits']->hazwaste_tsd_reg != '')
                                                        <span style="font-family:Wingdings;"></span>
                                                        @else
                                                        <span
                                                            style="font-family:'Bookman Old Style';">&nbsp;&nbsp;</span>
                                                        @endif

                                                        <span style="font-family:'Bookman Old Style';">] Hazardous Waste
                                                            TSD Registration</span>
                                                    </p>
                                                    <p
                                                        style="margin-top:0pt; margin-bottom:6pt; line-height:115%; font-size:9pt;">
                                                        <span style="font-family:'Bookman Old Style';">[</span>

                                                        @if($data['establishment_permits']->pto_apse != '')
                                                        <span style="font-family:Wingdings;"></span>
                                                        @else
                                                        <span
                                                            style="font-family:'Bookman Old Style';">&nbsp;&nbsp;</span>
                                                        @endif

                                                        <span style="font-family:'Bookman Old Style';">] Permit to
                                                            Operate APSE</span>
                                                    </p>
                                                    <p
                                                        style="margin-top:0pt; margin-bottom:6pt; line-height:115%; font-size:9pt;">
                                                        <span style="font-family:'Bookman Old Style';">[</span>

                                                        @if($data['establishment_permits']->discharge_permit != '')
                                                        <span style="font-family:Wingdings;"></span>
                                                        @else
                                                        <span
                                                            style="font-family:'Bookman Old Style';">&nbsp;&nbsp;</span>
                                                        @endif
                                                        <span style="font-family:'Bookman Old Style';">] Discharge
                                                            Permit</span>
                                                    </p>
                                                    <p
                                                        style="margin-top:0pt; margin-bottom:6pt; line-height:115%; font-size:9pt;">
                                                        <span style="font-family:'Bookman Old Style';">[</span>
                                                        <span
                                                            style="font-family:'Bookman Old Style';">&nbsp;&nbsp;</span>
                                                        <span style="font-family:'Bookman Old Style';">] Others
                                                            ____________________</span>
                                                    </p>
                                                </td>
                                                <td style="width:30.35pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                    <p style="margin-top:0pt; margin-bottom:2pt; text-align:center; font-size:9pt;">
                                                        @if($data['establishment_permits']->pmpin
                                                        == 'new')
                                                        <span style="font-family:Wingdings;"></span>
                                                        @else
                                                        <span style="font-family:Wingdings;"></span>
                                                        @endif
                                                    </p>
                                                    <p style="margin-top:0pt; margin-bottom:2pt; text-align:center; font-size:9pt;">
                                                        @if($data['establishment_permits']->hazwaste_id_reg
                                                        == 'new')
                                                        <span style="font-family:Wingdings;"></span>
                                                        @else
                                                        <span style="font-family:Wingdings;"></span>
                                                        @endif
                                                    </p>
                                                    <p style="margin-top:0pt; margin-bottom:2pt; text-align:center; font-size:9pt;">
                                                        @if($data['establishment_permits']->hazwaste_trans_reg
                                                        == 'new')
                                                        <span style="font-family:Wingdings;"></span>
                                                        @else
                                                        <span style="font-family:Wingdings;"></span>
                                                        @endif
                                                    </p>
                                                    <p style="margin-top:0pt; margin-bottom:2pt; text-align:center; font-size:9pt;">
                                                        @if($data['establishment_permits']->hazwaste_tsd_reg
                                                        == 'new')
                                                        <span style="font-family:Wingdings;"></span>
                                                        @else
                                                        <span style="font-family:Wingdings;"></span>
                                                        @endif
                                                    </p>
                                                    <p style="margin-top:0pt; margin-bottom:2pt; text-align:center; font-size:9pt;">
                                                        @if($data['establishment_permits']->pto_apse
                                                        == 'new')
                                                        <span style="font-family:Wingdings;"></span>
                                                        @else
                                                        <span style="font-family:Wingdings;"></span>
                                                        @endif
                                                    </p>
                                                    <p style="margin-top:0pt; margin-bottom:2pt; text-align:center; font-size:9pt;">
                                                        @if($data['establishment_permits']->discharge_permit
                                                        == 'new')
                                                        <span style="font-family:Wingdings;"></span>
                                                        @else
                                                        <span style="font-family:Wingdings;"></span>
                                                        @endif
                                                    </p>
                                                    <p style="margin-top:0pt; margin-bottom:2pt; text-align:center; font-size:9pt;">
                                                        @if($data['establishment_permits']->other
                                                        == 'new')
                                                        <span style="font-family:Wingdings;"></span>
                                                        @else
                                                        <span style="font-family:Wingdings;"></span>
                                                        @endif
                                                    </p>
                                                </td>
                                                <td style="width:30.35pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                    <p style="margin-top:0pt; margin-bottom:2pt; text-align:center; font-size:9pt;">
                                                        @if($data['establishment_permits']->pmpin
                                                        == 'renewal')
                                                        <span style="font-family:Wingdings;"></span>
                                                        @else
                                                        <span style="font-family:Wingdings;"></span>
                                                        @endif
                                                    </p>
                                                    <p style="margin-top:0pt; margin-bottom:2pt; text-align:center; font-size:9pt;">
                                                        @if($data['establishment_permits']->hazwaste_id_reg
                                                        == 'renewal')
                                                        <span style="font-family:Wingdings;"></span>
                                                        @else
                                                        <span style="font-family:Wingdings;"></span>
                                                        @endif
                                                    </p>
                                                    <p style="margin-top:0pt; margin-bottom:2pt; text-align:center; font-size:9pt;">
                                                        @if($data['establishment_permits']->hazwaste_trans_reg
                                                        == 'renewal')
                                                        <span style="font-family:Wingdings;"></span>
                                                        @else
                                                        <span style="font-family:Wingdings;"></span>
                                                        @endif
                                                    </p>
                                                    <p style="margin-top:0pt; margin-bottom:2pt; text-align:center; font-size:9pt;">
                                                        @if($data['establishment_permits']->hazwaste_tsd_reg
                                                        == 'renewal')
                                                        <span style="font-family:Wingdings;"></span>
                                                        @else
                                                        <span style="font-family:Wingdings;"></span>
                                                        @endif
                                                    </p>
                                                    <p style="margin-top:0pt; margin-bottom:2pt; text-align:center; font-size:9pt;">
                                                        @if($data['establishment_permits']->pto_apse
                                                        == 'renewal')
                                                        <span style="font-family:Wingdings;"></span>
                                                        @else
                                                        <span style="font-family:Wingdings;"></span>
                                                        @endif
                                                    </p>
                                                    <p style="margin-top:0pt; margin-bottom:2pt; text-align:center; font-size:9pt;">
                                                        @if($data['establishment_permits']->discharge_permit
                                                        == 'renewal')
                                                        <span style="font-family:Wingdings;"></span>
                                                        @else
                                                        <span style="font-family:Wingdings;"></span>
                                                        @endif
                                                    </p>
                                                    <p style="margin-top:0pt; margin-bottom:2pt; text-align:center; font-size:9pt;">
                                                        @if($data['establishment_permits']->other
                                                        == 'renewal')
                                                        <span style="font-family:Wingdings;"></span>
                                                        @else
                                                        <span style="font-family:Wingdings;"></span>
                                                        @endif
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p
                                        style="margin-top:0pt; margin-left:12.35pt; margin-bottom:0pt; text-indent:-12.35pt; line-height:115%; font-size:9pt;">

                                        @if($data['purpose_of_inspection']->determine_compliance_status == 'true')
                                        <span style="font-family:Wingdings;"></span>
                                        @else
                                        <span style="font-family:Wingdings;"></span>
                                        @endif

                                        <span style="font-family:'Bookman Old Style';">&nbsp;Determine Compliance
                                            Status
                                            with environmental regulations, permit conditions, and other
                                            requirements</span>
                                    </p>
                                    <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt;">
                                        @if($data['purpose_of_inspection']->investigate_community == 'true')
                                        <span style="font-family:Wingdings;"></span>
                                        @else
                                        <span style="font-family:Wingdings;"></span>
                                        @endif

                                        <span style="font-family:'Bookman Old Style';">&nbsp;Investigate community
                                            complaints</span>
                                    </p>
                                    <p
                                        style="margin-top:0pt; margin-left:12.35pt; margin-bottom:0pt; text-indent:-12.35pt; line-height:115%; font-size:9pt;">
                                        @if($data['purpose_of_inspection']->check_status == 'true')
                                        <span style="font-family:Wingdings;"></span>
                                        @else
                                        <span style="font-family:Wingdings;"></span>
                                        @endif

                                        <span style="font-family:'Bookman Old Style';">&nbsp;Check status of
                                            commitment(s)</span>
                                    </p>
                                    <p
                                        style="margin-top:0pt; margin-left:12.35pt; margin-bottom:0pt; line-height:115%; font-size:9pt;">
                                        <span style="font-family:'Bookman Old Style';">[</span><span
                                            style="font-family:'Bookman Old Style';">&nbsp;&nbsp;</span><span
                                            style="font-family:'Bookman Old Style';">] Industrial EcoWatch
                                            Program</span>
                                    </p>
                                    <p
                                        style="margin-top:0pt; margin-left:12.35pt; margin-bottom:0pt; line-height:115%; font-size:9pt;">
                                        <span style="font-family:'Bookman Old Style';">[</span><span
                                            style="font-family:'Bookman Old Style';">&nbsp;&nbsp;</span><span
                                            style="font-family:'Bookman Old Style';">] Philippine Environmental
                                            Partnership Program (PEPP)</span>
                                    </p>
                                    <p
                                        style="margin-top:0pt; margin-left:12.35pt; margin-bottom:0pt; line-height:115%; font-size:9pt;">
                                        <span style="font-family:'Bookman Old Style';">[</span><span
                                            style="font-family:'Bookman Old Style';">&nbsp;&nbsp;</span><span
                                            style="font-family:'Bookman Old Style';">] Pollution Adjudication Board
                                            (PAB)</span>
                                    </p>
                                    <p
                                        style="margin-top:0pt; margin-left:12.35pt; margin-bottom:0pt; line-height:115%; font-size:9pt;">
                                        <span style="font-family:'Bookman Old Style';">[</span><span
                                            style="font-family:'Bookman Old Style';">&nbsp;&nbsp;</span><span
                                            style="font-family:'Bookman Old Style';">] Others
                                            ____________________</span>
                                    </p>
                                    <p
                                        style="margin-top:0pt; margin-left:12.35pt; margin-bottom:0pt; text-indent:-12.35pt; line-height:115%; font-size:9pt;">
                                        <span style="font-family:Wingdings;"></span><span
                                            style="font-family:'Bookman Old Style';">&nbsp;Others
                                            ______________________________________________________</span>
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="margin-top:30pt; margin-bottom:3pt; line-height:115%; font-size:3pt;"><span
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
                    <table cellspacing="0" cellpadding="0"
                        style="border:0.75pt solid #000000; border-collapse:collapse;">
                        <tbody>
                            <tr>
                                <td
                                    style="width:80pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#bfbfbf;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                                        <strong><span style="font-family:'Bookman Old Style';">Environmental
                                                Law</span></strong>
                                    </p>
                                </td>
                                <td colspan="2"
                                    style="width:300pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#bfbfbf;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                                        <strong><span style="font-family:'Bookman Old Style';">Permits</span></strong>
                                    </p>
                                </td>
                                <td
                                    style="width:85pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#bfbfbf;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                                        <strong><span style="font-family:'Bookman Old Style';">Date of
                                                Issue</span></strong>
                                    </p>
                                </td>
                                <td
                                    style="width:85pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#bfbfbf;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                                        <strong><span style="font-family:'Bookman Old Style';">Expiry
                                                Date</span></strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="3"
                                    style="width:69.95pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">PD 1586</span></p>
                                </td>
                                <td
                                    style="width:124.2pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">ECC 1</span></p>
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
                            </tr>
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
                    <table cellspacing="0" cellpadding="0"
                        style="width:100%; border:0.75pt solid #000000; border-collapse:collapse;">
                        <tbody>
                            <tr>
                                <td rowspan="2"
                                    style="width:19.58%; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#bfbfbf;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                                        <strong><span style="font-family:'Bookman Old Style';">Applicable Laws and
                                                Citations</span></strong>
                                    </p>
                                </td>
                                <td rowspan="2"
                                    style="width:36.66%; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#bfbfbf;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                                        <strong><span style="font-family:'Bookman Old Style';">Compliance
                                                Requirements</span></strong>
                                    </p>
                                </td>
                                <td colspan="3"
                                    style="border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#bfbfbf;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                                        <strong><span style="font-family:'Bookman Old Style';">Complied?</span></strong>
                                    </p>
                                </td>
                                <td rowspan="2"
                                    style="width:10%; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle; background-color:#bfbfbf;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                                        <strong><span style="font-family:'Bookman Old Style';">Remarks</span></strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
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
                            </tr>
                            <tr>
                                <td colspan="6"
                                    style="border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><strong><span
                                                style="font-family:'Bookman Old Style';">Environmental Compliance
                                                Certificate (ECC) Conditionalities</span></strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Condition No. 1&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Conduct an effective Information,
                                            Education and Communication (IEC) Program to inform and educate all
                                            stakeholders, especially its contractors, workers, and local residents about
                                            the mitigating measures embodied in its IEEC, the conditions stipulated in
                                            this Certificate and the environmental and human safety features of the
                                            project for greater awareness, understanding and sustained acceptance of the
                                            project. The program shall be submitted to EMB Regional Office on an annual
                                            basis;
                                            &nbsp;</span></p>
                                </td>
                                <td
                                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">
                                            <p
                                                style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                                                <span style="font-family:Wingdings;"></span>
                                            </p>&nbsp;
                                        </span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Condition No. 2</span></p>
                                </td>
                                <td
                                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Implement a Comprehensive Social
                                            Development Program (SDP) and submit a separate report together with the
                                            Compliance Monitoring Report (CMR) to the EMB RO on a semi-annual basis;
                                            &nbsp;</span></p>
                                </td>
                                <td
                                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Condition No. 3</span></p>
                                </td>
                                <td
                                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">No cutting down of trees during
                                            project implementation, however, when clearing an area is unavoidable, a
                                            Tree Cutting Permit must be secured for affected trees from DENR CENRO
                                            concerned, or earth-balled and transferred elsewhere per CENRO
                                            recommendation without prejudice to the filing of criminal complaint in
                                            consonance to the Presidential Decree (PD) 705, EO 23 and other existing
                                            forestry laws, rules and regulations. Necessary documents such as clearance
                                            from the Secretary, balling permit et., must be secured prior to the
                                            implementation of the project;
                                            &nbsp;</span></p>
                                </td>
                                <td
                                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Condition No. 4</span></p>
                                </td>
                                <td
                                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Establishment of a reforestation
                                            program using endemic/indigenous species to mitigate greenhouse gas (GHG)
                                            emissions of the project in line with the DENR’s thrust for GHG emissions
                                            reduction programs and National Greening Program. The proponent shall
                                            establish a nursery program for the seedling production of One Thousand
                                            (1,000) per year within a timeline of 12 years in support to the Green
                                            Philippines Master Plan which will be utilized for tree planting activities.
                                            The proponent shall likewise submit an approved work and financial program
                                            (WFP) for the tree planting activities after one (1) month from the receipt
                                            of the approved ECC as well as an affidavit of execution by the proponent
                                            for the tree planting activities. However, if tree planting activities will
                                            be conducted by the 3rd party organization, the proponent shall submit copy
                                            of MOA between the proponent and the 3rd party organization. As proof of
                                            compliance, geotagged pictures of the tree planting area and CENRO
                                            Certification should be secured and submitted to this Office accordingly;
                                            &nbsp;</span></p>
                                </td>
                                <td
                                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Condition No. 5</span></p>
                                </td>
                                <td
                                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Establishment of carbon sink
                                            programs such as the use of biochar to mitigate greenhouse gas (GHG)
                                            emission of the project in line with the DENR’s thrust for GHG emission
                                            reduction programs;
                                            &nbsp;</span></p>
                                </td>
                                <td
                                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Condition No. 6</span></p>
                                </td>
                                <td
                                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">The plant operations shall conform
                                            with the following provisions:
                                            &nbsp;</span></p>
                                </td>
                                <td
                                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Condition No. 7</span></p>
                                </td>
                                <td
                                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">The proponent should establish a
                                            Wastewater Treatment Facility (WTF) within six (6) months from receipt of
                                            this Certificate to treat the 27.24 cubic meters/day wastewater generated
                                            and the effluent should be reused or recycled for watering the greeneries.
                                            Each type of wastewater generated should be directed to their individually
                                            designated treatment tanks (one each for the comfort rooms, bathing, and
                                            kitchen/oil-contaminated wastewater);
                                            &nbsp;</span></p>
                                </td>
                                <td
                                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Condition No. 8</span></p>
                                </td>
                                <td
                                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">That a Material Recovery Facility
                                            (MRF) should be constructed within the project area within ninety (90) days
                                            from receipt of this Certificate. The MRF should accommodate 250 kg/day of
                                            solid waste generated from the project operation. Composts shall be utilized
                                            as soil conditioner or fertilizer and recyclable materials shall be
                                            collected by private contractor. A zero-waste management scheme shall be
                                            adapted to minimize disposal of garbage to LGU’s disposal site;
                                            &nbsp;</span></p>
                                </td>
                                <td
                                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Condition No. 9</span></p>
                                </td>
                                <td
                                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">The proponent should establish a
                                            cistern tank or rainwater catchment with a capacity of 170 cubic meters
                                            within ninety (90) days from receipt of this Certificate and rainwater
                                            collected shall be utilized for flushing toilets and plant watering to
                                            prevent storm run-off water overflowing to nearby areas or road networks;
                                            &nbsp;</span></p>
                                </td>
                                <td
                                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Condition No. 10</span></p>
                                </td>
                                <td
                                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">The proponent should establish an
                                            appropriate storage area for Hazardous Wastes generated within ninety (90)
                                            days from start of construction period with proper labeling requirements
                                            pursuant to R.A. 6969;
                                            &nbsp;</span></p>
                                </td>
                                <td
                                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Condition No. 11</span></p>
                                </td>
                                <td
                                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">The sludge generated from the
                                            WTF/septic vaults shall not be disposed to any water body or public
                                            drainage. The proponent shall provide adequate treatment of sludge generated
                                            from the WTF/septic vaults or hire a third party treater for hauling and
                                            treatment of generated sludge. If the sludge will be treated through a 3rd
                                            party treater, a MOA between the proponent and the third party treater shall
                                            be submitted to EMB7 before project operation and a Certificate of Treatment
                                            (COT) shall likewise be submitted within one (1) week after each hauling
                                            event. If the sludge will be treated onsite, disposal of sludge to any water
                                            body shall still be avoided, but instead same be used as fertilizer or soil
                                            conditioner or any other purpose as long as it will not cause any negative
                                            environmental impacts;
                                            &nbsp;</span></p>
                                </td>
                                <td
                                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Condition No. 12</span></p>
                                </td>
                                <td
                                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">That the proponent should ensure
                                            that whatever declared in the attached Site Development Plan (SDP) will be
                                            followed and implemented, especially the prescribed Wastewater Treatment
                                            Facility, Material Recovery Facility, Cistern Tank, Drainage System, and
                                            etc. In case of change in engineering designs, the proponent should apply an
                                            amendment of the approved ECC based on the final and approved engineering
                                            designs prior project's implementation;
                                            &nbsp;</span></p>
                                </td>
                                <td
                                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Condition No. 13</span></p>
                                </td>
                                <td
                                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">That the proponent should submit to
                                            this Office copy of the signed MOA between the proponent and the third party
                                            TSD facility operator for the treatment of generated hazardous wastes
                                            materials;
                                            &nbsp;</span></p>
                                </td>
                                <td
                                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Condition No. 14</span></p>
                                </td>
                                <td
                                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Creation of an Environmental Unit
                                            (EU) within sixty (60) days from issuance of this Certificate that shall
                                            competently handle the environment-related aspects of the project. In
                                            addition to the monitoring requirements as specified in the Environmental
                                            Management Plan/ Environmental Monitoring Plan, the EU shall have the
                                            following responsibilities:
                                            &nbsp;</span></p>
                                </td>
                                <td
                                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Condition No. 15</span></p>
                                </td>
                                <td
                                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">That a 2’ x 4’ billboard containing
                                            this message: “Notice to the Public, This project (title of the project) of
                                            (Name of the proponent) has been issued an Environmental Compliance
                                            Certificate (ECC Number) by the Environmental Management Bureau of the
                                            Department of Environment and Natural Resources, Region VII”. The billboard
                                            must be installed at all entry and exit points of the project facing the
                                            road to inform the general public before project implementation. A copy of
                                            the certificate shall also be posted by the Proponent at the barangay
                                            bulletin board of the affected barangays within thirty (30) days upon
                                            receipt hereof. An accomplishment report which shall be include picture
                                            verification of compliance to the posting of notices and the billboards
                                            shall be submitted to this Office within ninety (90) days from receipt of
                                            the ECC. The proponent shall provide copies of this Approved ECC to the
                                            following government agencies, to wit: DENR7-PENRO, DENR7-CENRO, DENR7-LMB,
                                            PENRO-Cebu Capitol, DOLE 7, DOH, LGU, and Barangays concerned;
                                            &nbsp;</span></p>
                                </td>
                                <td
                                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Condition No. 16</span></p>
                                </td>
                                <td
                                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">The proponent should allow entry of
                                            EMB-7 field personnel into the project site at all times to conduct tangible
                                            monitoring and to validate project’s compliance to the ECC conditions
                                            stipulated therein;
                                            &nbsp;</span></p>
                                </td>
                                <td
                                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Condition No. 17</span></p>
                                </td>
                                <td
                                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">That the proponent shall ensure
                                            proper handling and disposal of hazardous wastes like used oil and batteries
                                            to avoid contamination of affected water body and soil. The proponent should
                                            submit to this Office copy of the signed MOA between the proponent and the
                                            third party TSD facility operator for the treatment of generated hazardous
                                            wastes materials;
                                            &nbsp;</span></p>
                                </td>
                                <td
                                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Condition No. 18</span></p>
                                </td>
                                <td
                                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">The proponent should secure a
                                            “Notice to Proceed” prior to project implementation of which requires the
                                            proponent to submit all necessary permits from other pertinent government
                                            agencies but not limited to as stated in Annex B, such as the following:
                                            Building Permit, Dumping Permit, DOH, DOLE, Locational Clearance and other
                                            LGU permits,Tree Cutting Permit, Environmental and Sanitation Permits, among
                                            others, is required. No activity shall be conducted by the proponent at the
                                            project area without a Notice to Proceed from this Office;
                                            &nbsp;</span></p>
                                </td>
                                <td
                                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Condition No. 19</span></p>
                                </td>
                                <td
                                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">No activities shall be undertaken
                                            other than what were stipulated in the IEEC. Should there be any expansion
                                            of the project beyond the project description or any change in the activity
                                            or transfer of location shall be subject to a new Environmental Impact
                                            Assessment;
                                            &nbsp;</span></p>
                                </td>
                                <td
                                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Condition No. 20</span></p>
                                </td>
                                <td
                                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">In case of transfer of ownership of
                                            this project, these same conditions and restrictions shall apply and the
                                            transferee shall be required to notify the EMB Regional Office within
                                            fifteen (15) days from the transfer of ownership to allow the necessary
                                            changes brought about by such transfer.
                                            &nbsp;</span></p>
                                </td>
                                <td
                                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="6"
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
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
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
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
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
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
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
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
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
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
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
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
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
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
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
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
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
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
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
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
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
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
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
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="6"
                                    style="border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><strong><span
                                                style="font-family:'Bookman Old Style';">RA 8749 - Clean Air
                                                Act</span></strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Emission Quality
                                            Standards</span>
                                    </p>
                                </td>
                                <td
                                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Compliance to emission quality
                                            standards (see attached sampling results)</span></p>
                                </td>
                                <td
                                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Ambient Air Quality
                                            Standards</span></p>
                                </td>
                                <td
                                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Compliance to ambient air
                                            quality
                                            standards</span></p>
                                </td>
                                <td
                                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Permit to Operate</span></p>
                                </td>
                                <td
                                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Valid permit to operate air
                                            pollution control devices</span></p>
                                </td>
                                <td
                                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="6"
                                    style="border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><strong><span
                                                style="font-family:'Bookman Old Style';">RA 9003 &ndash; Ecological
                                                Solid Waste Management Act</span></strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Waste Segregation</span></p>
                                </td>
                                <td
                                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Practice of waste
                                            segregation</span></p>
                                </td>
                                <td
                                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Solid Waste Disposal
                                            Facilities</span></p>
                                </td>
                                <td
                                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Installation of necessary
                                            controls
                                            for waste treatment and disposal facility</span></p>
                                </td>
                                <td
                                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="6"
                                    style="border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><strong><span
                                                style="font-family:'Bookman Old Style';">RA 9275 &ndash; Clean Water
                                                Act</span></strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Effluent Quality
                                            Standards</span>
                                    </p>
                                </td>
                                <td
                                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Compliance to effluent quality
                                            standards (See attached sampling results)</span></p>
                                </td>
                                <td
                                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Ground Water Quality
                                            Standards</span></p>
                                </td>
                                <td
                                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Compliance to ground water
                                            quality
                                            standards</span></p>
                                </td>
                                <td
                                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Wastewater Discharge
                                            Permit</span>
                                    </p>
                                </td>
                                <td
                                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Valid Wastewater Discharge
                                            Permit</span></p>
                                </td>
                                <td
                                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Wastewater Charge System</span>
                                    </p>
                                </td>
                                <td
                                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Payment of Wastewater
                                            Charges</span></p>
                                </td>
                                <td
                                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                            </tr>
                            <tr style="height:3.5pt;">
                                <td colspan="6"
                                    style="border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><strong><span
                                                style="font-family:'Bookman Old Style';">Pollution Control Officer
                                                Accreditation</span></strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">DAO 2014-02 or Revised
                                            Guidelines
                                            on PCO Accreditation</span></p>
                                </td>
                                <td
                                    style="width:36.66%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Valid accreditation of
                                            PCO</span>
                                    </p>
                                </td>
                                <td
                                    style="width:6.28%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="6"
                                    style="border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><strong><span
                                                style="font-family:'Bookman Old Style';">Self-Monitoring
                                                Report</span></strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:19.58%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">DAO 2003-27</span></p>
                                </td>
                                <td
                                    style="width:36.66%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">Complete and timely submission
                                            of
                                            SMRs</span></p>
                                </td>
                                <td
                                    style="width:6.28%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:5.36%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:8.94%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td
                                    style="width:23.18%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                            </tr>
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
                    <table cellspacing="0" cellpadding="0" style="margin-left:34.6pt; border-collapse:collapse;">
                        <tbody>
                            <tr>
                                <td
                                    style="width:2.45pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <!-- <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p> -->
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                                        <span style="font-family:Wingdings;"></span>
                                    </p>
                                </td>
                                <td
                                    style="width:259.2pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.4pt; padding-left:5.03pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">For accreditation of Pollution
                                            Control Officer (PCO)</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:2.45pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                                </td>
                                <td
                                    style="width:259.2pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.4pt; padding-left:5.03pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">For issuance of Permit to Operate
                                            (API)</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:2.45pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                                </td>
                                <td
                                    style="width:259.2pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.4pt; padding-left:5.03pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">For issuance of Permit to Discharge
                                            (WTP)</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:2.45pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                                </td>
                                <td
                                    style="width:259.2pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.4pt; padding-left:5.03pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">For submission of
                                            Self-Monitoring
                                            Report</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:2.45pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                                </td>
                                <td
                                    style="width:259.2pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.4pt; padding-left:5.03pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">For Technical Conference</span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:2.45pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                                </td>
                                <td
                                    style="width:259.2pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.4pt; padding-left:5.03pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">For re-sampling/further
                                            monitoring</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:2.45pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                                </td>
                                <td
                                    style="width:259.2pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.4pt; padding-left:5.03pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">For Issuance of Notice of
                                            Violation</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="width:2.45pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                                </td>
                                <td
                                    style="width:259.2pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.4pt; padding-left:5.03pt; vertical-align:middle;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">For endorsement to Pollution
                                            Adjudication Board (PAB)</span></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="margin-top:6pt; margin-bottom:0pt; line-height:115%; font-size:9pt;"><span
                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                    <table cellspacing="0" cellpadding="0" style="width:504.1pt; border-collapse:collapse;">
                        <tbody>
                            <tr>
                                <td colspan="7"
                                    style="width:493.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><strong><span
                                                style="font-family:'Bookman Old Style';">Other
                                                recommendations:</span></strong></p>
                                </td>
                            </tr>
                            <tr style="height:45pt;">
                                <td colspan="7"
                                    style="width:493.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                            </tr>



                            <tr style="height:19.35pt;">
                                <td colspan="2"
                                    style="width:118.85pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
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
                                <td colspan="4"
                                    style="width:245.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                            </tr>

                            <tr style="height:20.65pt;">
                                <td colspan="7"
                                    style="width:493.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><strong><span
                                                style="font-family:'Bookman Old Style';">Submitted by the Inspection
                                                Team:</span></strong></p>
                                </td>
                            </tr>
                            <tr style="height:28.35pt;">
                                <td
                                    style="width:2.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                                    <p style="margin:0pt 21.6pt 0pt 30.6pt; text-align:center; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>

                                </td>
                                <td colspan="2"
                                    style="width:223.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                                        <span style="font-family:'Bookman Old Style';">&lt;NAME AND
                                            SIGNATURE&gt;</span>
                                    </p>
                                </td>
                                <td colspan="2"
                                    style="width:9.35pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                                        <span style="font-family:'Bookman Old Style';">&nbsp;</span>
                                    </p>
                                </td>
                                <td
                                    style="width:214.5pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                                        <span style="font-family:'Bookman Old Style';">&lt;NAME AND
                                            SIGNATURE&gt;</span>
                                    </p>
                                </td>
                                <td
                                    style="width:0.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                                    <p style="margin:0pt 21.6pt 0pt 30.6pt; text-align:center; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>


                            </tr>



                            <tr style="height:31pt;">
                                <td
                                    style="width:2.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                                    <p style="margin:0pt 21.6pt 0pt 30.6pt; text-align:center; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td colspan="2"
                                    style="width:223.75pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                                        <span style="font-family:'Bookman Old Style';">&lt;NAME AND
                                            SIGNATURE&gt;</span>
                                    </p>
                                </td>
                                <td colspan="2"
                                    style="width:9.35pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                                        <span style="font-family:'Bookman Old Style';">&nbsp;</span>
                                    </p>
                                </td>
                                <td
                                    style="width:214.5pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                                        <span style="font-family:'Bookman Old Style';">&lt;NAME AND
                                            SIGNATURE&gt;</span>
                                    </p>
                                </td>
                                <td
                                    style="width:0.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                                    <p style="margin:0pt 21.6pt 0pt 30.6pt; text-align:center; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                            </tr>
                            <tr style="height:26.5pt;">
                                <td colspan="4"
                                    style="width:247pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><strong><span
                                                style="font-family:'Bookman Old Style';">Recommending
                                                Approval:</span></strong></p>
                                </td>
                                <td colspan="3"
                                    style="width:235.5pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><strong><span
                                                style="font-family:'Bookman Old Style';">Approved
                                                by:</span></strong>
                                    </p>
                                </td>
                            </tr>
                            <tr style="height:31.5pt;">
                                <td
                                    style="width:2.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                                    <p style="margin:0pt 21.6pt 0pt 30.6pt; text-align:center; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td colspan="2"
                                    style="width:223.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                                        <span style="font-family:'Bookman Old Style';"> {{
                                            $data['inspection']->recommending_approval }} </span>
                                    </p>
                                </td>
                                <td colspan="2"
                                    style="width:9.35pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                                        <span style="font-family:'Bookman Old Style';">&nbsp;</span>
                                    </p>
                                </td>
                                <td
                                    style="width:214.5pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                                        <span style="font-family:'Bookman Old Style';"> {{
                                            $data['inspection']->regional_director }} </span>
                                    </p>
                                </td>
                                <td
                                    style="width:0.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                                    <p style="margin:0pt 21.6pt 0pt 30.6pt; text-align:center; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                            </tr>
                            <tr style="height:7.15pt;">
                                <td
                                    style="width:2.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                                    <p style="margin:0pt 21.6pt 0pt 30.6pt; text-align:center; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                                <td colspan="2"
                                    style="width:223.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                                        <strong><span style="font-family:'Bookman Old Style';">Chief,
                                                EMED</span></strong>
                                    </p>
                                </td>
                                <td colspan="2"
                                    style="width:9.35pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                                        <span style="font-family:'Bookman Old Style';">&nbsp;</span>
                                    </p>
                                </td>
                                <td
                                    style="width:214.5pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;">
                                        <strong><span style="font-family:'Bookman Old Style';">Regional
                                                Director</span></strong>
                                    </p>
                                </td>
                                <td
                                    style="width:0.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                                    <p style="margin:0pt 21.6pt 0pt 30.6pt; text-align:center; font-size:9pt;"><span
                                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                                </td>
                            </tr>
                            <tr style="height:0pt;">
                                <td style="width:13pt;"><br></td>
                                <td style="width:116.65pt;"><br></td>
                                <td style="width:117.9pt;"><br></td>
                                <td style="width:10.25pt;"><br></td>
                                <td style="width:9.9pt;"><br></td>
                                <td style="width:225.3pt;"><br></td>
                                <td style="width:11.1pt;"><br></td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="margin-top:12pt; margin-bottom:10pt; line-height:115%; font-size:1pt;"><span
                            style="font-family:'Bookman Old Style';">&nbsp;</span></p>
                </div>
            </div>
        </div>
        <!-- </div> -->
    </div>

    <script src="../../AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../../AdminLTE-3.2.0/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="../../AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../../AdminLTE-3.2.0/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="../../AdminLTE-3.2.0/plugins/sparklines/sparkline.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../../AdminLTE-3.2.0/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../../AdminLTE-3.2.0/plugins/moment/moment.min.js"></script>
    <script src="../../AdminLTE-3.2.0/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../../AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="../../AdminLTE-3.2.0/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../../AdminLTE-3.2.0/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../AdminLTE-3.2.0/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="../../AdminLTE-3.2.0/dist/js/demo.js"></script> -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- <script src="../../AdminLTE-3.2.0/dist/js/pages/dashboard.js"></script> -->

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
        integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        const button = document.getElementById('download-button');

        function generatePDF() {
            // // Choose the element that your content will be rendered to.
            // const element = document.getElementById('invoice');
            // // Choose the element and save the PDF for your user.
            // html2pdf().from(element).save();


            var htmlDom = $("#invoice").html();

            var optionArray = {
                margin: 5,
                filename: 'Inspection Report.pdf',
                // image:        { type: 'jpeg', quality: 0.98 },
                // html2canvas:  { scale: 2 },
                jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
            };

            console.log(htmlDom);

            html2pdf().set(optionArray).from(htmlDom).save();
        }

        button.addEventListener('click', generatePDF);
    </script>
</body>

</html>