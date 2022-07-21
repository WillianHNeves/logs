<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Dashboard()
    {
        return view('dashboard');
    }
    
    public function Sub($num1, $num2)
    {
        $result = $num1 - $num2;

        return view('dashboard', compact('result'));
    }
}
