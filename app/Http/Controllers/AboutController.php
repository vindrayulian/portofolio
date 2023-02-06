<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function team(){
        return view('team.main',[
            'title' => 'About Vindra Arya Yulian'
        ]);

    }
}
