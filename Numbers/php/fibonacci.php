<?php
    $toshow = readline("How many numbers do you need?: ");
    $init = 0;
    $next = 1;
    for($i = 0; $i <= $toshow; $i++) {
        echo $init . "\r\n";
        $prev = $init;
        $init = $next;
        $next = $prev + $init;
    }
?>
