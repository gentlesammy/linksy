<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class SettingsController extends Controller
{
    public function index(){
        return view("user.settings.index");
    }


    public function update_color (Request $request){
        $update_colors = Auth::user()->update($request->only(["background", "color"]));
        if($update_colors){
            return redirect()->to("/dashboard/settings")->with('success','Background color Updated successfully!');
        }
        return redirect()->back()->with('warning','color Update failed!');
    }
}
