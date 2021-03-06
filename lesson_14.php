<?php 

$worker = [
	[
		'name' => 'Иван',
		'age' => 26
	],

	[
		'name' => 'Петр',
		'age' => 35
	],

	[
		'name' => 'Максим',
		'age' => 20
	],

	[
		'name' => 'Денис',
		'age' => 27
	]
];

foreach ($worker as $value) {
	foreach ($value as $v) {
		echo $v.", ";
	}
	echo "<br>";
}

echo "<hr>";

$ages_sum = 0;

foreach ($worker as $average) {
	$ages_sum += $average['age'];
}

$result = $ages_sum / count($average);

echo "Средний возраст сотрудников: ".$result;

?>