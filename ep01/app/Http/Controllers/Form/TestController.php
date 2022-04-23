<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

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
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        #return redirect("/user/{$user->id}");
        return redirect()->route('users.listAll');
    }

    public function update($id){
        $user = User::findOrFail($id);
        return view('user.edit_user', compact('user'));
    }

    public function edit(User $user, Request $request){
        #$user = User::findOrFail($request->id);
        
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)]
        ]);

        if(!$validator->fails()){
            $user->name = $request->name;
            $user->email = $request->email;
        }

        if($request->password){
            $user->password = Hash::make($request->password);
        }



        $user->save();
        return redirect()->route('users.listAll');
    }


    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.listAll');
    }

}
