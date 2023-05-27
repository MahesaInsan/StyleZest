<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Custom;       


class CustomsController extends Controller
{
    public function getCustoms(){
        $customs = Custom::all();

        return view('admin.customizewebindex', ['customs' => $customs]);
    }
    
    public function saveCustoms(Request $request){
        $logo = $request->file('logo');
        $logoName = time() . '.' . $logo->extension();
        $logo->storeAs('public/images/customs', $logoName);

        $bannerimg = $request->file('bannerimg');
        $bannerimgName = time() . '.' . $bannerimg->extension();
        $bannerimg->storeAs('public/images/customs', $bannerimgName);

        $loginimg = $request->file('loginimg');
        $loginimgName = time() . '.' . $loginimg->extension();
        $loginimg->storeAs('public/images/customs', $loginimgName);

        Custom::insert([
            'company' => $request->company,
            'maincolor' => $request->maincolor,
            'bgcolor' => $request->bgcolor,
            'sidebar' => $request->sidebar,
            'buttoncolor' => $request->buttoncolor,
            'logo' => $logoName,
            'bannerimg' => $bannerimgName,
            'loginimg' => $loginimgName
        ]);
        
        return redirect()->back()->with('success', 'Customization made successfully!');
    }

    public function editCustoms($id){
        $custom = Custom::find($id);
        $company = Custom::all();
        $maincolor = Custom::all();
        $bgcolor = Custom::all();
        $sidebar = Custom::all();
        $buttoncolor = Custom::all();
        $logo = Custom::all();
        $bannerimg = Custom::all();
        $loginimg = Custom::all();
        
        return view('/admin/editcustomizeweb', ['custom' => $custom, 'company' => $company, 'maincolor' => $maincolor,
         'bgcolor' => $bgcolor, 'sidebar' => $sidebar, 'buttoncolor' => $buttoncolor, 'logo' => $logo,
         'bannerimg' => $bannerimg, 'loginimg' => $loginimg]);
    }

    public function updateCustoms($id, Request $request){
        $custom = Custom::find($id);

        $custom->company = $request->company;
        $custom->maincolor = $request->maincolor;
        $custom->bgcolor = $request->bgcolor;
        $custom->sidebar = $request->sidebar;
        
        Storage::delete('public/images/customs' . $custom->logo);
        $logo = $request->file('logo');
        $logoName = time() . '.' . $logo->extension();
        $logo->storeAs('public/images/customs', $logoName);
        $custom->logo = $logoName;

        Storage::delete('public/images/customs' . $custom->bannerimg);
        $bannerimg = $request->file('bannerimg');
        $bannerimgName = time() . '.' . $bannerimg->extension();
        $bannerimg->storeAs('public/images/customs', $bannerimgName);
        $custom->bannerimg = $bannerimgName;

        Storage::delete('public/images/customs' . $custom->loginimg);
        $loginimg = $request->file('loginimg');
        $loginimgName = time() . '.' . $loginimg->extension();
        $loginimg->storeAs('public/images/customs', $loginimgName);
        $custom->loginimg = $loginimgName;

        $custom->save();

        return redirect('/admin/customizeweb')->with('success', 'Customization made successfully!');
    }
}
