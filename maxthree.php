<?php

    //Find maximum of hree numbers

    $n1=10;
    $n2=65;
    $n3=49;

    echo "Number 1 = $n1<br>";
    echo "Number 2 = $n2<br>";
    echo "Number 3 = $n3<br>";
    if($n1>$n2 && $n1>$n3)
    {
        echo "Maximum number is $n1";
    }

    else if($n2>$n1 && $n2>$n3)
    {
        echo "Maximum number is $n2";
    }

    else
    {
        echo "Maximum number is $n3";
    }
?>