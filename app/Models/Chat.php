<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    protected $table = 'chats';
    protected $fillable = ['user_chat','status','user_reg_no','user_photo_url'];

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('D, d M Y H:i');
    }
    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('D, d M Y H:i');
    }
}
