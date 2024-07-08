<?php

namespace App\Library;

class DisplayPath {

    public static function aws_s3_url()
    {
        // return isset(auth('restaurant')->user()->id) ? route('restaurant.aws.fetch') : route('admin.aws.fetch') ;
        return route('admin.aws.fetch') ;
    }

    public static function aws_s3_api_url()
    {
        return route('api.aws.fetch') ;
    }

    public static function user_profile_picture($path = '')
    {
        return DisplayPath::aws_s3_url()."?path=$path";
    }

    public static function fetch_file($path = '')
    {
        return DisplayPath::aws_s3_api_url()."?path=$path";
    }

    public static function user_profile_default_icon()
    {
        return url('assets/images/icon/user.png');
    }

    public static function local_storage($path = '')
    {
        if ($path !== '') {
            return url('app').'/'.$path;
        }
        return url('app');
    }

    public static function no_image()
    {
        return url('assets/images/icon/no-image-icon.png');
    }

    public static function userFolderName($user_id = 0)
    {
        $hex = 'USER'.$user_id;
        return strtoupper(base_convert($hex, 36, 32));
    }
}

?>
