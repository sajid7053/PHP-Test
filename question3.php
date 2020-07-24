<?php

$arr = [0,0,1,1,1,1,1,1,0,0,0,1,1,1,0];

$count = 0;
$output = 0;

for($i = 0; $i < count($arr); $i++){
	if ($arr[$i] == 0)
	  $count = 0;

	else {
	  $count++;
      $output = max($output,$count);
	}
}

echo $output;
?>