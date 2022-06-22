<?php
    // Check given no is prime or not

    $n=7;
    $prime=0;

    for($i=1;$i<=$n;$i++){

        if($n%$i==0)
        {
            $prime++;
        }
    }

    if($prime<3)
    {
        echo "Number $n is prime number";
    }
    else
    {
        echo "Number $n is not prime number";
    }
?>