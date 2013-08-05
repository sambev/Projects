<?php 
    $num = readline("Enter in a positive number: ");
   
    function factorial($n) {
        if($n == 0) {
            return 1;
        } else {
            return $n * factorial($n - 1);
        }
    }

    echo factorial($num) . "\r\n";
?>
