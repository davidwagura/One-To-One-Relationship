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
}