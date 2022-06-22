<?php
    // find wheather the given no is armstrong or not(for 3 digit)

    $num=153;
    $sum=0;
    $reminder=0;
    $n=$num;

    while($n!=0)
    {
        $reminder=$n % 10;
        $sum=$sum+$reminder*$reminder*$reminder;
        $n=$n/10;
    }
    
    if($sum == $num)
    {
        echo "<h2>Given no $num is Armstrong number<h2>";
    }
    else
    {
        echo "<h2>Given no $num is not Armstrong number<h2>";
    }
?>