<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class UsersController extends Controller
{
    public function index(){
        $users = User::where("id", "!=", Auth::user()->id)->orderBy('created_at', 'desc')
        ->orderBy('updated_at', 'asc')
        ->paginate(20);
        return view("admin.users.index", compact('users'));
        
    }

}
