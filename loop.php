<?php

    $n=0;

    //While Loop
    echo "<b>Using While Loop</b>";
    while($n<=10)
    {
        echo "<br>N is =$n";
        $n++;
    }

    //Do-while Loop
    $n=0;
    echo "<br><br><b>Using Do-while Loop</b>";
    do
    {
        echo "<br>N is =$n";
        $n++;
    }while($n<=10);

    //For Loop
    echo "<br><br><b>Using For Loop</b>";
    for($i=0;$i<=10;$i++)
    {
        echo "<br>N is =$i";
    }
?>