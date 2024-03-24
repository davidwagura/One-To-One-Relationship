<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mobile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function addUserMobile()
    {
        $user = new User;
        $user->name = "Test Name";
        $user->email = "test@mnp.com";
        $user->password = Hash::make("12345678");
        $user->save();

        $mobile = new Mobile;
        $mobile->mobile = '123456789';
        $user->mobile()->save($mobile);
    }
    public function index()
    {
        // get user and mobile data from User model
        $user = User::find(1);
        var_dump($user->name);
        var_dump($user->mobile->mobile);
    
        // get user data from Mobile model
        $user = Mobile::find(1)->user;
        dd($user);
    
        // get mobile number from User model
        $mobile = User::find(1)->mobile;
        dd($mobile);
    }
}