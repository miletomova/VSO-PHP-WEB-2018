<?php 

$rows = 8;
$cols = 6;
$num = 0;
$arr = [];

for($i = 0; $i < $rows; $i++){
	$num = 7*($i+1);
	for($j = 0; $j < $cols; $j++){

		$arr[$i][$j] = $num;
		$num += 110;		
	}
}

echo "<table border=1>";
 for($m = 0; $m < $rows; $m++){
 	echo "<tr>";
 	for($n = 0; $n < $cols; $n++){
 		echo "<td>{$arr[$m][$n]}</td>";
 	}
 	echo "</tr>";
 }
echo "</table>";