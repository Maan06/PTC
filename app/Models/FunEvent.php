<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FunEvent extends Model
{
    use HasFactory;
    protected $table = "fun_event_images";
    protected $primarykey = "id";
}
