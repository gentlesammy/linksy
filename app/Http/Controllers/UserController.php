<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
   public function index(User $user){
       if($user){
         return view('site.user', compact('user'));
       }
       return abort(404);
   }

   public function userHome (User $user){
    $user_links = $user->links()->where('blocked', 0)->orderBy('created_at', 'desc')
    ->orderBy('updated_at', 'asc')->get();
    return  response()->json(["user" => $user, "links"=>$user_links]);
   }





}
