<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', [
            'users' => $users
        ]);
    }

    public function edit_profile()
    {
        $item = User::findOrFail(Auth::user()->id);

        return view('admin.edit-profile', [
            'item' => $item
        ]);
    }

    public function edit_password()
    {
        return view('admin.edit-password');
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
