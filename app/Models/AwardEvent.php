<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AwardEvent extends Model
{
    use HasFactory;
    protected $table = "award_event_images";
    protected $primarykey = "id";
}
