<?php


$unit=210;
$unit_cost_first = 3.50;
$unit_cost_second = 4;
$unit_cost_third = 6.5;


switch($unit){
    case ($unit<= 50):

        $bill = $units * $unit_cost_first;
         echo $bill;
     break;

     case ($units > 50 && $units <= 100):

        $previous= 50 * $unit_cost_first;
        $rest_units= $units - 50;
        $bill = $previous + ($rest_units * $unit_cost_second);
         echo $bill;
     break;

     case ($units > 150):

        $previous= (50 * 3.5) + (100 * $unit_cost_second);
        $rest_units= $units - 150;
        $bill = $previous + ($rest_units * $unit_cost_third);
         echo $bill;
     break;
}



?>