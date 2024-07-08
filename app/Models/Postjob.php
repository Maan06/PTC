<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Postjob extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'company_id',
        'company_profile',
        'company_name',
        'no_of_days_posted_ago',
        'job_role',
        'company_address',
        'job_type',
        'website',
        'status',
    ];

   
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'created_at' => 'datetime:d M,Y h:iA',
        'updated_at' => 'datetime:d M,Y h:iA',
        'deleted_at' => 'datetime'
    ];

}
