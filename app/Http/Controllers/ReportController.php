<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use PDF;
use File;

class ReportController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $req)
    {
        $type = $req->type;

        if( $type == 'inspection' ) {
            return view('user.report.inspection.report');
        } elseif ( $type == 'investigation' ) {
            return view('user.report.investigation.report');
        } elseif ( $type == 'monitoring' ) {
            return view('user.report.monitoring.report');
        }
        
    }

    public function reportList()
    {
        return view('user.report-list');
    }

    public function getReportList(Request $request)
    {

        // dd(DB::connection('remote_mysql')->table('smr')->limit(100)->get());

        if (empty($request->emb_id)) {

            $reports_list = DB::table('reports_list')
                ->orderByRaw('id DESC')
                ->get();

        } else {

            $reports_list = DB::table('reports_list')
                ->where('emb_id', $request->emb_id)
                ->orderByRaw('id DESC')
                ->get();

        }

        return DataTables::of($reports_list)
            ->addColumn('report_type', function ($reports_list) {
                $details = '<p class="text-sm">' . $reports_list->report_type . '</p>';
                return $details;
            })
            ->addColumn('emb_id', function ($reports_list) {
                $details = '<p class="text-sm">' . $reports_list->emb_id . '</p>';
                return $details;
            })
            ->addColumn('company_name', function ($reports_list) {
                $details = '<p class="text-sm">' . $reports_list->establishment_name . '</p>';
                return $details;
            })
            ->addColumn('nature_of_business', function ($reports_list) {

                if ( $reports_list->report_type == 'inspection' ) {
                    $report = DB::table('inspection_report')->where([
                        'id' => $reports_list->report_id,
                        'emb_id' => $reports_list->emb_id
                    ])->first();
                } else {
                    $report = DB::table('investigation_report')->where([
                        'id' => $reports_list->report_id,
                        'emb_id' => $reports_list->emb_id
                    ])->first();
                }
                

                $details = isset($report->nature_of_business) ? $report->nature_of_business : '';
                return $details;
            })
            ->addColumn('report_for', function ($reports_list) {
                if ( $reports_list->report_type == 'inspection' ) {
                    $report = DB::table('inspection_report')->where([
                        'id' => $reports_list->report_id,
                        'emb_id' => $reports_list->emb_id
                    ])->first();
                } else {
                    $report = DB::table('investigation_report')->where([
                        'id' => $reports_list->report_id,
                        'emb_id' => $reports_list->emb_id
                    ])->first();
                }

                $str = isset($report->report_for) ? json_decode($report->report_for) : '';
                $details = '<p class="text-sm">' .implode(", ", $str) . '</p>';
                return $details;
            })
            ->addColumn('created_date', function ($reports_list) {
                $details = '<p class="text-sm">' . date('M d, Y', strtotime($reports_list->created_date)) . '</p>';

                return $details;
            })
            ->addColumn('status', function ($reports_list) {

                if ( $reports_list->report_type == 'inspection' ) {
                    $report = DB::table('inspection_report')->where([
                        'id' => $reports_list->report_id,
                        'emb_id' => $reports_list->emb_id
                    ])->first();
                } else {
                    $report = DB::table('investigation_report')->where([
                        'id' => $reports_list->report_id,
                        'emb_id' => $reports_list->emb_id
                    ])->first();
                }

                $status = isset($report->status) ? $report->status : '';

                if($status == 'draft') {
                    $details = '<i><a href="#">' . $status . ':</a></i> Step ' . $report->step ;
                } else {
                    $details = '<i>' . $status . '</i>';
                }

                return $details;
            })
            ->addColumn('action', function ($reports_list) {

                $button = '<div class="btn-group">';

                if ( $reports_list->report_type == 'inspection' ) {
                    $report = DB::table('inspection_report')->where([
                        'id' => $reports_list->report_id,
                        'emb_id' => $reports_list->emb_id
                    ])->first();

                    $button .= '<button type="button" class="btn btn-default btn-flat" title="view" onclick="viewReport(' . $reports_list->report_id . ', \'' . $reports_list->emb_id . '\')"><i class="fa-solid fa-eye"></i></button>';
                } else {
                    $report = DB::table('investigation_report')->where([
                        'id' => $reports_list->report_id,
                        'emb_id' => $reports_list->emb_id
                    ])->first();

                    $button .= '<button type="button" class="btn btn-default btn-flat" title="view" onclick="viewInvestigationReport(' . $reports_list->report_id . ', \'' . $reports_list->emb_id . '\')"><i class="fa-solid fa-eye"></i></button>';
                }
                $button .= '<button type="button" class="btn btn-default btn-flat" title="delete" onclick="deleteReport(' . $reports_list->report_id . ')"><i class="fa-solid fa-trash"></i></button>';

                if ( $reports_list == 'inspection' ) {
                    if ($report->recommending_approval != '') {
                        $button .= '<button type="button" class="btn btn-default btn-flat" title="pdf" onclick="viewPDF(' . $reports_list->report_id . ')"><i class="fa-solid fa-file fa-beat-fade"></i></button>';
                    }
                }
                

                $button .= '</div>';

                return $button;
            })
            ->addColumn('with_NOV', function ($reports_list) {

                $button = '<button type="button" class="btn btn-default btn-flat" onclick="linkToNOV(' . $reports_list->report_id . ')"><ion-icon name="checkmark-outline"></ion-icon></button>';

                return $button;
            })
            ->rawColumns(['status','report_type', 'report_for', 'emb_id', 'company_name', 'nature_of_business', 'created_date', 'action', 'with_NOV'])
            ->make(true);
    }

    public function getReportData(Request $req)
    {
        $emb_id = $req->emb_id;
        $data = [];

        $checkifexist = DB::table('inspection_report')->where('id', $req->id)->select('id')->first();
        $relatednov = DB::table('report_to_nov')
        ->where([
            ['report_id', $req->id],
            ['report_type', 'inspection']
        ])
        ->get();

        $data['relatednov'] = $relatednov;
        
        if ($checkifexist) {

            if (in_array(1, $req->page)) {
                $inspection_report = DB::table('inspection_report')->where('id', $req->id)->first();
                $product_lines = DB::table('product_lines')->where('report_id', $checkifexist->id)->get();

                $data['inspection_report'] = $inspection_report;
                $data['product_lines'] = $product_lines;
            }

            if (in_array(2, $req->page)) {
                $purpose_of_inspection = DB::table('purpose_of_inspection')->where('report_id', $checkifexist->id)->first();
                $data['purpose_of_inspection'] = $purpose_of_inspection;

                if ($purpose_of_inspection) {
                    $establishment_permits = DB::table('establishment_permits')->where('poi_id', $purpose_of_inspection->id)->first();
                    $data['establishment_permits'] = $establishment_permits;
                }

            }

            if (in_array(3, $req->page)) {
                $denr_permits = DB::table('denr_permits')->where('report_id', $checkifexist->id)->get();
                $law_citation_ecc_conditionalities = DB::table('law_citation_ecc_conditionalities')->where('report_id', $checkifexist->id)->get();
                $law_citation_ra_6969 = DB::table('law_citation_ra_6969')->where('report_id', $checkifexist->id)->get();
                $law_citation_ra_8749 = DB::table('law_citation_ra_8749')->where('report_id', $checkifexist->id)->get();
                $law_citation_ra_9003 = DB::table('law_citation_ra_9003')->where('report_id', $checkifexist->id)->get();
                $law_citation_ra_9275 = DB::table('law_citation_ra_9275')->where('report_id', $checkifexist->id)->get();
                $law_citation_pcoa = DB::table('law_citation_pcoa')->where('report_id', $checkifexist->id)->get();
                $law_citation_smr = DB::table('law_citation_smr')->where('report_id', $checkifexist->id)->get();
                $findings_and_observation = DB::table('findings_and_observation')->where('report_id', $checkifexist->id)->get();
                $diesel_fueled_generator_stack_a = DB::table('diesel_fueled_generator')->where('report_id', $checkifexist->id)->where('set', 'Stack A')->get();
                $diesel_fueled_generator_stack_b = DB::table('diesel_fueled_generator')->where('report_id', $checkifexist->id)->where('set', 'Stack B')->get();

                $data['denr_permits'] = $denr_permits;
                $data['law_citation_ecc_conditionalities'] = $law_citation_ecc_conditionalities;
                $data['law_citation_ra_6969'] = $law_citation_ra_6969;
                $data['law_citation_ra_8749'] = $law_citation_ra_8749;
                $data['law_citation_ra_9003'] = $law_citation_ra_9003;
                $data['law_citation_ra_9275'] = $law_citation_ra_9275;
                $data['law_citation_pcoa'] = $law_citation_pcoa;
                $data['law_citation_smr'] = $law_citation_smr;
                $data['findings_and_observation'] = $findings_and_observation;
                $data['diesel_fueled_generator_stack_a'] = $diesel_fueled_generator_stack_a;
                $data['diesel_fueled_generator_stack_b'] = $diesel_fueled_generator_stack_b;

            }

            if (in_array(4, $req->page)) {

                $recommendation = DB::table('recommendation')->where('report_id', $checkifexist->id)->get();
                $data['recommendation'] = $recommendation;

            }

            if (in_array(5, $req->page)) {
                $inspection = DB::table('inspection_report')->where('id', $req->id)->
                    select('inspection_team', 'recommending_approval', 'regional_director', 'inspection_date')
                    ->first();

                $data['inspection'] = $inspection;
            }


            $inspection = DB::table('report_to_nov')->where('report_id', $req->id)->get();

            $data['report_to_nov'] = $inspection;



        }


        return $data;
    }

    public function saveRaw(Request $req)
    {
        $now = new \DateTime();
        $checkifexist = DB::table('inspection_report')->where('id', $req['id'])->select('id')->first();

        if (empty($checkifexist)) {
            /// not existing, add report
            $inspection_report = $this->insertUpdateInspectionReport('new', $req);

            if ($inspection_report) {
                ///on saved inspection report table
                $id = $inspection_report;

                if (!empty($req['firstPageData']['product-lines-table'])) {
                    foreach ($req['firstPageData']['product-lines-table'] as $key => $value) {
                        DB::table('product_lines')->insert([
                            'report_id' => $id,
                            'product_lines' => $value[0],
                            'declared_rate_per_day' => $value[1],
                            'actual_rate_per_day' => $value[2],
                            'created_date' => $now->format('Y-m-d H:i:s'),
                            'created_by' => auth()->user()->name,
                        ]);
                    }
                }

            }
            // saving into purpose_of_inspection table

            $purpose_of_inspection = $this->insertUpdatePurposeOfInspection($inspection_report, $req['secondPageData']);

            if ($purpose_of_inspection) {
                /// on saved purpose_of_inspection
                // $id = $purpose_of_inspection;
                $this->insertUpdateEstablishmentPermit('new', $purpose_of_inspection, $req);
            }
            $insertUpdateDENRPermits = $this->insertUpdateDENRPermits('new', $inspection_report, $req);
            $insertUpdateECCConditionalities = $this->insertUpdateECCConditionalities('new', $inspection_report, $req['law-and-citation']['ecc']);
            $insertUpdateRA6969 = $this->insertUpdateRA6969('new', $inspection_report, $req['law-and-citation']['ra-6969']);
            $insertUpdateRA8749 = $this->insertUpdateRA8749('new', $inspection_report, $req['law-and-citation']['ra-8749']);
            $insertUpdateRA9003 = $this->insertUpdateRA9003('new', $inspection_report, $req['law-and-citation']['ra-9003']);
            $insertUpdateRA9275 = $this->insertUpdateRA9275('new', $inspection_report, $req['law-and-citation']['ra-9275']);
            $insertUpdatePCOA = $this->insertUpdatePCOA('new', $inspection_report, $req['law-and-citation']['pcoa']);
            $insertUpdateSMR = $this->insertUpdateSMR('new', $inspection_report, $req['law-and-citation']['smr']);
            $insertUpdateSummaryAndFindings = $this->insertUpdateSummaryAndFindings($inspection_report, $req['summary-findings-and-observations']);
            $insertUpdateDieselFueledGenerator = $this->insertUpdateDieselFueledGenerator($inspection_report, $req['diesel-fueled-generator']);

            return $id;
        } else {
            /// update report

            $inspection_report = $this->insertUpdateInspectionReport('update', $req);

            if ($inspection_report) {

                DB::table('product_lines')->where('report_id', $checkifexist->id)->delete();

                if (!empty($req['firstPageData']['product-lines-table'])) {

                    foreach ($req['firstPageData']['product-lines-table'] as $key => $value) {
                        DB::table('product_lines')->insert([
                            'report_id' => $checkifexist->id,
                            'product_lines' => $value[0],
                            'declared_rate_per_day' => $value[1],
                            'actual_rate_per_day' => $value[2],
                            'created_date' => $now->format('Y-m-d H:i:s'),
                            'created_by' => auth()->user()->name,
                        ]);
                    }
                }

            }

            $purpose_of_inspection = $this->insertUpdatePurposeOfInspection($checkifexist->id, $req['secondPageData']);

            if ($purpose_of_inspection) {
                $establishment_permits = isset($req['secondPageDataEstablishmentPermits']['establishment_permits']) ? $req['secondPageDataEstablishmentPermits']['establishment_permits'] : '';

                if ($establishment_permits) {

                    DB::table('establishment_permits')->where('poi_id', $purpose_of_inspection)->delete();

                } else {
                    $check = DB::table('establishment_permits')->where('poi_id', $purpose_of_inspection)->select('id')->first();

                    if ($check) {
                        $this->insertUpdateEstablishmentPermit('update', $purpose_of_inspection, $req);
                    } else {
                        $this->insertUpdateEstablishmentPermit('new', $purpose_of_inspection, $req);
                    }


                }

            }

            $insertUpdateDENRPermits = $this->insertUpdateDENRPermits('update', $checkifexist->id, $req);
            $insertUpdateECCConditionalities = $this->insertUpdateECCConditionalities('update', $checkifexist->id, $req['law-and-citation']['ecc']);
            $insertUpdateRA6969 = $this->insertUpdateRA6969('update', $checkifexist->id, $req['law-and-citation']['ra-6969']);
            $insertUpdateRA8749 = $this->insertUpdateRA8749('update', $checkifexist->id, $req['law-and-citation']['ra-8749']);
            $insertUpdateRA9003 = $this->insertUpdateRA9003('update', $checkifexist->id, $req['law-and-citation']['ra-9003']);
            $insertUpdateRA9275 = $this->insertUpdateRA9275('update', $checkifexist->id, $req['law-and-citation']['ra-9275']);
            $insertUpdatePCOA = $this->insertUpdatePCOA('update', $checkifexist->id, $req['law-and-citation']['pcoa']);
            $insertUpdateSMR = $this->insertUpdateSMR('update', $checkifexist->id, $req['law-and-citation']['smr']);
            $insertUpdateSummaryAndFindings = $this->insertUpdateSummaryAndFindings($checkifexist->id, $req['summary-findings-and-observations']);
            $insertUpdateDieselFueledGenerator = $this->insertUpdateDieselFueledGenerator($checkifexist->id, $req['diesel-fueled-generator']);

            return $checkifexist->id;
        }


    }

    public function saveFinalStep(Request $req)
    {
        $teammember = $req->teammember;
        $recommendingapproval = $req->recommendingapproval;
        $regionaldirector = $req->regionaldirector;
        $dateofinspection = $req->dateofinspection;
        $emb_id = $req->emb_id;
        $id = $req->id;
        $nov = $req->nov;

        // $fourthPageData = $this->insertUpdateRecommendation($id, $req['fourthPageData']);

        $inspection_date = $dateofinspection;
        $inspection_date = str_replace('/', '-', $inspection_date);

        if($nov == 'yes') {
            $novtext = 'pending nov creation';
        } else {
            $novtext = 'submitted';
        }

        $data = DB::table('inspection_report')->where([
            ['emb_id', $emb_id],
            ['id', $id]
        ])->update([
            'step' => 6,
            'status' => $novtext,
            'inspection_date' => date("Y-m-d", strtotime($inspection_date)),
            'inspection_team' => $teammember,
            'regional_director' => $regionaldirector,
            'recommending_approval' => $recommendingapproval
        ]);

        return $id;

    }

    public function insertUpdatePurposeOfInspection($id, $data)
    {
        $now = new \DateTime();

        $checkData = DB::table('purpose_of_inspection')->where('report_id', $id)->first();

        if ($checkData) {

            //update
            $purpose_of_inspection = DB::table('purpose_of_inspection')->where('report_id', $id)->update([
                'verify_accuracy' => $data['verify-accuracy'],
                'determine_compliance_status' => $data['determine-compliance'],
                'investigate_community' => $data['investigate-community'],
                'check_status' => $data['check-status'],
                // 'others' => $req['secondPageData']['others'],
                'created_date' => $now->format('Y-m-d H:i:s'),
                'created_by' => auth()->user()->name,
            ]);

            if ($purpose_of_inspection) {
                return $checkData->id;
            }



        } else {

            //insert
            $purpose_of_inspection = DB::table('purpose_of_inspection')->insertGetId([
                'report_id' => $id,
                'verify_accuracy' => $data['verify-accuracy'],
                'determine_compliance_status' => $data['determine-compliance'],
                'investigate_community' => $data['investigate-community'],
                'check_status' => $data['check-status'],
                // 'others' => $data['others'],
                'created_date' => $now->format('Y-m-d H:i:s'),
                'created_by' => auth()->user()->name,
            ]);

            return $purpose_of_inspection;

        }

    }

    public function insertUpdateRecommendation($id, $data)
    {
        $now = new \DateTime();

        foreach ($data as $key => $value) {
            $check = DB::table('recommendation')
                ->where([
                    ['report_id', $id],
                    ['element_id', $value['id']]
                ])
                ->select('id')
                ->first();

            if (empty($check)) {
                $dateAdd = DB::table('recommendation')->insert([
                    'report_id' => $id,
                    'element_id' => $value['id'],
                    'value' => $value['value'],
                    'created_date' => $now->format('Y-m-d H:i:s'),
                    'created_by' => auth()->user()->name,
                ]);

            } else {
                DB::table('recommendation')->where([
                    ['report_id', $id],
                    ['element_id', $value['id']]
                ])->update([
                            'value' => $value['value']
                        ]);
            }
        }


        return 'sss';
    }

    public function insertUpdateDieselFueledGenerator($id, $req)
    {
        $now = new \DateTime();
        $error = [];

        $stackADateRaw = $req['diesel-fueled-generator-stack-a'][0][0];
        $stackADateRaw = explode(': ', $stackADateRaw);

        if (count($stackADateRaw) > 1) {
            $stackADate = str_replace('/', '-', $stackADateRaw[1]);

            // dd($stackADate);

            foreach ($req['diesel-fueled-generator-stack-a'] as $key => $value) {
                $check = DB::table('diesel_fueled_generator')->where([
                    ['report_id', $id],
                    ['set', 'Stack A'],
                    ['description', $value[0]],
                ])->select('id')->first();

                if ($key != 0) {

                    if ($check) {

                        try {
                            $data = DB::table('diesel_fueled_generator')
                                ->where([
                                    ['report_id', $id],
                                    ['set', 'Stack A'],
                                    ['description', $value[0]],
                                ])
                                ->update([
                                    // 'description' => $value[0],
                                    'sampling_date' => date("Y-m-d", strtotime($stackADate)),
                                    'average' => $value[1],
                                    'standard' => $value[2],
                                    'remarks' => $value[3],
                                ]);

                        } catch (\Throwable $e) {
                            report($e);

                            return false;

                            // array_push($error, $e);


                            // return $error;
                        }

                    } else {
                        // dd($value);
                        try {
                            $data = DB::table('diesel_fueled_generator')->insert([
                                'report_id' => $id,
                                'set' => 'Stack A',
                                'sampling_date' => date("Y-m-d", strtotime($stackADate)),
                                'description' => $value[0],
                                'average' => $value[1],
                                'standard' => $value[2],
                                'remarks' => $value[3],
                                'created_date' => $now->format('Y-m-d H:i:s'),
                                'created_by' => auth()->user()->name,
                            ]);

                        } catch (\Throwable $e) {
                            report($e);

                            return false;

                            // array_push($error, $e);


                            // return $error;
                        }
                    }
                }
            }

        }


        $stackBDateRaw = $req['diesel-fueled-generator-stack-a'][0][0];
        $stackBDateRaw = explode(': ', $stackBDateRaw);

        if (count($stackADateRaw) > 1) {

            $stackBDate = str_replace('/', '-', $stackBDateRaw[1]);

            foreach ($req['diesel-fueled-generator-stack-b'] as $key => $value) {
                $check = DB::table('diesel_fueled_generator')->where([
                    ['report_id', $id],
                    ['set', 'Stack B'],
                    ['description', $value[0]],
                ])->select('id')->first();
                if ($key != 0) {


                    if ($check) {

                        try {
                            $data = DB::table('diesel_fueled_generator')
                                ->where([
                                    ['report_id', $id],
                                    ['set', 'Stack B'],
                                    ['description', $value[0]],
                                ])
                                ->update([
                                    'sampling_date' => date("Y-m-d", strtotime($stackBDate)),
                                    'average' => $value[1],
                                    'standard' => $value[2],
                                    'remarks' => $value[3],
                                ]);

                        } catch (\Throwable $e) {
                            report($e);

                            // return false;

                            array_push($error, $e);


                            return $error;
                        }

                    } else {
                        try {
                            $data = DB::table('diesel_fueled_generator')->insert([
                                'report_id' => $id,
                                'set' => 'Stack B',
                                'sampling_date' => date("Y-m-d", strtotime($stackBDate)),
                                'description' => $value[0],
                                'average' => $value[1],
                                'standard' => $value[2],
                                'remarks' => $value[3],
                                'created_date' => $now->format('Y-m-d H:i:s'),
                                'created_by' => auth()->user()->name,
                            ]);

                        } catch (\Throwable $e) {
                            report($e);

                            // return false;

                            array_push($error, $e);


                            return $error;
                        }
                    }
                }
            }
        }


        return "success";
    }

    public function insertUpdateSummaryAndFindings($id, $req)
    {
        // findings_and_observation
        foreach ($req as $key => $value) {
            if ($key == 'air-quality-management') {
                $check = DB::table('findings_and_observation')->where([
                    ['report_id', $id],
                    ['permit', 'Air Quality Management'],
                ])->select('id')->first();

                $this->insertUpdateSummaryAndFindingsDatabase($check, $id, $value, 'Air Quality Management');

            } else if ($key == 'chemicals-management') {
                $check = DB::table('findings_and_observation')->where([
                    ['report_id', $id],
                    ['permit', 'Chemicals Management'],
                ])->select('id')->first();

                $this->insertUpdateSummaryAndFindingsDatabase($check, $id, $value, 'Chemicals Management');

            } else if ($key == 'environmental-impact-statement-system') {
                $check = DB::table('findings_and_observation')->where([
                    ['report_id', $id],
                    ['permit', 'Environmental Impact Statement System'],
                ])->select('id')->first();

                $this->insertUpdateSummaryAndFindingsDatabase($check, $id, $value, 'Environmental Impact Statement System');

            } else if ($key == 'hazard-waste-management') {
                $check = DB::table('findings_and_observation')->where([
                    ['report_id', $id],
                    ['permit', 'Hazardous Waste Management'],
                ])->select('id')->first();

                $this->insertUpdateSummaryAndFindingsDatabase($check, $id, $value, 'Hazardous Waste Management');

            } else if ($key == 'solid-waste-management') {
                $check = DB::table('findings_and_observation')->where([
                    ['report_id', $id],
                    ['permit', 'Solid Waste Management'],
                ])->select('id')->first();

                $this->insertUpdateSummaryAndFindingsDatabase($check, $id, $value, 'Solid Waste Management');

            } else if ($key == 'water-quality-management') {
                $check = DB::table('findings_and_observation')->where([
                    ['report_id', $id],
                    ['permit', 'Water Quality Management'],
                ])->select('id')->first();

                $this->insertUpdateSummaryAndFindingsDatabase($check, $id, $value, 'Water Quality Management');

            } else if ($key == 'commitment-to') {
                $check = DB::table('findings_and_observation')->where([
                    ['report_id', $id],
                    ['permit', 'Commitment to'],
                ])->select('id')->first();

                $this->insertUpdateSummaryAndFindingsDatabase($check, $id, $value, 'Commitment to');

            }
        }
        return $req;
    }

    public function insertUpdateSummaryAndFindingsDatabase($check, $id, $value, $permit)
    {
        $now = new \DateTime();
        $error = [];

        if ($check) {

            try {
                $data = DB::table('findings_and_observation')
                    ->where([
                        ['report_id', $id],
                        ['permit', $permit],
                    ])
                    ->update([
                        'details' => $value,
                    ]);

            } catch (\Throwable $e) {
                report($e);

                // return false;

                array_push($error, $e);


                return $error;
            }

        } else {
            try {
                $data = DB::table('findings_and_observation')->insert([
                    'report_id' => $id,
                    'permit' => $permit,
                    'details' => $value,
                    'created_date' => $now->format('Y-m-d H:i:s'),
                    'created_by' => auth()->user()->name,
                ]);

            } catch (\Throwable $e) {
                report($e);

                // return false;

                array_push($error, $e);


                return $error;
            }
        }

    }

    public function insertUpdateECCConditionalities($type, $id, $req)
    {
        $now = new \DateTime();
        $error = [];

        // Validate the value...

        foreach ($req as $key => $value) {
            $check = DB::table('law_citation_ecc_conditionalities')->where([
                ['report_id', $id],
                ['tr_id', $value[4]],
            ])->select('id')->first();

            if ($check) {

                try {
                    $data = DB::table('law_citation_ecc_conditionalities')
                        ->where([
                            ['report_id', $id],
                            ['tr_id', $value[4]],
                        ])
                        ->update([
                            'compliance_requirements' => $value[1],
                            'complied' => $value[2],
                            'remarks' => $value[3],
                            // 'tr_id' => $value[4],
                            // 'created_date' => $now->format('Y-m-d H:i:s'),
                            // 'created_by' => auth()->user()->name,
                        ]);

                } catch (\Throwable $e) {
                    report($e);

                    // return false;

                    array_push($error, $e);


                    return $error;
                }

            } else {
                try {
                    $data = DB::table('law_citation_ecc_conditionalities')->insert([
                        'report_id' => $id,
                        'applicable_law' => $value[0],
                        'compliance_requirements' => $value[1],
                        'complied' => $value[2],
                        'remarks' => $value[3],
                        'tr_id' => $value[4],
                        'created_date' => $now->format('Y-m-d H:i:s'),
                        'created_by' => auth()->user()->name,
                    ]);

                } catch (\Throwable $e) {
                    report($e);

                    // return false;

                    array_push($error, $e);


                    return $error;
                }
            }

        }

        return 'success';
    }

    public function insertUpdateRA6969($type, $id, $req)
    {
        $now = new \DateTime();
        $error = [];

        // Validate the value...

        foreach ($req as $key => $value) {

            $check = DB::table('law_citation_ra_6969')->where([
                ['report_id', $id],
                ['tr_id', $value[4]],
            ])->select('id')->first();

            if ($check) {

                try {
                    $data = DB::table('law_citation_ra_6969')
                        ->where([
                            ['report_id', $id],
                            ['tr_id', $value[4]],
                        ])
                        ->update([
                            'compliance_requirements' => $value[1],
                            'complied' => $value[2],
                            'remarks' => $value[3],
                            // 'tr_id' => $value[4],
                            // 'created_date' => $now->format('Y-m-d H:i:s'),
                            // 'created_by' => auth()->user()->name,
                        ]);

                } catch (\Throwable $e) {
                    report($e);

                    // return false;

                    array_push($error, $e);


                    return $error;
                }

            } else {
                try {
                    $data = DB::table('law_citation_ra_6969')->insert([
                        'report_id' => $id,
                        'applicable_law' => $value[0],
                        'compliance_requirements' => $value[1],
                        'complied' => $value[2],
                        'remarks' => $value[3],
                        'tr_id' => $value[4],
                        'created_date' => $now->format('Y-m-d H:i:s'),
                        'created_by' => auth()->user()->name,
                    ]);

                } catch (\Throwable $e) {
                    report($e);

                    // return false;

                    array_push($error, $e);


                    return $error;
                }
            }

        }


        return 'success';
    }


    public function insertUpdateRA8749($type, $id, $req)
    {

        $now = new \DateTime();
        $error = [];
        // Validate the value...

        foreach ($req as $key => $value) {

            $check = DB::table('law_citation_ra_8749')->where([
                ['report_id', $id],
                ['tr_id', $value[4]],
            ])->select('id')->first();

            if ($check) {

                try {
                    $data = DB::table('law_citation_ra_8749')
                        ->where([
                            ['report_id', $id],
                            ['tr_id', $value[4]],
                        ])
                        ->update([
                            'compliance_requirements' => $value[1],
                            'complied' => $value[2],
                            'remarks' => $value[3],
                            // 'tr_id' => $value[4],
                            // 'created_date' => $now->format('Y-m-d H:i:s'),
                            // 'created_by' => auth()->user()->name,
                        ]);

                } catch (\Throwable $e) {
                    report($e);

                    // return false;

                    array_push($error, $e);


                    return $error;
                }

            } else {
                try {
                    $data = DB::table('law_citation_ra_8749')->insert([
                        'report_id' => $id,
                        'applicable_law' => $value[0],
                        'compliance_requirements' => $value[1],
                        'complied' => $value[2],
                        'remarks' => $value[3],
                        'tr_id' => $value[4],
                        'created_date' => $now->format('Y-m-d H:i:s'),
                        'created_by' => auth()->user()->name,
                    ]);

                } catch (\Throwable $e) {
                    report($e);

                    // return false;

                    array_push($error, $e);


                    return $error;
                }
            }

        }

        return 'success';
    }

    public function insertUpdateRA9003($type, $id, $req)
    {

        $now = new \DateTime();
        $error = [];
        // Validate the value...

        foreach ($req as $key => $value) {

            $check = DB::table('law_citation_ra_9003')->where([
                ['report_id', $id],
                ['tr_id', $value[4]],
            ])->select('id')->first();

            if ($check) {

                try {
                    $data = DB::table('law_citation_ra_9003')
                        ->where([
                            ['report_id', $id],
                            ['tr_id', $value[4]],
                        ])
                        ->update([
                            'compliance_requirements' => $value[1],
                            'complied' => $value[2],
                            'remarks' => $value[3],
                            // 'tr_id' => $value[4],
                            // 'created_date' => $now->format('Y-m-d H:i:s'),
                            // 'created_by' => auth()->user()->name,
                        ]);

                } catch (\Throwable $e) {
                    report($e);

                    // return false;

                    array_push($error, $e);


                    return $error;
                }

            } else {
                try {
                    $data = DB::table('law_citation_ra_9003')->insert([
                        'report_id' => $id,
                        'applicable_law' => $value[0],
                        'compliance_requirements' => $value[1],
                        'complied' => $value[2],
                        'remarks' => $value[3],
                        'tr_id' => $value[4],
                        'created_date' => $now->format('Y-m-d H:i:s'),
                        'created_by' => auth()->user()->name,
                    ]);

                } catch (\Throwable $e) {
                    report($e);

                    // return false;

                    array_push($error, $e);


                    return $error;
                }
            }

        }

        return 'success';
    }

    public function insertUpdateRA9275($type, $id, $req)
    {

        $now = new \DateTime();
        $error = [];
        // Validate the value...

        foreach ($req as $key => $value) {

            $check = DB::table('law_citation_ra_9275')->where([
                ['report_id', $id],
                ['tr_id', $value[4]],
            ])->select('id')->first();

            if ($check) {

                try {
                    $data = DB::table('law_citation_ra_9275')
                        ->where([
                            ['report_id', $id],
                            ['tr_id', $value[4]],
                        ])
                        ->update([
                            'compliance_requirements' => $value[1],
                            'complied' => $value[2],
                            'remarks' => $value[3],
                            // 'tr_id' => $value[4],
                            // 'created_date' => $now->format('Y-m-d H:i:s'),
                            // 'created_by' => auth()->user()->name,
                        ]);

                } catch (\Throwable $e) {
                    report($e);

                    // return false;

                    array_push($error, $e);


                    return $error;
                }

            } else {
                try {
                    $data = DB::table('law_citation_ra_9275')->insert([
                        'report_id' => $id,
                        'applicable_law' => $value[0],
                        'compliance_requirements' => $value[1],
                        'complied' => $value[2],
                        'remarks' => $value[3],
                        'tr_id' => $value[4],
                        'created_date' => $now->format('Y-m-d H:i:s'),
                        'created_by' => auth()->user()->name,
                    ]);

                } catch (\Throwable $e) {
                    report($e);

                    // return false;

                    array_push($error, $e);


                    return $error;
                }
            }

        }

        return 'success';
    }

    public function insertUpdatePCOA($type, $id, $req)
    {

        $now = new \DateTime();
        $error = [];

        foreach ($req as $key => $value) {

            $check = DB::table('law_citation_pcoa')->where([
                ['report_id', $id],
                ['tr_id', $value[4]],
            ])->select('id')->first();

            if ($check) {

                try {
                    $data = DB::table('law_citation_pcoa')
                        ->where([
                            ['report_id', $id],
                            ['tr_id', $value[4]],
                        ])
                        ->update([
                            'compliance_requirements' => $value[1],
                            'complied' => $value[2],
                            'remarks' => $value[3],
                            // 'tr_id' => $value[4],
                            // 'created_date' => $now->format('Y-m-d H:i:s'),
                            // 'created_by' => auth()->user()->name,
                        ]);

                } catch (\Throwable $e) {
                    report($e);

                    // return false;

                    array_push($error, $e);


                    return $error;
                }

            } else {
                try {
                    $data = DB::table('law_citation_pcoa')->insert([
                        'report_id' => $id,
                        'applicable_law' => $value[0],
                        'compliance_requirements' => $value[1],
                        'complied' => $value[2],
                        'remarks' => $value[3],
                        'tr_id' => $value[4],
                        'created_date' => $now->format('Y-m-d H:i:s'),
                        'created_by' => auth()->user()->name,
                    ]);

                } catch (\Throwable $e) {
                    report($e);

                    // return false;

                    array_push($error, $e);


                    return $error;
                }
            }

        }

        return 'success';
    }

    public function insertUpdateSMR($type, $id, $req)
    {

        $now = new \DateTime();
        $error = [];

        foreach ($req as $key => $value) {

            $check = DB::table('law_citation_smr')->where([
                ['report_id', $id],
                ['tr_id', $value[4]],
            ])->select('id')->first();

            if ($check) {

                try {
                    $data = DB::table('law_citation_smr')
                        ->where([
                            ['report_id', $id],
                            ['tr_id', $value[4]],
                        ])
                        ->update([
                            'compliance_requirements' => $value[1],
                            'complied' => $value[2],
                            'remarks' => $value[3],
                            // 'tr_id' => $value[4],
                            // 'created_date' => $now->format('Y-m-d H:i:s'),
                            // 'created_by' => auth()->user()->name,
                        ]);

                } catch (\Throwable $e) {
                    report($e);

                    // return false;

                    array_push($error, $e);


                    return $error;
                }

            } else {
                try {
                    $data = DB::table('law_citation_smr')->insert([
                        'report_id' => $id,
                        'applicable_law' => $value[0],
                        'compliance_requirements' => $value[1],
                        'complied' => $value[2],
                        'remarks' => $value[3],
                        'tr_id' => $value[4],
                        'created_date' => $now->format('Y-m-d H:i:s'),
                        'created_by' => auth()->user()->name,
                    ]);

                } catch (\Throwable $e) {
                    report($e);

                    // return false;

                    array_push($error, $e);


                    return $error;
                }
            }

        }

        return 'success';
    }

    public function insertUpdateDENRPermits($type, $id, $req)
    {
        $now = new \DateTime();
        $array = [];

        if ($type == 'new') {

            if (!empty($req['permits-licenses-clearance'])) {

                foreach ($req['permits-licenses-clearance'] as $key => $value) {

                    if ($value[2] == 'N/A') {

                        $issued_date = 'N/A';
                        $expiry_date = 'N/A';

                    } else {

                        $issued_date = $value[3];
                        $issued_date = str_replace('/', '-', $issued_date);
                        $issued_date = date("Y-m-d", strtotime($issued_date));

                        $expiry_date = $value[4];
                        $expiry_date = str_replace('/', '-', $expiry_date);
                        $expiry_date = date("Y-m-d", strtotime($expiry_date));

                    }


                    try {
                        $denr_permits = DB::table('denr_permits')->insert([
                            'report_id' => $id,
                            'environmental_law' => $value[0],
                            'permits' => $value[1],
                            'issued' => $value[2],
                            'issued_date' => $issued_date,
                            'expiry_date' => $expiry_date,
                            'created_date' => $now->format('Y-m-d H:i:s'),
                            'created_by' => auth()->user()->name,
                        ]);

                    } catch (\Throwable $e) {
                        // report($e);
                        array_push($array, $e);

                        return $array;
                    }

                    return 'success';
                }
            }


        } else {

            $deletedata = DB::table('denr_permits')->where('report_id', $id)->delete();

            if (!empty($req['permits-licenses-clearance'])) {

                foreach ($req['permits-licenses-clearance'] as $key => $value) {

                    if ($value[2] == 'N/A') {

                        $issued_date = 'N/A';
                        $expiry_date = 'N/A';

                    } else {

                        $issued_date = $value[3];
                        $issued_date = str_replace('/', '-', $issued_date);
                        $issued_date = date("Y-m-d", strtotime($issued_date));

                        $expiry_date = $value[4];
                        $expiry_date = str_replace('/', '-', $expiry_date);
                        $expiry_date = date("Y-m-d", strtotime($expiry_date));

                    }

                    try {
                        $denr_permits = DB::table('denr_permits')->insert([
                            'report_id' => $id,
                            'environmental_law' => $value[0],
                            'permits' => $value[1],
                            'issued' => $value[2],
                            'issued_date' => $issued_date,
                            'expiry_date' => $expiry_date,
                            'created_date' => $now->format('Y-m-d H:i:s'),
                            'created_by' => auth()->user()->name,
                        ]);
                        // return 'success';
                    } catch (\Throwable $e) {
                        // report($e);
                        array_push($array, $e);


                        return $array;
                    }
                }

            }

            return 'success';
        }


    }

    public function insertUpdateEstablishmentPermit($type, $id, $req)
    {
        $now = new \DateTime();
        if ($type == 'new') {
            DB::table('establishment_permits')->insert([
                'poi_id' => $id,
                'pmpin' => isset($req['secondPageDataEstablishmentPermits']['pmpin']) ? $req['secondPageDataEstablishmentPermits']['pmpin'] : '',
                'hazwaste_id_reg' => isset($req['secondPageDataEstablishmentPermits']['hazwaste-id-reg']) ? $req['secondPageDataEstablishmentPermits']['hazwaste-id-reg'] : '',
                'hazwaste_trans_reg' => isset($req['secondPageDataEstablishmentPermits']['hazwaste-trans-reg']) ? $req['secondPageDataEstablishmentPermits']['hazwaste-trans-reg'] : '',
                'hazwaste_tsd_reg' => isset($req['secondPageDataEstablishmentPermits']['hazwaste-tsd-reg']) ? $req['secondPageDataEstablishmentPermits']['hazwaste-tsd-reg'] : '',
                'pto_apse' => isset($req['secondPageDataEstablishmentPermits']['pto-apse']) ? $req['secondPageDataEstablishmentPermits']['pto-apse'] : '',
                'discharge_permit' => isset($req['secondPageDataEstablishmentPermits']['discharge-permit']) ? $req['secondPageDataEstablishmentPermits']['discharge-permit'] : '',
                'created_date' => $now->format('Y-m-d H:i:s'),
                'created_by' => auth()->user()->name,
            ]);
        } else {
            DB::table('establishment_permits')->where('poi_id', $id)->update([
                'pmpin' => isset($req['secondPageDataEstablishmentPermits']['pmpin']) ? $req['secondPageDataEstablishmentPermits']['pmpin'] : '',
                'hazwaste_id_reg' => isset($req['secondPageDataEstablishmentPermits']['hazwaste-id-reg']) ? $req['secondPageDataEstablishmentPermits']['hazwaste-id-reg'] : '',
                'hazwaste_trans_reg' => isset($req['secondPageDataEstablishmentPermits']['hazwaste-trans-reg']) ? $req['secondPageDataEstablishmentPermits']['hazwaste-trans-reg'] : '',
                'hazwaste_tsd_reg' => isset($req['secondPageDataEstablishmentPermits']['hazwaste-tsd-reg']) ? $req['secondPageDataEstablishmentPermits']['hazwaste-tsd-reg'] : '',
                'pto_apse' => isset($req['secondPageDataEstablishmentPermits']['pto-apse']) ? $req['secondPageDataEstablishmentPermits']['pto-apse'] : '',
                'discharge_permit' => isset($req['secondPageDataEstablishmentPermits']['discharge-permit']) ? $req['secondPageDataEstablishmentPermits']['discharge-permit'] : '',
                'created_date' => $now->format('Y-m-d H:i:s'),
                'created_by' => auth()->user()->name,
            ]);
        }

    }

    public function insertUpdateInspectionReport($type, $req)
    {
        $now = new \DateTime();

        if ($type == 'new') {

            $effectivity_date = $req['firstPageData']['date-of-effectivity'];
            $effectivity_date = str_replace('/', '-', $effectivity_date);


            $expiry_date = $req['firstPageData']['date-of-expiry'];
            $expiry_date = str_replace('/', '-', $expiry_date);

            $InspectionReport = DB::table('inspection_report')->insertGetId([
                'emb_id' => $req['emb_id'],
                'address' => $req['firstPageData']['address'],
                'effectivity_date' => date("Y-m-d", strtotime($effectivity_date)),
                'expiry_date' => date("Y-m-d", strtotime($expiry_date)),
                'email' => $req['firstPageData']['email'],
                'establishment_name' => $req['firstPageData']['establishment-name'],
                'geo_coordinates' => $req['firstPageData']['geograpical-coordinates'],
                'managing_head' => $req['firstPageData']['managing-head'],
                'pco_name' => $req['firstPageData']['name-of-pco'],
                'nature_of_business' => $req['firstPageData']['nature-of-business'],
                'operating_hours_per_day' => $req['firstPageData']['operating-hours-day'],
                'operating_hours_per_week' => $req['firstPageData']['operating-hours-week'],
                'operating_hours_per_year' => $req['firstPageData']['operating-hours-year'],
                'pco_accreditation' => $req['firstPageData']['pco-accreditation-number'],
                'phone_fax_number' => $req['firstPageData']['phone-fax'],
                'product' => $req['firstPageData']['product'],
                'psic_code' => $req['firstPageData']['psic-code'],
                'year_established' => $req['firstPageData']['year-established'],
                'report_for' => json_encode($req['report-for']),
                'created_date' => $now->format('Y-m-d H:i:s'),
                'created_by' => auth()->user()->name,
                'with_NOV' => $req['with-nov']
            ]);

            return $InspectionReport;

        } else {
            $id = $req['id'];
            $effectivity_date = $req['firstPageData']['date-of-effectivity'];
            $effectivity_date = str_replace('/', '-', $effectivity_date);

            $expiry_date = $req['firstPageData']['date-of-expiry'];
            $expiry_date = str_replace('/', '-', $expiry_date);

            $InspectionReport = DB::table('inspection_report')->where('id', $req['id'])->update([
                'address' => $req['firstPageData']['address'],
                'effectivity_date' => date("Y-m-d", strtotime($effectivity_date)),
                'expiry_date' => date("Y-m-d", strtotime($expiry_date)),
                'email' => $req['firstPageData']['email'],
                'establishment_name' => $req['firstPageData']['establishment-name'],
                'geo_coordinates' => $req['firstPageData']['geograpical-coordinates'],
                'managing_head' => $req['firstPageData']['managing-head'],
                'pco_name' => $req['firstPageData']['name-of-pco'],
                'nature_of_business' => $req['firstPageData']['nature-of-business'],
                'operating_hours_per_day' => $req['firstPageData']['operating-hours-day'],
                'operating_hours_per_week' => $req['firstPageData']['operating-hours-week'],
                'operating_hours_per_year' => $req['firstPageData']['operating-hours-year'],
                'pco_accreditation' => $req['firstPageData']['pco-accreditation-number'],
                'phone_fax_number' => $req['firstPageData']['phone-fax'],
                'product' => $req['firstPageData']['product'],
                'psic_code' => $req['firstPageData']['psic-code'],
                'year_established' => $req['firstPageData']['year-established'],
                // 'created_date' => $now->format('Y-m-d H:i:s'),
                'created_by' => auth()->user()->name,
                'updated_date' => $now->format('Y-m-d H:i:s'),
            ]);

            return $InspectionReport;

        }


    }


    public function establishmentAll(Request $request)
    {
        //     $url = 'https://iis.emb.gov.ph/embis/api/Pbs/monsys_company_api';
        //     // $url = 'https://iis.emb.gov.ph/embis/api/Getdata/json_company_for_ecc?api_key=x&emb_id=EMBNCR-1053620-0002';
        //     // $url = 'https://192.168.91.193/embis/api/Pbs/monsys_company_api';

        //     // $response = Http::get('https://iis.emb.gov.ph/embis/api/Pbs/monsys_company_api');

        //     $client = new Client(['verify' => false]);
        //     $res = $client->get($url);

        //     $result = json_decode($res->getBody(), true);

        //    
        // dd($request->all());
        $project = DB::table('movies')->get();

        return DataTables::of($project)
            ->addColumn('Action', function ($project) {
                $details = '<a href="#" class="flex justify-between items-center" style="height: 80px">
                <h3 class="text-lg font-semibold">' . $project->moviename . '</h3>
                <p class="text-md text-gray-400">23m ago</p>
            </a>';
                return $details;
            })
            ->rawColumns(['Action'])
            ->make(true);
    }


    public function eccConditionalitites(Request $request)
    {
        $ecc_conditionalities = DB::table('ecc_conditionalities')->get();

        return DataTables::of($ecc_conditionalities)
            ->addColumn('ApplicableLaws', function ($ecc_conditionalities) {
                $details = $ecc_conditionalities->applicable_laws;
                return $details;
            })
            ->addColumn('ComplianceReq', function ($ecc_conditionalities) {
                $details = '<a style="display: block;
            width: 300px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap; "> ' . $ecc_conditionalities->compliance_req . '</a>';
                return $details;
            })
            ->addColumn('Complied', function ($ecc_conditionalities) {
                $details = '';
                return $details;
            })
            ->addColumn('Remarks', function ($ecc_conditionalities) {
                $details = '';
                return $details;
            })
            ->addColumn('Action', function ($ecc_conditionalities) {
                $details = '';
                return $details;
            })
            ->rawColumns(['ApplicableLaws', 'ComplianceReq', 'Complied', 'Remarks', 'Action'])
            ->make(true);
    }

    public function previewInspectionReport(Request $req)
    {

        $data = [];

        $checkifexist = DB::table('inspection_report')->where('id', $req->id)->select('id')->first();
        if ($checkifexist) {

            $inspection_report = DB::table('inspection_report')->where('id', $req->id)->first();
            $product_lines = DB::table('product_lines')->where('report_id', $checkifexist->id)->get();

            $data['inspection_report'] = $inspection_report;
            $data['product_lines'] = $product_lines;

            $purpose_of_inspection = DB::table('purpose_of_inspection')->where('report_id', $checkifexist->id)->first();
            $data['purpose_of_inspection'] = $purpose_of_inspection;

            // $establishment_permits = DB::table('establishment_permits')->where('poi_id', $purpose_of_inspection->id)->first();
            // $data['establishment_permits'] = $establishment_permits;

            if ($purpose_of_inspection) {
                $establishment_permits = DB::table('establishment_permits')->where('poi_id', $purpose_of_inspection->id)->first();
                $data['establishment_permits'] = $establishment_permits;
            }

            $denr_permits = DB::table('denr_permits')->where('report_id', $checkifexist->id)->get();
            $law_citation_ecc_conditionalities = DB::table('law_citation_ecc_conditionalities')->where('report_id', $checkifexist->id)->get();
            $law_citation_ra_6969 = DB::table('law_citation_ra_6969')->where('report_id', $checkifexist->id)->get();
            $law_citation_ra_8749 = DB::table('law_citation_ra_8749')->where('report_id', $checkifexist->id)->get();
            $law_citation_ra_9003 = DB::table('law_citation_ra_9003')->where('report_id', $checkifexist->id)->get();
            $law_citation_ra_9275 = DB::table('law_citation_ra_9275')->where('report_id', $checkifexist->id)->get();
            $law_citation_pcoa = DB::table('law_citation_pcoa')->where('report_id', $checkifexist->id)->get();
            $law_citation_smr = DB::table('law_citation_smr')->where('report_id', $checkifexist->id)->get();
            $findings_and_observation = DB::table('findings_and_observation')->where('report_id', $checkifexist->id)->get();
            $diesel_fueled_generator_stack_a = DB::table('diesel_fueled_generator')->where('report_id', $checkifexist->id)->where('set', 'Stack A')->get();
            $diesel_fueled_generator_stack_b = DB::table('diesel_fueled_generator')->where('report_id', $checkifexist->id)->where('set', 'Stack B')->get();

            $data['denr_permits'] = $denr_permits;
            $data['law_citation_ecc_conditionalities'] = $law_citation_ecc_conditionalities;
            $data['law_citation_ra_6969'] = $law_citation_ra_6969;
            $data['law_citation_ra_8749'] = $law_citation_ra_8749;
            $data['law_citation_ra_9003'] = $law_citation_ra_9003;
            $data['law_citation_ra_9275'] = $law_citation_ra_9275;
            $data['law_citation_pcoa'] = $law_citation_pcoa;
            $data['law_citation_smr'] = $law_citation_smr;
            $data['findings_and_observation'] = $findings_and_observation;
            $data['diesel_fueled_generator_stack_a'] = $diesel_fueled_generator_stack_a;
            $data['diesel_fueled_generator_stack_b'] = $diesel_fueled_generator_stack_b;

            $recommendation = DB::table('recommendation')->where('report_id', $checkifexist->id)->select('value')->get();
            $data['recommendation'] = $recommendation;

            $inspection = DB::table('inspection_report')->where('id', $req->id)->
                select('inspection_team', 'recommending_approval', 'regional_director', 'inspection_date')
                ->first();

            $data['inspection'] = $inspection;
        }

        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('user.report.inspection.pdf-preview', compact('data'));
        // $pdf->output();
        return $pdf->stream();


        // return view('user.report.inspection.preview', compact('data'));
    }

    public function previewNOVpdf(Request $req, $id)
    {
        $data = DB::table('nov')->where('id', $id)->first();
        $findings = DB::table('nov-findings')->where('nov_id', $id)->get();

        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('user.nov.pdf-preview', compact('data', 'findings'));
        $pdf->setPaper('legal', 'portrait');
        // $pdf->output();
        return $pdf->stream();
    }

    public function getReportbyID(Request $req)
    {
        $report_id = $req->report_id;
        $data = DB::table('inspection_report')->where('id', $report_id)->first();

        return $data;
    }


    public function linkToReport(Request $request)
    {
        $inspection_report = DB::table('inspection_report')
            ->where('emb_id', $request->emb_id)
            ->orderByRaw('id DESC')
            ->get();

        return DataTables::of($inspection_report)
            ->addColumn('report', function ($inspection_report) {
                $details = 'Inspection Report';
                return $details;
            })
            ->addColumn('action', function ($inspection_report) {
                $button = '<div class="btn-group">';
                $button .= '<button type="button" class="btn btn-default btn-flat" title="view" onclick="viewReport(' . $inspection_report->id . ', \'' . $inspection_report->emb_id . '\')"><i class="fa-solid fa-eye"></i></button>';

                if ($inspection_report->recommending_approval != '') {
                    $button .= '<button type="button" class="btn btn-default btn-flat" title="pdf" onclick="viewPDF(' . $inspection_report->id . ')"><i class="fa-solid fa-file fa-beat-fade"></i></button>';
                }
                $button .= '<button type="button" class="btn btn-success btn-flat" title="connect" onclick="Linking(' . $inspection_report->id . ', \'' . $inspection_report->emb_id . '\')"><i class="fa-solid fa-link"></i></button>';

                $button .= '</div>';

                return $button;
            })
            ->addColumn('report_for', function ($inspection_report) {
                $details = json_decode($inspection_report->report_for);
                return $details;
            })
            ->addColumn('created_date', function ($inspection_report) {

                $details = date('m/d/Y', strtotime($inspection_report->created_date));
                ;
                return $details;
            })
            ->rawColumns(['report', 'action', 'report_for', 'created_date'])
            ->make(true);
    }



    public function SavePerPage(Request $req)
    {
        $CurrentPage = $req->CurrentPage;

        if($CurrentPage == 1) {
            $data = $this->saveInspectionReportFirstPage($req);

            return $data;
        } elseif( $CurrentPage == 2 ) {
            try {



                $purpose_of_inspection = $this->insertUpdatePurposeOfInspection($req->id, $req['secondPageData']);

                if ($purpose_of_inspection) {
            
                    $establishment_permits = isset($req['secondPageDataEstablishmentPermits']) ? $req['secondPageDataEstablishmentPermits'] : '';

                    if (empty($establishment_permits)) {

                        DB::table('establishment_permits')->where('poi_id', $purpose_of_inspection)->delete();

                    } else {
                        $check = DB::table('establishment_permits')->where('poi_id', $purpose_of_inspection)->select('id')->first();

                        if ($check) {
                            $this->insertUpdateEstablishmentPermit('update', $purpose_of_inspection, $req);
                        } else {
                            $this->insertUpdateEstablishmentPermit('new', $purpose_of_inspection, $req);
                        }

                    }

                }

                DB::table('inspection_report')->where('id', $req->id)->update([
                    'step' => 2
                ]);

                return 'success';


            } catch (\Throwable $e) {
                report($e);


                return false;

            }


        } elseif( $CurrentPage == 3 ) {

            

            try {

                $insertUpdateDENRPermits = $this->insertUpdateDENRPermits('update', $req->id, $req);
                $insertUpdateECCConditionalities = $this->insertUpdateECCConditionalities('new', $req->id, $req['law-and-citation']['ecc']);
                $insertUpdateRA6969 = $this->insertUpdateRA6969('new', $req->id, $req['law-and-citation']['ra-6969']);
                $insertUpdateRA8749 = $this->insertUpdateRA8749('new', $req->id, $req['law-and-citation']['ra-8749']);
                $insertUpdateRA9003 = $this->insertUpdateRA9003('new', $req->id, $req['law-and-citation']['ra-9003']);
                $insertUpdateRA9275 = $this->insertUpdateRA9275('new', $req->id, $req['law-and-citation']['ra-9275']);
                $insertUpdatePCOA = $this->insertUpdatePCOA('new', $req->id, $req['law-and-citation']['pcoa']);
                $insertUpdateSMR = $this->insertUpdateSMR('new', $req->id, $req['law-and-citation']['smr']);
                $insertUpdateSummaryAndFindings = $this->insertUpdateSummaryAndFindings($req->id, $req['summary-findings-and-observations']);
                $insertUpdateDieselFueledGenerator = $this->insertUpdateDieselFueledGenerator($req->id, $req['diesel-fueled-generator']);

                DB::table('inspection_report')->where('id', $req->id)->update([
                    'step' => 3
                ]);

                return $req->id;

            } catch (\Throwable $e) {
                report($e);


                return false;

            }
            
        } elseif( $CurrentPage == 4 ) {

            

            $fourthPageData = $this->insertUpdateRecommendation($req->id, $req['fourthPageData']);
            
            DB::table('inspection_report')->where('id', $req->id)->update([
                'step' => 4
            ]);
        } elseif( $CurrentPage == 5 ) {
            
        }
    }

    public function saveInspectionReportFirstPage($req)
    {
        $now = new \DateTime();

        $checkifexist = DB::table('inspection_report')->where('id', $req['id'])->select('id')->first();
        
        if (empty($checkifexist)) {

            $effectivity_date = $req['firstPageData']['date-of-effectivity'];
            $effectivity_date = str_replace('/', '-', $effectivity_date);


            $expiry_date = $req['firstPageData']['date-of-expiry'];
            $expiry_date = str_replace('/', '-', $expiry_date);

            $InspectionReport = DB::table('inspection_report')->insertGetId([
                'emb_id' => $req['emb_id'],
                'address' => $req['firstPageData']['address'],
                'effectivity_date' => date("Y-m-d", strtotime($effectivity_date)),
                'expiry_date' => date("Y-m-d", strtotime($expiry_date)),
                'email' => $req['firstPageData']['email'],
                'establishment_name' => $req['firstPageData']['establishment-name'],
                'geo_coordinates' => $req['firstPageData']['geograpical-coordinates'],
                'managing_head' => $req['firstPageData']['managing-head'],
                'pco_name' => $req['firstPageData']['name-of-pco'],
                'nature_of_business' => $req['firstPageData']['nature-of-business'],
                'operating_hours_per_day' => $req['firstPageData']['operating-hours-day'],
                'operating_hours_per_week' => $req['firstPageData']['operating-hours-week'],
                'operating_hours_per_year' => $req['firstPageData']['operating-hours-year'],
                'pco_accreditation' => $req['firstPageData']['pco-accreditation-number'],
                'phone_fax_number' => $req['firstPageData']['phone-fax'],
                'product' => $req['firstPageData']['product'],
                'psic_code' => $req['firstPageData']['psic-code'],
                'year_established' => $req['firstPageData']['year-established'],
                'report_for' => json_encode($req['report-for']),
                'created_date' => $now->format('Y-m-d H:i:s'),
                'created_by' => auth()->user()->name,
                'with_NOV' => $req['with-nov'],
                'status' => 'draft',
                'step' => 1
            ]);

            $id = $InspectionReport;

                if (!empty($req['firstPageData']['product-lines-table'])) {
                    foreach ($req['firstPageData']['product-lines-table'] as $key => $value) {
                        DB::table('product_lines')->insert([
                            'report_id' => $id,
                            'product_lines' => $value[0],
                            'declared_rate_per_day' => $value[1],
                            'actual_rate_per_day' => $value[2],
                            'created_date' => $now->format('Y-m-d H:i:s'),
                            'created_by' => auth()->user()->name,
                        ]);
                    }
                }

            DB::table('reports_list')->insert([
                'emb_id' => $req['emb_id'],
                'report_type' => 'inspection',
                'report_id' => $id,
                'created_date' => $now->format('Y-m-d H:i:s'),
                'establishment_name' => $req['firstPageData']['establishment-name'],
                'created_by' => auth()->user()->name,
            ]);

            DB::table('report_to_nov')->insert([
                'report_type' => 'inspection',
                'report_id' => $id,
                'nov_id' => $req['related-nov-id'],
                'case_number' => $req['related-nov-text'],
                'with_nov_text' => $req['with-nov-text'],
                'created_date' => $now->format('Y-m-d H:i:s'),
                'created_by' => auth()->user()->name,
            ]);

            return $InspectionReport;

        } else {
            $id = $req['id'];
            $effectivity_date = $req['firstPageData']['date-of-effectivity'];
            $effectivity_date = str_replace('/', '-', $effectivity_date);

            $expiry_date = $req['firstPageData']['date-of-expiry'];
            $expiry_date = str_replace('/', '-', $expiry_date);

            $InspectionReport = DB::table('inspection_report')->where('id', $req['id'])->update([
                'address' => $req['firstPageData']['address'],
                'effectivity_date' => date("Y-m-d", strtotime($effectivity_date)),
                'expiry_date' => date("Y-m-d", strtotime($expiry_date)),
                'email' => $req['firstPageData']['email'],
                'establishment_name' => $req['firstPageData']['establishment-name'],
                'geo_coordinates' => $req['firstPageData']['geograpical-coordinates'],
                'managing_head' => $req['firstPageData']['managing-head'],
                'pco_name' => $req['firstPageData']['name-of-pco'],
                'nature_of_business' => $req['firstPageData']['nature-of-business'],
                'operating_hours_per_day' => $req['firstPageData']['operating-hours-day'],
                'operating_hours_per_week' => $req['firstPageData']['operating-hours-week'],
                'operating_hours_per_year' => $req['firstPageData']['operating-hours-year'],
                'pco_accreditation' => $req['firstPageData']['pco-accreditation-number'],
                'phone_fax_number' => $req['firstPageData']['phone-fax'],
                'product' => $req['firstPageData']['product'],
                'psic_code' => $req['firstPageData']['psic-code'],
                'year_established' => $req['firstPageData']['year-established'],
                // 'created_date' => $now->format('Y-m-d H:i:s'),
                'created_by' => auth()->user()->name,
                'updated_date' => $now->format('Y-m-d H:i:s'),
                'status' => 'draft',
                'step' => 1
            ]);

            DB::table('product_lines')->where('report_id', $checkifexist->id)->delete();

                if (!empty($req['firstPageData']['product-lines-table'])) {

                    foreach ($req['firstPageData']['product-lines-table'] as $key => $value) {
                        DB::table('product_lines')->insert([
                            'report_id' => $checkifexist->id,
                            'product_lines' => $value[0],
                            'declared_rate_per_day' => $value[1],
                            'actual_rate_per_day' => $value[2],
                            'created_date' => $now->format('Y-m-d H:i:s'),
                            'created_by' => auth()->user()->name,
                        ]);
                    }
                }

            return $req['id'];

        }
    }

    public function deleteReport(Request $req)
    {
        $id = $req->id;

        try {

            $data = DB::table('inspection_report')->where('id', $id)->delete();

            return "success";

        } catch (\Throwable $e) {

            report($e);

            return false;

        }

    }

    public function uploadfile(Request $request)
    {
        $now = new \DateTime();
        $emb_id = $request->emb_id;
        $id = $request->id;
        $remarks = $request->remarks;
        $getMAC = exec('getmac');
        $MAC = explode(" ", $getMAC);

        $validator = Validator::make($request->all(), [
            // 'file' => 'required|mimes:pdf,jpeg,png,jpg,gif,geojson'
            // |max:2048
        ]);
        // $file = $request->file('file');

        if ($validator->fails()) {
            $rtrn['success'] = 0;
            $rtrn['message'] = $validator->errors()->first('file'); // Error response

        } else {
            if ($request->file('file')) {
                $file = $request->file('file');
                $filename = $file->getClientOriginalName();

                // $filename = $NewGUID;

                // filesize
                $size = $file->getSize();
                $filesize = $size * 0.001;
                // File extension
                $extension = $file->getClientOriginalExtension();

                $path = public_path('Files/Compliance/'. $emb_id . '/' . $id . '/');
                // $savedFiles = $pdf->saveAs($urlSavePDF);

                if (!File::exists($path)) {
                    File::makeDirectory($path, $mode = 0755, true, true);

                    // File upload location
                    $location = 'Files/Compliance/'. $emb_id . '/' . $id . '/';

                    // // Upload file
                    $file->move($location, $filename . '.' . $extension);

                } else {
                    $location = 'Files/Compliance/'. $emb_id . '/' . $id . '/';

                    $file->move($location, $filename . '.' . $extension);
                }

                // File path
                // $filepath = public_path('files/'.$NewGUID.'.'.$extension);
                $filepath = 'Files/Compliance/'. $emb_id . '/' . $id . '/' . $filename . '.' . $extension;

                // Response
                $rtrn['success'] = 1;
                $rtrn['message'] = 'Uploaded Successfully!';

                $data['emb_id'] = $emb_id;
                $data['report_id'] = $id;
                $data['remarks'] = $remarks;
                $data['directory'] = public_path();
                $data['file_name'] = $filename;
                $data['file_path'] = $filepath;
                $data['file_extension'] = $extension;
                // $data['extension'] = $extension;
                $data['file_size_in_kb'] = $filesize;
                $data['created_date'] = $now->format('Y-m-d H:i:s');

                $save = DB::table('compliance_pictures')->insert($data);

                if ($save) {
                    $rtrn['success'] = 1;
                    $rtrn['message'] = 'File uploaded.';
                }
            } else {
                // Response
                $rtrn['success'] = 2;
                $rtrn['message'] = 'File not uploaded.';
            }
        }

        return $rtrn;
    }


    public function uploadFileInvestigation(Request $request)
    {
        $now = new \DateTime();
        $emb_id = $request->emb_id;
        $id = $request->id;
        $getMAC = exec('getmac');
        $MAC = explode(" ", $getMAC);

        $validator = Validator::make($request->all(), [
            // 'file' => 'required|mimes:pdf,jpeg,png,jpg,gif,geojson'
            // |max:2048
        ]);
        // $file = $request->file('file');

        if ($validator->fails()) {
            $rtrn['success'] = 0;
            $rtrn['message'] = $validator->errors()->first('file'); // Error response

        } else {
            if ($request->file('file')) {
                $file = $request->file('file');
                $filename = $file->getClientOriginalName();

                // $filename = $NewGUID;

                // filesize
                $size = $file->getSize();
                $filesize = $size * 0.001;
                // File extension
                $extension = $file->getClientOriginalExtension();

                $path = public_path('Files/Investigation/'. $emb_id . '/' . $id . '/');
                // $savedFiles = $pdf->saveAs($urlSavePDF);

                if (!File::exists($path)) {
                    File::makeDirectory($path, $mode = 0755, true, true);

                    // File upload location
                    $location = 'Files/Investigation/'. $emb_id . '/' . $id . '/';

                    // // Upload file
                    $file->move($location, $filename . '.' . $extension);

                } else {
                    $location = 'Files/Investigation/'. $emb_id . '/' . $id . '/';

                    $file->move($location, $filename . '.' . $extension);
                }

                // File path
                // $filepath = public_path('files/'.$NewGUID.'.'.$extension);
                $filepath = 'Files/Investigation/'. $emb_id . '/' . $id . '/' . $filename . '.' . $extension;

                // Response
                $rtrn['success'] = 1;
                $rtrn['message'] = 'Uploaded Successfully!';

                $data['emb_id'] = $emb_id;
                $data['report_id'] = $id;
                $data['directory'] = public_path();
                $data['file_name'] = $filename;
                $data['file_path'] = $filepath;
                $data['file_extension'] = $extension;
                // $data['extension'] = $extension;
                $data['file_size_in_kb'] = $filesize;
                $data['created_date'] = $now->format('Y-m-d H:i:s');

                $save = DB::table('investigation_pictures')->insert($data);

                if ($save) {
                    $rtrn['success'] = 1;
                    $rtrn['message'] = 'File uploaded.';
                }
            } else {
                // Response
                $rtrn['success'] = 2;
                $rtrn['message'] = 'File not uploaded.';
            }
        }

        return $rtrn;
    }



    public function getfile(Request $request)
    {
        $emb_id = $request->emb_id;
        $id = $request->id;

        $data = DB::table('compliance_pictures')->where([
            'emb_id' => $emb_id,
            'report_id' => $id
        ])->get();

        return $data;
    }

    public function getFileInvestigation(Request $request)
    {
        $emb_id = $request->emb_id;
        $id = $request->id;

        $data = DB::table('investigation_pictures')->where([
            'emb_id' => $emb_id,
            'report_id' => $id
        ])->get();

        return $data;
    }

    public function deleteInvestigationPicture(Request $request)
    {
        $data = DB::table('investigation_pictures')->where([
            'id' => $request->id
        ])->delete();

        return 'success';
    }

    public function saveInvestigation(Request $request)
    {
        $existingid = $request->id;
        $emb_id = $request->emb_id;
        $lawsapplicable = $request->lawsapplicable;
        $nameofrespondent = $request->nameofrespondent;
        $addressofrespondent = $request->addressofrespondent;
        $natureofcomplaint = $request->natureofcomplaint;
        $complainant = $request->complainant;
        $addressofcomplainant = $request->addressofcomplainant;
        $dateofinspection = $request->dateofinspection;
        $purposeofinspection = $request->purposeofinspection;
        $dateofsubmission = $request->dateofsubmission;
        $background = $request->background;
        $proceedings = $request->proceedings;
        $remarks = $request->remarks;
        $withnov = $request->withnov;
        $reportfor = $request->reportfor;

        $now = new \DateTime();

        if ( $existingid == 0 ) {

            $id = DB::table('investigation_report')->insertGetId([
                'emb_id' => $emb_id,
                'laws_applicable' => $lawsapplicable,
                'name_of_respondent' => $nameofrespondent,
                'address_of_respondent' => $addressofrespondent,
                'nature_of_complaint' => $natureofcomplaint,
                'complainant' => $complainant,
                'address_of_complaint' => $addressofcomplainant,
                'date_of_inspection' => date('Y-m-d', strtotime($dateofinspection)),
                'purpose_of_inspection' => $purposeofinspection,
                'date_of_submission' => date('Y-m-d', strtotime($dateofsubmission)),
                'background' => $background,
                'report_for' => json_encode($reportfor),
                'with_NOV' => $withnov,
                'remarks' => $remarks,
                // 'prepared_by' => $lawsapplicable,
                // 'concurred_by' => $lawsapplicable,
                // 'noted_by' => $lawsapplicable,
            ]);

            $paf = $this->saveInvestigationPAF($request);
            $reco = $this->saveInvestigationReco($request);

            $data = DB::table('reports_list')->insert([
                'emb_id' => $emb_id,
                'report_type' => 'investigation',
                'report_id' => $id,
                'created_date' => $now->format('Y-m-d H:i:s'),
                'establishment_name' => $nameofrespondent,
                'created_by' => auth()->user()->name,
            ]);

            return $id;

        } else {

            DB::table('investigation_report')->where([
                'id' => $existingid,
                'emb_id' => $emb_id,
            ])->update([
                'laws_applicable' => $lawsapplicable,
                'name_of_respondent' => $nameofrespondent,
                'address_of_respondent' => $addressofrespondent,
                'nature_of_complaint' => $natureofcomplaint,
                'complainant' => $complainant,
                'address_of_complaint' => $addressofcomplainant,
                'date_of_inspection' => date('Y-m-d', strtotime($dateofinspection)),
                'purpose_of_inspection' => $purposeofinspection,
                'date_of_submission' => date('Y-m-d', strtotime($dateofsubmission)),
                'background' => $background,
                'remarks' => $remarks,
            ]);

            $paf = $this->saveInvestigationPAF($request);
            $reco = $this->saveInvestigationReco($request);

            return $existingid;

        }
        
    }

    public function saveInvestigationPAF($request)
    {
        $now = new \DateTime();

        $check = DB::table('investigation_paf')->where([
            'report_id' => $request->id,
            'emb_id' => $request->emb_id,
        ])->first();

        if(!empty($check)) {
            DB::table('investigation_paf')->where([
                'report_id' => $request->id,
                'emb_id' => $request->emb_id,
            ])->delete();
        }

        if(!empty($request->paf)){

            foreach($request->paf as $paf){
                $data = DB::table('investigation_paf')->insert([
                    'report_id' => $request->id,
                    'emb_id' => $request->emb_id,
                    'created_date' => $now->format('Y-m-d H:i:s'),
                    'proceedings_and_findings' => $paf
                ]);
            }

        }


        return 'success';
    }

    public function saveInvestigationReco($request)
    {
        $now = new \DateTime();

        $check = DB::table('investigation_recommendations')->where([
            'report_id' => $request->id,
            'emb_id' => $request->emb_id,
        ])->first();

        if(!empty($check)) {
            DB::table('investigation_recommendations')->where([
                'report_id' => $request->id,
                'emb_id' => $request->emb_id,
            ])->delete();
        }

        if(!empty($request->reco)){

            foreach($request->reco as $reco){
                $data = DB::table('investigation_recommendations')->insert([
                    'report_id' => $request->id,
                    'emb_id' => $request->emb_id,
                    'created_date' => $now->format('Y-m-d H:i:s'),
                    'recommendations' => $reco
                ]);
            }

        }

        

        return 'success';
    }

    public function getInvestigation(Request $request)
    {
        $data = [];
        $data['report'] = DB::table('investigation_report')->where([
            'emb_id' => $request->emb_id,
            'id' => $request->report_id,
        ])->first();

        $data['paf'] = DB::table('investigation_paf')->where([
            'emb_id' => $request->emb_id,
            'report_id' => $request->report_id,
        ])->get();


        $data['reco'] = DB::table('investigation_recommendations')->where([
            'emb_id' => $request->emb_id,
            'report_id' => $request->report_id,
        ])->get();


        return $data;
    }

    public function novListSelect(Request $request)
    {
        $data = DB::table('nov')->get();

        return $data;
    }

}