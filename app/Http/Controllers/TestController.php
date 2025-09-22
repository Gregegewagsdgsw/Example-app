<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function second()
    {
        $name = "Юлия";
        $arr = ["name" => "Юлия", "mark"=>4, "IsAdmin" => true];
        return view('second', compact('name','arr'));
    }

    public function third(){
        return view('third');
    }
}
