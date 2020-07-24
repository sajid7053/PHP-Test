<?php

$arr = [5,7,8,9,10];

$sum = 0;

for($i = 0; $i < count($arr); $i++){
	$sum = $sum + $arr[$i];
}

echo "Sum of the array of numbers " .$sum;

?>