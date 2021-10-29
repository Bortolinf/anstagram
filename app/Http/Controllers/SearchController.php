<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SearchController extends Controller
{
    public function search($nick_name){
        return User::select(['id','name','nick_name','profile_photo_path'])
        ->where('nick_name','like','%'.$nick_name.'%')
        ->get();
    }
}
