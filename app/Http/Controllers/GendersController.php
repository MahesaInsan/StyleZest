<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gender;
use App\Models\Custom;

class GendersController extends Controller
{
    public function getGenders(){
        $genders = Gender::all();
        $custom = Custom::first();

        return view('admin.genderindex', ['genders' => $genders, 'custom' => $custom]);
    } 
    
    public function addGenders(){
        $genderName = Gender::all();
        //$genderDesc = Gender::all();
        $custom = Custom::first();

        return view('admin.addgender', ['genderName' => $genderName, 'custom' => $custom]);
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
        $custom = Custom::first();
    
        return view('admin.editgender', ['gender' => $gender, 'genderName' => $genderName, 'custom' => $custom]);
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
