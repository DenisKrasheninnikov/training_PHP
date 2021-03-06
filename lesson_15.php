<?php 

$num_1 = [15, 26, 4, 6, 10];
$num_2 = [12, 14, 21, 3, 1, 18, 33];

$num = $num_1 + $num_2;

foreach ($num as $value) {
	if ($value % 2 == 0) {
		echo $value.", ";
	}
}

?>