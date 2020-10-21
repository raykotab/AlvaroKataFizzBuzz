<?php

namespace App;

class FizzBuzz {

    public function transform ($value) {

       
        if($value % 3 == 0 && $value % 5 == 0) {
            return "FizzBuzz";
        }

        if($value % 3 == 0) {    
            return "Fizz";
         }

        if($value % 5 == 0) {    
            return "Buzz";
        }
       return $value;
    }

    
    
}
$fizzbuzz = new FizzBuzz();
   

    for ($i=1; $i <= 100; $i++) { 
        $result = $fizzbuzz-> transform($i);
        echo $result . PHP_EOL;
        }