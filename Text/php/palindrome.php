<?php 
    $word = readline("Please enter in the word: ");

    if($word == strrev($word)){
        echo $word . " is a palindrome.\r\n";
    } else {
        echo $word . " is not a palindrome.\r\n";
    }
?>
