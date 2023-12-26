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
        return Carbon::parse($value)->format('H:i');
    }
    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('H:i');
    }
    public function labelDate($date)
    {
        $carbonDate = Carbon::parse($date);
        $yesterday = Carbon::yesterday();

        if ($carbonDate->isSameDay($yesterday)) {
            return 'Yesterday';
        } else {
            return $carbonDate->format('H:i');
        }
    }
}
