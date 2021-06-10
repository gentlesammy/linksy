<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function homepage(){
        return view('site.index');
    }

    public function aboutpage(){
        return view('site.about');
    }

    public function contactpage(){
        return view('site.contact');
    }

    public function terms(){
        return view('site.terms');
    }

    public function workings(){
        return view('site.workings');
    }

    public function usage(){
        return view('site.usage');
    }







}
