<?php

define('SIZE', '52');
echo SIZE;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Работа с константами</title>
	<style type="text/css">
		p {
			font-size: <?= SIZE ?>;
		}
	</style>
</head>
<body>
	<p>Какой то текст 1</p>
	<p>Какой то текст 2</p>
</body>
</html>