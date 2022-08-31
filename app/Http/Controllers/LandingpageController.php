<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    //index
    public function index(Request $request){
        $data =[
            'title' => 'AYO BUAT WEBSITE',
            'header' => 'AYO BUAT WEBSITE'
        ];

        return view('landingpage',[
            'data' => $data
     ]);
    }
}
