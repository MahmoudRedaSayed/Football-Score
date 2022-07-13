<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class ProjectController extends Controller
{
    public function GetData(Request $request)
    {
        $date=date("Y-m-d");
        $response=Http::get("https://api.soccersapi.com/v2.2/fixtures/?user=anamahmoud10203040&token=2f6a0cc9b63459265482a67cf63bcdbf&t=schedule&d=2021-08-13&league_id=1609");
        return view("home",["content"=>$response]);
    }


    public function About(Request $request)
    {
        return view("about");
    }
}
