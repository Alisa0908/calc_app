<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function result($num1, $operators, $num2) 
    {  //ここでswitch文､制御構文を使うというアイディアが肝! さらに､$resultという関数を利用し､計算もcontrollerでしてしまうよ
        switch ($operators) {
                case 'addition':
                    $result = $num1 + $num2;
                    break;

                case 'subtraction':
                    $result = $num1 - $num2;
                    break;
                
                case 'multiplication':
                    $result = $num1 * $num2;
                    break;
                
                case 'division':
                    $result = $num1 / $num2;
                    break;
                
                default:
                    $result = "計算できません";
                    break;
            }

            return view('practice.operator', ['result' => $result]);
    }
}
