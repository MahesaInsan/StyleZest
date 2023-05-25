<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gender;

class GendersController extends Controller
{
    public function getGenders(){
        $genders = Gender::all();

        return view('admin.genderindex', ['genders' => $genders]);
    } 
    
    public function addGenders(){
        $genderName = Gender::all();
        //$genderDesc = Gender::all();

        return view('admin.addgender', ['genderName' => $genderName]);
    }

    public function saveGenders(Request $request){
        Gender::insert([
            'genderName' => $request->genderName,
        ]);

        return redirect()->back()->with('success', 'Gender added successfully!');
    }

    public function editGenders($id){
        $gender = Gender::find($id);
        $genderName = Gender::all();
    
        return view('admin.editgender', ['gender' => $gender, 'genderName' => $genderName]);
    }

    public function updateGenders($id, Request $request){
        $gender = Gender::find($id);

        $gender->genderName = $request->genderName;
        $gender->save();

        return redirect('/admin/gender')->with('success', 'Gender updated successfully.');
    }

    public function deleteGenders($id){
        $gender = Gender::find($id);
    
        if ($gender) {
            $gender->delete();
        }

        return redirect()->back()->with('success', 'Gender deleted successfully');
    }
}
