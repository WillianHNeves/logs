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
        //dd($result);

        return view('dashboard', compact('result'));
    }

    public function Div($num1, $num2)
    {
        if ($num2 == 0) {
            logger()->error('Divisor zero!');
            return;
        }
       
        $div = $num1/$num2;

        logger()->info('Div feita');

        return $div;
    }

    public function Mult($num1, $num2)
    {
        if ($num2 < 0 || $num1 < 0) {
            logger()->warning('Negativo');
            return;
        }
        
    }
}
