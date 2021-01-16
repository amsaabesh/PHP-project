<?php
function f($x) 
{ 
    return $x * $x * $x - $x * $x + 2;//প্রশ্ন x^3-x^2+2
}
function fal($a, $b){
	if (f($a) * f($b) >= 0){
		echo "you have nt assumed right a and b<br/>";
		return;
	}
	$c = $a;
	for($i=0; $i < 1000000; $i++){
		$c = ($a*f($b)-$b*f($a))/(f($b)-f($a));
		if(f($c)==0){
			break;
		}
		else if(f($c)*f($a)<0){
			$b=$c;
		}
		else
			$a=$c;
	}
	echo "Joe Root: " , $c;
}
$d = -200;
$e = 300;
fal($d, $e);
echo "<br/>code link in private comment";
?>