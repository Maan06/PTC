<?php

namespace App\Library;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Storage;

class Fileupload extends Controller
{

    public function uploadToPublic($image, $path, $filename)
    {
        // $file->move($path, $filename);
        // return $filename;
        $storage = Storage::disk(name: 's3');
        $storage->putFileAs($path, $image, $filename);
        return $filename;
    }

    public function uploadToPrivate($image, $path, $filename)
    {
        $storage = Storage::disk(name: 's3');
        $storage->putFileAs($path, $image, $filename);
        return $filename;
    }

    public function fetchAwsFile(Request $request)
    {
        $storage = Storage::disk('s3');
        $response = $storage->response($request->path);
        return $response;
    }

    public function userPathCreator($id)
    {
        $str = "BBOUSER".$id;
        return strtoupper(base_convert($str, 36, 32));
    }

    public function driverPathCreator($id)
    {
        $str = "BBODRIVER".$id;
        return strtoupper(base_convert($str, 36, 32));
    }

    public function adminPathCreator($id)
    {
        $str = "BBOADMIN".$id;
        return strtoupper(base_convert($str, 36, 32));
    }

    // Newly added for BB Overseas
    public function vehicleDirectoryCreator($id)
    {
        $str = "VEHICLE".rand(1000, 9999).$id;
        return strtoupper(base_convert($str, 36, 32));
    }

    public function saveImage($target_id, $target_type, $source, $path, $file)
    {
        $img = new Image;
        $img->target_id = $target_id;
        $img->target_type = $target_type;
        $img->source = $source;
        $img->path = $path;
        $img->file = $file;
        $img->target_id = $target_id;
        if($img->save())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

}

