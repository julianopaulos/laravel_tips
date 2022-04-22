<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function listUser($id){
        $user = User::findOrFail($id);
        return view('user.list_user', compact('user'));
    }

    public function listAllUsers(){
        $users = User::all();
        return view('user.list_all_users', compact('users'));
    }

    public function create(){
        return view('user.create');
    }

    public function store(Request $request){

    }
}
