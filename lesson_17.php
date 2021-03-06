<?php

$x = $_POST['num_x'];
$y = $_POST['num_y'];

function getSum($x, $y)
{
	return $x + $y;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Подсчет выражений</title>
	<link rel="stylesheet" type="text/css" href="lesson_17_style.css">
</head>
<body>
	<form action="#" method="post">
		<h1>Сложение чисел</h1>
		<label for="num_x">Введите число x:</label>
		<input type="text" name="num_x" required>
		<label for="num_y">Введите число y:</label>
		<input type="text" name="num_y" required>
		<textarea><?php echo getSum($x, $y); ?></textarea>
		<button type="submit">Вычислить</button>
	</form>
</body>
</html>