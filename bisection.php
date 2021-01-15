<?php
$EPSILON = 0.01;
function func($x) 
{ 
    return $x * $x * $x -  
           $x * $x + 2; 
}
function bisection($a, $b) 
{ 
    global $EPSILON; 
    if (func($a) *  
        func($b) >= 0) 
    { 
        echo "You have not assumed " .  
                 "right a and b","\n"; 
        return; 
    } 
  
    $c = $a; 
    while (($b - $a) >= $EPSILON) 
    {
        $c = ($a + $b) / 2;
        if (func($c) == 0.0) 
            break;
        else if (func($c) * func($a) < 0) 
            $b = $c; 
        else
            $a = $c; 
    } 
    echo "The value of root is : " , $c; 
}
$a =-200; 
$b = 300; 
bisection($a, $b);
echo "<br/>code link in private comment";
?> 