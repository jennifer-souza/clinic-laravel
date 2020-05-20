<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TestController extends Controller
{
    public function listAllUsers()
    {
        $users = User::all();
       // dd($users);

       return view('listAllUsers', [
           'usersList' => $users
       ]);
    }

    public function listUser(User $user)
    {
        return view('listUser', [
            'userList' => $user
        ]);
    }

    public function formAddUser()
    {
        return view('addUser');
    }

    public function storeUser(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('users.listAll');
    }
    
    public function edit()
    {

    }
}
