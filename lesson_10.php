<?php

$fact = 1;
$number = 0;
if (isset($_GET["number"])) $number = $_GET["number"];
if ($number < 0) {
	echo "Число должно быть 0 или больше 0";
}
elseif ($number == 0) {
	echo "Факториал числа 0 равен 1";
}
elseif ($number > 0) {
	for ($i = 1; $i <= $number; $i++) {
		$fact *= $i;
	}
	echo "Факториал числа $number равен $fact";
}?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ввод чисел</title>
</head>
<body>
	<form action="">
		<input type="text" name="number">
		<button type="submit">Отправить</button>
	</form>
</body>
</html>