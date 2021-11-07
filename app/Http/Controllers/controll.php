<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class controll extends Controller
{
    //
    public function homeindex(){
        return view('home',[
            "title" => "Home",
        ]);
    }

    public function tarian(){
        return view('tarian',[
            "title" => 'List Tarian'
        ]);
    }
}
