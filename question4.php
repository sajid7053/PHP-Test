<?php

function Pairs($arr,$sum,$n){
	$count = 0;

	for($i = 0; $i < $n; $i++){
	  for($j = $i+1; $j < $n; $j++){
	    if($arr[$i] + $arr[$j] == $sum){
	      echo "(", $arr[$i], ", ", $arr[$j], ")", "\n";
	    }
	  }
	}
}

$arr = [1,2,5,6,7,-4];
$n = count($arr);
$sum = 3;
Pairs($arr,$sum,$n);
?>