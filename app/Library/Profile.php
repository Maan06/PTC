<?php
namespace App\Library;
use App\Models\User;
use App\Models\Partner;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Timeslot;
use App\Models\Setting;
use App\Models\Service;
use App\Models\Stock;
use DB;
use App\Library\Fileupload;
use App\Library\DisplayPath;
use App\Library\CoinAccount;

class Profile
{
    public $user_id, $user_type;
    public function __construct()
    {
      $this->user_id = isset(auth()->user()->id) ? auth()->user()->id : 0;
      $this->user_type = 'User';
    }

    public function checkUserMobile($mobile, $id = NULL)
    {
        $table = User::query();
        if(isset($id))
        {
            $table->where('id', '!=', $id);
        }
        $user = $table->where('mobile', $mobile)->where("status", "Active")->first();
        if(isset($user->mobile))
        {
            return $user->id;
        }
        else
        {
            return 0;
        }
    }

    public function checkUserEmail($email, $id = NULL)
    {
        $table = User::query();
        if(isset($id))
        {
            $table->where('id', '!=', $id);
        }
        $user = $table->where('email', $email)->where("status", "Active")->first();
        if(isset($user->email))
        {
            return $user->id;
        }
        else
        {
            return 0;
        }
    }

    public function validateStockSerialNumber($serial_number, $type, $id = NULL)
    {
        $table = Stock::query();
        if(isset($id))
        {
            $table->where('id', '!=', $id);
        }
        $stock = $table->where('serial_number', $serial_number)->where('type', $type)->first();
        if(isset($stock->serial_number))
        {
            return $stock->id;
        }
        else
        {
            return 0;
        }
    }

    public function checkPartnerMobile($mobile, $type, $id = NULL)
    {
        $table = Partner::query();
        if(isset($id))
        {
            $table->where('id', '!=', $id);
        }
        $partner = $table->where('mobile', $mobile)->where('type', $type)->where("status", "Accepted")->first();
        if(isset($partner->mobile))
        {
            return $partner->id;
        }
        else
        {
            return 0;
        }
    }

    public function checkPartnerEmail($email, $type, $id = NULL)
    {
        $table = Partner::query();
        if(isset($id))
        {
            $table->where('id', '!=', $id);
        }
        $partner = $table->where('email', $email)->where('type', $type)->where("status", "Accepted")->first();
        if(isset($partner->email))
        {
            return $partner->id;
        }
        else
        {
            return 0;
        }
    }
    
    public function butifyUserProfile($id)
    {
        $fileupload = new Fileupload;
        $displayPath = new DisplayPath;

        $user = User::join('countries as c', 'users.country_id', '=', 'c.id', 'left')
            ->join('states as s', 'users.state_id', '=', 's.id', 'left')
            ->join('cities as ct', 'users.city_id', '=', 'ct.id', 'left')
            ->where('users.id', $id)
            ->select('users.*', 'c.name as country_name', 's.name as state_name', 'ct.name as city_name')
            ->first();
        if(isset($user->id))
        {
            $user_profile_pic = NULL;
            $path = NULL;
            if (isset($user->profile_photo))
            {
                $path = $displayPath->fetch_file($user->path);
                $user_profile_pic = $path.'/'.$user->profile_photo;
            }

            $each_coin_amount = Setting::where('key_name', 'each_coin_amount')->where('status', 'Active')->value('key_value');

            $account = new CoinAccount($user->id, $this->user_type);
            $coin_balance = $account->balance();

            $dump = new \stdClass();
            $dump->id = $user->id;
            $dump->name = $user->name;
            $dump->email = $user->email;
            $dump->mobile = $user->mobile;
            $dump->country_code = $user->country_code;
            $dump->profile_photo = $user_profile_pic;
            $dump->provider_id = $user->provider_id;
            $dump->referral_code = $user->referral_code;
            $dump->latitude = $user->latitude;
            $dump->longitude = $user->longitude;
            $dump->address = $user->address;
            $dump->country_id = $user->country_id;
            $dump->state_id = $user->state_id;
            $dump->city_id = $user->city_id;
            $dump->country_name = $user->country_name;
            $dump->state_name = $user->state_name;
            $dump->city_name = $user->city_name;
            $dump->role = $user->role;
            $dump->device_token = $user->device_token;
            $dump->each_coin_amount = isset($each_coin_amount) ? floatval($each_coin_amount) : 0;
            $dump->balance_coins = isset($coin_balance) ? floatval($coin_balance) : 0;
            return $dump;
        }
        return NULL;

    }

