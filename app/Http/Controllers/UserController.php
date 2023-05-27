<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Custom;

class UserController extends Controller
{   
    // aaa
    public function index()
    {
        $users = User::all();
        $custom = Custom::first();
        return view('admin.users.index', [
            'users' => $users,
            'custom' => $custom
        ]);
    }

    public function edit_profile()
    {
        $item = User::findOrFail(Auth::user()->id);
        $custom = Custom::first();

        return view('admin.edit-profile', [
            'item' => $item,
            'custom' => $custom
        ]);
    }

    public function edit_password()
    {
        $custom = Custom::first();
        return view('admin.edit-password', [
            'custom' => $custom
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        User::findOrFail($id)->update($data);
        return redirect()->back();
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->back();
    }
}
