<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateVideo extends Model
{
    use HasFactory;
    protected $table = 'candidate_videos';
    protected $fillable = ['reg_no','video_url'];
}
