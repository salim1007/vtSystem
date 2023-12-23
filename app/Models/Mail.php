<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    use HasFactory;
    protected $table = 'mails';
    protected $fillable = ['mail_body','sender_reg_no'];

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('H:i');
    }
    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('H:i');
    }

}
