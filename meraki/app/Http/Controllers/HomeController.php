<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $name = 'Alaa';
        $age = 29;
        $job = 'smiling';
        $hobbies = 'reading and sleeping';

        //   return view('welcome',[
        //       'name'=>$name,
        //       'age'=>$age,
        //   ]);

        return view('welcome', compact('name', 'age','job','hobbies'));
    }
}
