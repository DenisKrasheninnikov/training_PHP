<?php

$number = (strval($_POST['number']));

switch ($number) {
	case '3':
		echo "3";
		break;
	case '5':
		echo "5";
		break;
	
	default:
		echo "Нет представления этого числа в виде строки";
		break;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ввод чисел</title>
</head>
<body>
	<form action="lesson_12.php" method="post">
		<input type="text" name="number">
		<button type="submit">Отправить</button>
	</form>
</body>
</html>