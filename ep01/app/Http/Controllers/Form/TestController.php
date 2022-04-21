<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function listUser($id){
        $user = User::findOrFail($id);
        return view('list_user', compact('user'));
    }

    public function listAllUsers(){
        $users = User::all();
        return view('list_all_users', compact('users'));
    }
}
