<?php

if(isset($_GET['iteration'])) {

    $iteration = (int)$_GET['iteration'];

    if($iteration <= 0 ) {
        $iteration = 1;
    }

    if ($iteration > 11){
        $iteration = 10;
    }

    for($i = 0; $i <= $iteration; $i++) {
        echo "<a href='index.php'>mon itération est de $i</a> <br>";
    }
}