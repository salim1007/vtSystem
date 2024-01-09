<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElectionDate extends Model
{
    use HasFactory;
    protected $table = 'election_dates';
    protected $fillable = ['description','start_date','end_date'];
}
