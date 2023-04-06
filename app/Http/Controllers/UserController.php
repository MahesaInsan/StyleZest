<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UserController extends Controller
{
    public function listUser(){
        $users = Users::all();
    }

    public function registerUser(Request $request){
        Users::insert([
            'name' => $request->inName,
            'email' => $request->inEmail,
            'password' => $request->inPass,
            'pnum' => $request->inPnum,
            'address' => $request->inAddr
        ]);

    }
}
