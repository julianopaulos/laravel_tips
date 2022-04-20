<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function listUser(){
        /*$user = new User();
        $user->name = 'John';
        $user->email = 'John@example.com';
        $user->password = 'password';
        $user->save();*/
        $user = User::find(1);
        return view('list_users', compact('user'));
    }
}
