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
        
        logger()->debug( 'Sub feita',
            [
                'num1' => $num1, 
                'num2' => $num2, 
                'sub' => $result
            ]
        );

        return view('dashboard', compact('result'));
    }
}
