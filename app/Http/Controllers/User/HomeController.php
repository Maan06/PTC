<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Mailjet\LaravelMailjet\Facades\Mailjet;
use \Mailjet\Resources;
use App\Library\MailLibrary;
use App\Library\GlobalFunction;
use App\Mail\ContactUsMail;
use App\Library\Structure;
use App\Models\Postjob;
use App\Models\appliedcandidates;
use Illuminate\Support\Facades\Validator;
use DB;
use Image;
use Storage, File;


class HomeController extends Controller
{
    use Structure, MailLibrary, GlobalFunction;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth:admin');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        return view('user.index');
    }

    public function about(Request $request)
    {
        return view('user.about');
    }

    public function services(Request $request)
    {
        return view('user.services');
    }

    public function products(Request $request)
    {
        return view('user.products');
    }

    public function career(Request $request)
    { 
        $job_search = isset($request->job_search) ? $request->job_search : 'All';
        $location = isset($request->location) ? $request->location : 'All';
        $post_data = DB::table('job_posts')->where('is_active', 'Yes')->where('status', 'Y');
        if($job_search != 'All')
        {
            $post_data->where('job_title', 'like', "%$job_search%");
        }
        if($location != 'All')
        {
            $post_data->where('location', 'like', "%$location%");
        }
        $posts = $post_data->get();
        if(isset($posts[0]))
        {
            foreach($posts as $post)
            {
                $created_at = $this->timeago(date('Y-m-d', strtotime($post->created_at)));
                $post->created_at = $created_at;
            }
        }
        $data['posts'] = $posts;
        return view('user.career')->with($data);
    }

    public function contact_us(Request $request)
    {
        return view('user.contact_us');
    }

    public function submit_contact_us(Request $request)
    {
      $validator = Validator::make($request->all(), 
      [ 
        'company' => 'required',   
        'name' => 'required',   
        'email' => 'required',   
        'contact' => 'required|min:10|max:10',   
        'message' => 'required',   
      ]);

      if ($validator->fails()) {
          return response()->json(["status" => false, 'message' => $validator->errors()->first()]);
      }
      
      $data = [
            'company' => $request->company,
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'message' => $request->message,
              ];

      $save = DB::table('contact_us')->insertGetId($data);  
      // SEND MAIL 
      $input['name'] = $request->name;
      $input['company'] = $request->company;
      $input['email'] = $request->email;
      $input['contact'] = $request->contact;
      $input['message'] = $request->message;
      $emailContent = (new ContactUsMail($input))->render();
      $this->sendMail($request->email, 'Contact Us', $emailContent);
      // END
      if($save)
      {
        return response()->json(["status" => true, 'message' => 'Data Saved Successfully']);
      } 
      return response()->json(["status" => false, 'message' => 'Something went wrong, try again later!']);
    }

    public function job_apply(Request $request)
    {
      $validator = Validator::make($request->all(), 
      [  
        'full_name' => 'required',   
        'email' => 'required|email',   
        'contact' => 'required|min:10|max:10',   
        'job_description' => 'required',   
        'file' => 'required|mimes:pdf',   
      ]);

      if ($validator->fails()) {
          return response()->json(["status" => false, 'message' => $validator->errors()->first()]);
      }
      
      $resume = NULL;
      if ($request->hasfile('file'))
      {
          $file = $request->file('file');
          $ext = $request->file('file')->getClientOriginalExtension();

          if(!Storage::exists('public/resume'))
          {
              Storage::makeDirectory('public/resume', 0775, true); //creates directory
          }
          $resume = rand(111111, 999999).'_resume.'.$ext;
          $file->storeAs('public/resume', $resume);
      }

      $data = [
            'job_id' => $request->job_id,
            'name' => $request->full_name,
            'job_description' => $request->job_description,
            'email' => $request->email,
            'contact' => $request->contact,
            'file' => $resume,
              ];

      $save = DB::table('applied_candidates')->insertGetId($data);  
      if($save)
      {
        return response()->json(["status" => true, 'message' => 'Form submitted Successfully']);
      } 
      return response()->json(["status" => false, 'message' => 'Something went wrong, try again later!']);
    }
}
