<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Mailjet\Client;
use Mailjet\Resources;
use Illuminate\Http\Request;
use App\Models\appliedcandidates;
use App\Library\Structure;
use Validator;
use Storage;
use DataTable, DB;


class AppliedCandidateController extends Controller
{
    use Structure;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Show the application dashboard.
     */
    public function index()
    {
        return view('admin.candidate.index');
    }
    
    public function data(Request $request)
    {
        if($request->ajax())
        {
            $query = DB::table('applied_candidates');
            
            $data = $query->where("status", 'Y')->orderBy('id', 'desc')->get();
            return datatables()->of($data)
            ->addColumn('action', function ($data) {

                $button = '<div class="btn-group">';
                // if ($data->is_active == 'Yes') {
                //     $button .= '<a href="javascript:void()" name="disable" data-value="'.$data->id.'" class="status-btn btn btn-sm btn-danger"><i class="bx bx-block"></i></a>';
                // }
                // else{
                //     $button .= '<a href="javascript:void()" name="enable" data-value="'.$data->id.'" class="status-btn btn btn-sm btn-success"><i class="bx bx-check-double"></i></i></a>';
                // }
                $button .= '<a href="javascript:void()" name="delete" data-value="'.$data->id.'" class="status-btn btn btn-sm btn-danger"><i class="bx bxs-trash-alt"></i></a>';
                $button .= '</div>';

                return $button;
            })
            ->addColumn('status', function ($data) {
                if ($data->is_active == 'Yes') {
                    return '<span class="badge badge-light-info">Active</span>';
                }
                return '<span class="badge badge-light-danger">In-Active</span>';
            })->addColumn('job_title', function ($data) {
                if (isset($data->job_id)) {
                    return DB::table('job_posts')->where('id', $data->job_id)->value('job_title');
                }
                return '-';
            })->addColumn('name', function ($data) {
                if (isset($data->name)) {
                    return $data->name;
                }
                return '-';
            })->addColumn('contact', function ($data) {
                if (isset($data->contact)) {
                    return $data->contact;
                }
                return '-';
            })->addColumn('email', function ($data) {
                if (isset($data->email)) {
                    return $data->email;
                }
                return '-';
            })->addColumn('resume', function ($data) {
                if (isset($data->file)) {
                    $file = asset('storage/resume/'.$data->file);
                    $file_data = '<a href="'.$file.'"><img src="'.asset('app-assets/images/pdf.png').'" height="50" width="50"></a>';
                    return $file_data;
                }
                return '-';
            })->addColumn('job_description', function ($data) {
                if (isset($data->job_description)) {
                    return $data->job_description;
                }
                return '-';
            })->rawColumns(['action', 'job_title', 'name', 'contact', 'email', 'resume', 'job_description', 'status'])->make(true);

        }
    }

    public function status(Request $request)
    {

        if ($request->status == 'delete') {
            $data = ['status' => 'N'];
        } else {
            if ($request->status == 'enable') {
                $data = ['is_active' => 'Yes', 'updated_at' => date('Y-m-d H:i:s')];
            } else {
                $data = ['is_active' => 'No', 'updated_at' => date('Y-m-d H:i:s')];
            }
        }
        $response = DB::table('applied_candidates')->where('id', $request->id)->update($data);

        if ($response > 0) {
            if ($request->status == 'delete') {
                return response()->json($this->structure(true, "Deleted Succesfully."), 200);
            }
            return response()->json($this->structure(true, "Status Updated Succesfully"), 200);
        }
        return response()->json($this->structure(false, "Somthing went wrong, try again!"), 200);
    }
}
