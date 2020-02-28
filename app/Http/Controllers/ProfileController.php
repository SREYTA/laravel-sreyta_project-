<?php

namespace App\Http\Controllers;
use App\Profile;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showUserName(){
        $profile = Profile::find(1);
        return $profile -> user -> name;
    }
}
