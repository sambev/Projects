<?php
    $tocount = readline("Enter in a sentence: ");
    $words = explode(" ", $tocount);
    
    echo "There are " . sizeof($words) . " words in that sentence\r\n";

    $file = fopen("words.txt", "r");

    if(file) {
        $text = fread($file, filesize("words.txt"));
        $filewords = explode(" ", $text);

        echo "There are " . sizeof($filewords) . " words in the file\r\n";
    }
?>
