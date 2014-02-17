<?php 

$_GET['start'] =12;
$_GET['end'] = 16;
$start_range = $_GET['start']; // or post method
$end_range = $_GET['end'];

if(is_int($start_range) && is_int($end_range)) {
   for($i=$start_range; $i <=$end_range; $i++) {
        if((($i % 3) == 0) && (($i % 5 ) == 0)) {
            echo "FizzBuzz ";
        } elseif(($i % 3 ) == 0)  {
            echo "Fizz ";
        }  elseif(($i % 5) == 0) {
            echo "Buzz ";
        } else {
            echo $i . " ";
        }
   }
    
}



?>