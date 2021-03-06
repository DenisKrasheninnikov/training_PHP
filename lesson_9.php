<?php

$age = (int)$_POST['age'];

if ($age < 27) {
	echo "Вам меньше 27 лет";
} elseif ($age == 27) {
	echo "Вам 27 лет";
} else {
	echo "Вам больше 27 лет";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ваш возраст</title>
</head>
<body>
	<form action="lesson_9.php" method="post">
		Введите возраст: <input type=text name="age"><br>
		<input type=submit value="GO!">
	</form>
</body>
</html>