<?php 

$arr = [5, 5, 17];
$arr_a = [5, 5, 4, 88];
$arr_b = [5.3, 8.6];
$arr_c = [];

function summ(&$arr){
	$arr_sum = 0;
	if (!is_array($arr)) {
		echo 'Некорректный массив!';
		return;
	}
	if (count($arr)==0) {
		echo 'Некорректный массив!';
		return;
	}
	if (is_numeric($arr)) {
		echo 'Некорректный массив!';
		return;
	}
	for ($i=0; $i <count($arr) ; $i++) {
		$arr_sum += $arr[$i];
	}
	echo 'Сумма элементов массива равна = '.$arr_sum;
}
echo summ($arr).'<br>';
echo summ($arr_a).'<br>';
echo summ($arr_b).'<br>';
echo summ($arr_c).'<br>';

?>