<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Library\Structure;
use DB;

class ContactUsController extends Controller
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
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.contact_us');
    }

    /**
     * Show data in datatable.
     */
    public function data(Request $request){
        $query = DB::table('contact_us');

        // if ($request->status && $request->status != 'All') {
        //     $query->where("is_active", $request->status);
        // }

        $data = $query->where("is_active", 'Yes')->orderBy('id', 'desc')->get();
        return datatables()->of($data)
        ->addColumn('action', function ($data) {

            $button = '<div class="btn-group">';
            $button .= '<a href="javascript:void()" name="delete" data-value="'.$data->id.'" class="status-btn btn btn-sm btn-danger"><i class="bx bxs-trash-alt"></i></a>';
            $button .= '</div>';

            return $button;
        })
        ->addColumn('status', function ($data) {
            if ($data->is_active == 'Yes') {
                return '<span class="badge badge-light-info">Active</span>';
            }
            return '<span class="badge badge-light-danger">In-Active</span>';
        })->addColumn('contact', function ($data) {
            if (isset($data->contact)) {
                return $data->contact;
            }
            return '-';
        })->addColumn('name', function ($data) {
            if (isset($data->name)) {
                return $data->name;
            }
            return '-';
        })->addColumn('email', function ($data) {
            if (isset($data->email)) {
                return $data->email;
            }
            return '-';
        })->addColumn('company', function ($data) {
            if (isset($data->company)) {
                return $data->company;
            }
            return '-';
        })->addColumn('message', function ($data) {
            if (isset($data->message)) {
                return $data->message;
            }
            return '-';
        })->rawColumns(['action', 'contact', 'name', 'email', 'company', 'message'])->make(true);
    }

    public function status(Request $request){

        if ($request->status == 'delete') {
           $data = ['is_active' => 'No'];
        } 
        // else {
        //   if ($request->status == 'enable') {
        //     $data = ['is_active'=>'Yes', 'updated_at' => date('Y-m-d H:i:s')];
        //   }
        //   else{
        //      $data = ['is_active'=>'No', 'updated_at' => date('Y-m-d H:i:s')];
        //   }
        // }
        $response = DB::table('contact_us')->where('id', $request->id)->update($data);

        if ($response > 0) {
            if ($request->status == 'delete') {
              return response()->json($this->structure(true, "Deleted Succesfully."), 200);
            }
            return response()->json($this->structure(true, "Status Updated Succesfully"), 200);
        }
        return response()->json($this->structure(false, "Somthing went wrong, try again!"), 200);
    }
}
