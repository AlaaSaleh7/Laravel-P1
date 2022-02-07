<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index()
    {
        $des1 = 'reading books make your life better!';
        $des2 = 'sleeping take yourself to another life!';

        return view('info', compact('des1', 'des2'));
    }
}
