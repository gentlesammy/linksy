<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Link;
class LinkController extends Controller
{
    //get all the available links for this user
    public function index(){
        $links = Auth::user()->links()
        ->orderBy('created_at', 'desc')
        ->orderBy('updated_at', 'asc')
        ->paginate(20);
        return view('user.links.index', compact('links'));
    }

    //create link form
    public function create(){
        return view('user.links.create');
    }

    //store link
    public function store(Request $request){
        $request->validate([
            "name" => "required|max:255",
            "link" => "required|active_url|max:255"
        ]);
        $link = Auth::user()->links()->create($request->only(["name", "link"]));
        if($link){
            return redirect()->to("/dashboard/links")->with('success','Link created successfully!');
        }
        return redirect()->back();
    }

    //edit link
    public function edit(Link $link){
        if($link->user_id != Auth::id()){
            return abort(401);
        }
        return view('user.links.edit', compact('link'));
    }

    //update link
    public function update(Request $request, Link $link){
        if($link->user_id != Auth::id()){
            return abort(401);
        }
        $request->validate([
            "name" => "required|max:255",
            "link" => "required|active_url|max:255"
        ]);

        $updatedLink = $link->update($request->only(["name", "link"]));
        if($updatedLink){
            return redirect()->to("/dashboard/links")->with('success','Link Updated successfully!');
        }
        return redirect()->back()->with('warning','Link Update failed!');
    }

    //delete link
    public function destroy(Request $request, Link $link){
        if($link->user_id != Auth::id()){
            return abort(401);
        }

        $link->delete();

        return redirect()->to("/dashboard/links")->with('success','Link deleted successfully!');

    }














}
