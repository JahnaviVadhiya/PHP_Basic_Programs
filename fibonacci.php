<?php

    //Fibonacci serires

    $f1=0;
    $f2=1;
    $n=10;
    $fibbo=0;
    echo "<b>Fiboccani Series : </b>";
    echo $f1." ".$f2;

    for($i=1;$i<=10;$i++)
    {
        $fibbo= $f1+$f2;
        echo " ".$fibbo;

        $f1=$f2;
        $f2=$fibbo;

    }

?>