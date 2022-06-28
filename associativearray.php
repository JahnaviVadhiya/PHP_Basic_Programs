<?php

    //Associative Array
    $a= array(1=>'One',2=>'Two',3=>'Three',4=>'Four',5=>'Five');

    //Print array using for each loop
    foreach($a as $value)
    {
        echo "<br>Value is : $value";
    }

    echo "<br><b>Print array with key & value pair</b></br>";
    //Print array with key & value pair
    foreach($a as $key=>$value)
    {
        echo "Key is : $key and Value is : $value<br>";
    }
?>