<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidatePhoto extends Model
{
    use HasFactory;
    protected $table = 'candidate_photos';
    protected $fillable = ['reg_no','photo_url'];
}
