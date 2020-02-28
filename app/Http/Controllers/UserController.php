<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;


class UserController extends Controller
{

    

    // add 2 profile 
    public function addProfiles(){
        // $user = User::find(1);
        // $user->profile() -> create(){
        //     'phone' => '012 000 999';
        //     'address' => 'Takeo';
        // };



        $user = User::find(1);
        $profile = new Profile();
        $profile -> address = 'Kampot';
        $profile -> phone = '010 999 888';
        $profile -> users_id = $user -> id;
        $profile -> save();

        $user = User::find(2);
        $profile = new Profile();
        $profile -> address = 'Phnom Penh';
        $profile -> phone = '012 777 666';
        $profile -> users_id = $user -> id;
        $profile -> save();
            
        return 'sucess for add profile';
    }

    // get all result from user
    public function showProfile(){
        $user = User::all();
        return view('profiles.profile', compact('user'));
        
    }

    public function updateProfile(){
        $user  = User::all();
        dd($user);
        // $user->profile()->Updata(['phone'=>'010999888']);
    }
    
}