    public function butifyPartnerProfile($id)
    {
        $fileupload = new Fileupload;
        $displayPath = new DisplayPath;

        $partner = DB::table('partners as p')
        ->join('countries as c', 'p.country_id', '=', 'c.id', 'left')
        ->join('states as s', 'p.state_id', '=', 's.id', 'left')
        ->join('cities as ct', 'p.city_id', '=', 'ct.id', 'left')
        ->select('p.*', 'c.code as country_code', 'c.name as country_name', 's.name as state_name', 'ct.name as city_name')
        ->where('p.id', $id)
        ->first();
        if(isset($partner->id))
        {
            $partner_profile_pic = NULL;
            $path = NULL;
            if (isset($partner->profile_photo))
            {
                $path = $displayPath->fetch_file($partner->path);
                $partner_profile_pic = $path.'/'.$partner->profile_photo;
            }

            $categories = NULL;
            if(isset($partner->categories))
            {
                $categoryIds = explode(',', $partner->categories);
                $categories = Category::whereIn('id', $categoryIds)->select('id', 'name')->get();
            }

            $order_types = NULL;
            if(isset($partner->order_types))
            {
                $order_types = explode(',', $partner->order_types);
            }

            $services = NULL;
            if(isset($partner->services))
            {
                $services = isset($partner->services) ? json_decode($partner->services) : NULL;
            }

            $service_images = NULL;
            if(isset($partner->service_images))
            {
                $service_images = json_decode($partner->service_images);
                if(isset($service_images[0]))
                {
                    foreach($service_images as $service_img)
                    {
                        $image = NULL;
                        $path = NULL;
                        if(isset($service_img->filename))
                        {
                            $path = $displayPath->fetch_file($service_img->path);
                            $image = $path.'/'.$service_img->filename;
                        }
                        $service_img->image = $image;
                    }
                }
            }

            $documents = NULL;
            if(isset($partner->document))
            {
                $documents = json_decode($partner->document);
                if(isset($documents[0]))
                {
                    foreach($documents as $doc)
                    {
                        $image = NULL;
                        $path = NULL;
                        if(isset($doc->filename))
                        {
                            $path = $displayPath->fetch_file($doc->path);
                            $image = $path.'/'.$doc->filename;
                        }
                        $doc->image = $image;
                    }
                }
            }

            $dump = new \stdClass();
            $dump->id = $partner->id;
            $dump->user_id = $partner->user_id;
            $dump->type = $partner->type;
            $dump->profile_photo = $partner_profile_pic;
            $dump->path = $partner->path;
            $dump->name = $partner->name;
            $dump->email = $partner->email;
            $dump->mobile = $partner->mobile;
            $dump->latitude = $partner->latitude;
            $dump->longitude = $partner->longitude;
            $dump->address = $partner->address;
            $dump->country_id = $partner->country_id;
            $dump->state_id = $partner->state_id;
            $dump->city_id = $partner->city_id;
            $dump->country_code = $partner->country_code;
            $dump->country_name = $partner->country_name;
            $dump->state_name = $partner->state_name;
            $dump->city_name = $partner->city_name;
            $dump->pincode = $partner->pincode;
            $dump->reason = $partner->reason;
            $dump->order_types = $order_types;
            $dump->is_featured = $partner->is_featured;
            $dump->categories = $categories;
            $dump->services = $services;
            $dump->service_images = $service_images;
            $dump->about = $partner->about;
            $dump->is_free_self_picking = $partner->is_free_self_picking;
            $dump->each_person_amount = $partner->each_person_amount;
            $dump->show_contacts = $partner->show_contacts;
            $dump->partner_type = $partner->partner_type;
            $dump->document_name = $partner->document_name;
            $dump->document_number = $partner->document_number;
            $dump->document = $documents;
            $dump->is_live = $partner->is_live;
            return $dump;
        }
        return NULL;

    }

}