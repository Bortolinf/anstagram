<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_sent',
        'user_recive'
    ];
    
    public function usersent(){
        return $this->belongsTo(User::class);
    }

    public function userrecive(){
        return $this->belongsTo(User::class);
    }

    public function messages(){
        return $this->hasMany(Message::class, 'chat_id');
    }
}
