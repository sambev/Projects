<?php
    $tovowel = readline("Enter in a word: ");

    $vowels = Array('a', 'e', 'i', 'o', 'u',
                    'A', 'E', 'I', 'O', 'U');
    $acount = 0;
    $ecount = 0;
    $icount = 0;
    $ocount = 0;
    $ucount = 0;
    $total = 0;
    
    for($i=0; $i <= strlen($tovowel); $i++){
        $char = $tovowel[$i];
        if(in_array($char, $vowels)){
            $total++; 
            if($char == "a" || $char == "A"){
                echo $char == 'a';
                $acount++;
            } elseif($char == 'e' || $char == 'E') {
                $ecount++; 
            } elseif($char == 'i' || $char == 'I') {
                $icount++; 
            } elseif($char == 'o' || $char == 'O') {
                $ocount++; 
            } elseif($char == 'u' || $char == 'U') {
                $ucount++; 
            }
        }
    }

    echo "Total vowels: " . $total . "\r\n";
    echo "A: " . $acount . "\r\n";
    echo "E: " . $ecount . "\r\n";
    echo "I: " . $icount . "\r\n";
    echo "O: " . $ocount . "\r\n";
    echo "U: " . $ucount . "\r\n";

?>
