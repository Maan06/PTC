<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorporateEvent extends Model
{
    use HasFactory;
    protected $table = "corporate_images";
    protected $primarykey = "id";
}
