<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HackerRankController extends Controller
{
    public function grade(){
        $grades = [73, 67, 38, 33];
        
        foreach($grades as $grade){
            $marks = $grade;
            $divisor = ($marks / 5);
            $divisor = floor($divisor);
        
            if((int)$divisor >= 7){
                $nextGrade = ($divisor +1)*5;
                $dif = $nextGrade - $marks;
                if($dif < 3){
                    $marks = $marks + $dif;
                }else{
                    $marks = $marks;
                    }
            }else {
                $marks = $marks;
                }
            
            $res[] = $marks . "\n";
        }
         return $res;
    }
}
