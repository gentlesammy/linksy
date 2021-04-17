<?php

namespace App\Http\Controllers;
use App\Models\Visit;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    public function store(Request $request){
        $visit = new Visit;
        $visit->link_id = $request->get('linkId');
        $visit->user_agent = $request->ip();
        $visit->save(); 
        return  response()->json(["status" => "success", "message"=>"stored successfully"]);
    }

}
