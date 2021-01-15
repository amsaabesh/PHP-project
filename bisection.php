<?php
//proshno: x^3-x^2+2
$epsi = 0.01;
function f($x) 
{ 
    return $x*$x*$x-$x*$x+2; 
}
function bi($a, $b) 
{ 
    global $epsi; 
    if (f($a)*f($b) >= 0) 
    { 
        echo "kichu dhoren nai to... right a and b <br/>"; 
        return; 
    } 
  
    $c = $a; 
    while(($b - $a) >= $epsi) 
    {
        $c = ($a + $b) / 2;//মধ্যবিন্দু
        if (f($c) == 0.0) //মিডেল পয়েন্ট চেক
            break;
        else if (f($c) * f($a) < 0) 
            $b = $c; 
        else
            $a = $c; 
    } 
    echo "Joe root: " , $c; 
}
$a =-200; 
$b = 300; 
bi($a, $b);
echo "<br/>code link in private comment";
?> 