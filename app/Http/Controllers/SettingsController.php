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

    //update_description
    public function update_description (Request $request){ 
        $updateDesc = Auth::user()->update($request->only("description"));
        
        if($updateDesc){
            return redirect()->to("/dashboard/settings")->with('success','Description Updated successfully!');
        }
        return redirect()->back()->with('warning','Description Update failed!');
    }

    public function update_image(Request $request){
        $data = request()->validate([
            'dp' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);
       if ($files = $request->file('dp')) {
        $destinationPath = 'img/dp/'; // upload path
        $dp =Auth::user()->username . "linkster" . "." . $files->getClientOriginalExtension();
        $files->move($destinationPath, $dp);
        // $img = Image::make($destinationPath.$dp)->fit(300, 300);
     }
        $user = Auth::user();
        $user->dp = $dp;
        if($user->save()){
            return redirect()->to("/dashboard/settings")->with('success','Your Display Picture Updated successfully!');
        }
        return redirect()->back()->with('warning','Display Picture Update failed!');
    }


    
}
