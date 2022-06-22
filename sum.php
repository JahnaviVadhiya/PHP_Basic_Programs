<?php

    // Simple addition of two numbers
    $a=10;
    $b=5;
    $sum=$a+$b;
    echo "Value 1 : $a <br> Value 2 :$b";
    echo "<br>Sum = ".$sum;;


    //Addition of all digits in in given number
    $num=1234;

    $addition=0;
    $reminder=0;

    for($i=0;$i<=strlen($num);$i++)
    {
        $reminder=$num%10;
        $addition=$addition+$reminder;
        $num=$num/10;
    }

    echo "<br><br><b>Addition of all digits in given No : </b>".$addition;
?>