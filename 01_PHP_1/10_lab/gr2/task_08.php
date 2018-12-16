<?php 

$arr = [1, 8, -9, 0];

$min = $arr[0];

for($i = 1; $i < count($arr); $i++){
	if($min > $arr[$i]){
		$min = $arr[$i];
	}
}

echo $min;