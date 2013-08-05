<?php
    /*
        isPrime funciton
        - test whether $num is a prime number or not
        - args: $num - none negative int
        - return: true if prime, false otherwise
    */
    function isPrime($num) {
        for($i=2; $i < $num; $i++){
            if($num % $i == 0) {
                return false;
            }
        }
        return true;
    }

    // get the user input
    $user_num = readline("Enter in a number to find the prime factors of: ");
    $primefactors = array();

    // find which numbers the input is divisible by.  If that number is prim
    // add it to the list
    for($i=2; $i <= $user_num; $i++){
        if($user_num % $i == 0) {
            if(isPrime($i)){
                array_push($primefactors, $i);
            }
        }
    }
   
    foreach($primefactors as $p)
        echo $p . "\r\n";
?>
