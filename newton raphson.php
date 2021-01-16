<?php
$epsi=0.001; 
function f($x) 
{ 
    return $x*$x*$x-$x*$x+2;//প্রশ্ন x^3-x^2+2
}
function dif($x) 
{ 
    return 3*$x*$x-2*$x; 
}
function NR($x) 
{ 
    global $epsi; 
    $h = f($x)/dif($x); 
    do
    { 
        $h = f($x)/dif($x); 
        $x = $x - $h; 
    } 
	while(abs($h)>=$epsi);
    echo "Joe Root : " , $x; 
} 
  
// Driver Code 
$x0 = -.5; //প্রাথমিক মান
NR($x0); 
echo "<br/>code link in private comment";
?> 
