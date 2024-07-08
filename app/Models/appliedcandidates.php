<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appliedcandidates extends Model
{
    use HasFactory;
    protected $table = "applied_candidates";
    protected $fillable = [
        'name',
        'candidates_email',
        'contact_no',
        'upload_resume',
        'total_experience',
    ];
}
