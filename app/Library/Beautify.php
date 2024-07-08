<?php

namespace App\Library;

use App\Models\User;
use DB;

class Beautify
{
    // public function userOBJ($data){ 

    //     if ($image = $data->image)
    //         $data->profile_picture = $this->url."?path=".$image->path.'/'.$image->file;
        
    //     else
    //         $data->profile_picture = $this->no_image;

    //     $data->bio = null;
    //     $data->website = null;
    //     $data->latitude = null;
    //     $data->longitude = null;
    //     $data->location = null;
    //     if ($profile = $data->profile) {
    //         $data->bio = $profile->bio;
    //         $data->website = $profile->website;
    //         $data->latitude = $profile->latitude;
    //         $data->longitude = $profile->longitude;
    //         $data->location = $profile->location;
    //     }

    //     //remove all the unnecessary data.
    //     unset($data->is_active, $data->image, $data->profile);

    //     return $data;
    // }


    public function timeago($date)
    {
        $timestamp = strtotime($date);

        $strTime = array("s", "m", "h", "d", "month", "y");
        $length = array("60", "60", "24", "30", "12", "10");

        $currentTime = time();
        if ($currentTime >= $timestamp) {
            $diff     = time() - $timestamp;
            for ($i = 0; $diff >= $length[$i] && $i < count($length) - 1; $i++) {
                $diff = $diff / $length[$i];
            }

            $diff = round($diff);
            return $diff . $strTime[$i];
        }

        return false;
    }

    public function getRatingLabel($rating)
    {
      $rating_label = 'Bad';
      if(isset($rating) && floatval($rating)>0)
      {
        if(floatval($rating)>1 && floatval($rating)<=2)
        {
          $rating_label = 'Not Bad';
        }
        else if(floatval($rating)>2 && floatval($rating)<=3)
        {
          $rating_label = 'Good';
        }
        else if(floatval($rating)>3 && floatval($rating)<=4)
        {
          $rating_label = 'Very Good';
        }
        else if(floatval($rating)>4 && floatval($rating)<=5)
        {
          $rating_label = 'Excellent';
        }
      }
      return $rating_label;
    }

    function random_code($length)
    {
        $random = strtoupper(substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $length));
        $final_code = 'RVG'.$random;

        $userCount = User::where('referral_code', $final_code)->count();
        if($userCount<=0)
        {
            return $final_code;
        }
        else
        {
            $this->random_code(6);
        }
    }


    function checkRandomCode()
    {
      $main_arr = [];
      for($i=0; $i<=10000; $i++)
      {
        $main_arr[] = $this->checkCode($main_arr);
      }
      $unique_arr = array_unique($main_arr);
      $duplicate_record = array_diff_assoc($main_arr, $unique_arr);//get difference
      dd($duplicate_record, $main_arr);
    }

    function checkCode($array)
    {
      $length = 6;
      $random = strtoupper(substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $length));
      $code = 'GAAS'.$random;
      if(!in_array($code, $array))
      {
        $array[] = $code;
        return $code;
      }
      else
      {
        $this->checkCode($array);
      }
    }
}   

