<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Library\Structure;
use Validator;
use Storage;
use App\Library\Beautify;
use App\Library\Fileupload;
use App\Library\Profile;
use DB;


class AdminJobPostContoller extends Controller
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
      return view('admin.postjob.index');
  }

  public function data(Request $request)
  {
      if($request->ajax())
      {
          $query = DB::table('job_posts');

          // if ($request->status && $request->status != 'All') {
          //     $query->where("is_active", $request->status);
          // }

          $data = $query->where("status", 'Y')->orderBy('id', 'desc')->get();
          return datatables()->of($data)
          ->addColumn('action', function ($data) {

              $button = '<div class="btn-group">';
              $button .= '<a href="javascript:void()" data-value="'.$data->id.'" class="edit-btn btn btn-sm btn-primary"><i class="bx bx-edit" ></i></a>';
              if ($data->is_active == 'Yes') {
                  $button .= '<a href="javascript:void()" name="disable" data-value="'.$data->id.'" class="status-btn btn btn-sm btn-danger"><i class="bx bx-block"></i></a>';
              }
              else{
                  $button .= '<a href="javascript:void()" name="enable" data-value="'.$data->id.'" class="status-btn btn btn-sm btn-success"><i class="bx bx-check-double"></i></i></a>';
              }
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
              if (isset($data->job_title)) {
                  return $data->job_title;
              }
              return '-';
          })->addColumn('job_type', function ($data) {
              if (isset($data->job_type)) {
                  return $data->job_type;
              }
              return '-';
          })->addColumn('location', function ($data) {
              if (isset($data->location)) {
                  return $data->location;
              }
              return '-';
          })->rawColumns(['action', 'job_title', 'job_type', 'location', 'status'])->make(true);

      }
  }

  /* 
  *
  *add  modal and store data inside the database
  *
  *
  */

  public function getData(Request $request){
    if(isset($request->id))
    {
      $data = DB::table('job_posts')->where('id', $request->id)->first();
      if(isset($data))
      {
        return response()->json([ "status" => true, 'message' => 'Data fetched Succesfully', 'data' => $data]);
      }
      return response()->json([ "status" => true, 'message' => 'Data not found!', 'data' => NULL]);
    }
    return response()->json([ "status" => false, 'message' => 'Something went wrong, try again later !']);
  }

  public function save(Request $request)
  {
      $validator = Validator::make($request->all(), 
      [ 
        'job_title' => 'required',   
        'job_type' => 'required',   
        'job_location' => 'required', 
      ]);

      if ($validator->fails()) {
          return response()->json(["status" => false, 'message' => $validator->errors()->first()]);
      }

      $job_type = implode(',', $request->job_type);

      $data = [
                'job_title' => $request->job_title,
                'job_type' => $job_type,
                'location' => $request->job_location,
              ];

      if(isset($request->id))
      {
        $save = DB::table('job_posts')->where('id', $request->id)->update($data);
        return response()->json([ "status" => true, 'message' => 'Job updated Succesfully']);
      }
      else
      {
        $save = DB::table('job_posts')->insertGetId($data);
      }

      if ($save) {
          return response()->json([ "status" => true, 'message' => 'Job added Succesfully']);
      } else {
          return response()->json([ "status" => false, 'message' => 'Something went wrong, try again later !']);
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
      $response = DB::table('job_posts')->where('id', $request->id)->update($data);

      if ($response > 0) {
          if ($request->status == 'delete') {
              return response()->json($this->structure(true, "Deleted Succesfully."), 200);
          }
          return response()->json($this->structure(true, "Status Updated Succesfully"), 200);
      }
      return response()->json($this->structure(false, "Somthing went wrong, try again!"), 200);
  }
}
