<?php

    //Numerical Array
    $a = array(10,20,30,40,"PHP","React","Java");

    //Print array values
    for($i=0;$i<count($a);$i++)
    {
        echo "<br>Value at $i : $a[$i]";
    }

    //inbuilt method(function) for printing array 
    echo "<pre>";
    echo "<br><b>Print Array using inbuilt functions</b><br>";

    echo "<br><b>Using print_r()</b><br>";
    print_r($a);

    echo "<br><b>Using var_dump()</b><br>";
    var_dump($a);

    echo "<br><b>Using var_export()</b><br>";
    var_export($a);

?>
