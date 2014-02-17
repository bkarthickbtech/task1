<?php
$_GET['start'] =4;
$_GET['end'] = 11;
$start_range = $_GET['start']; // or post method
$end_range = $_GET['end'];

if(is_int($start_range) && is_int($end_range)) {
    for($i=$start_range; $i <=$end_range; $i++) {
        $lastRange = $i-2;
        $lastPreviouseRange = $i-1;
        if(is_int($lastRange) && is_int($lastPreviouseRange)) {
						
            if(((($lastRange) % 5 ) == 0) && ((($lastPreviouseRange) % 3 ) == 0)) {
                echo "Bazz";
				
            } 
        }  
        
	if(($i % 3 ) == 0)  {
            echo "Fizz ";
        }  elseif(($i % 5) == 0) {
            echo "Buzz ";
        } else {
	    if(!(((($lastRange) % 5 ) == 0) && ((($lastPreviouseRange) % 3 ) == 0))) {
                echo $i . " ";
	    } 
        }
    }
    
}

?>



