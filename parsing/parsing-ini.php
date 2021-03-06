<?php
session_start();
 
 
//- Если пользователь выбрал язык сайта сам.
if ( isset ( $_GET["lang"] ) and in_array ( $_GET["lang"], array ( 'ru', 'en' ) ) )
{
  $_SESSION["lang"] = $_GET["lang"];
}
 
preg_match('/^\w{2}/',$_SERVER['HTTP_ACCEPT_LANGUAGE'], $matches);
switch ( strtolower( $matches[0] ) )
{
//- Русский
case "ru":
  $accept_lang="ru";
break;
 
//- Английский
case "en":
case "uk":
case "us":
  $accept_lang="en";
break;
 
default:
  $accept_lang="en";
break;
}
 
//- Ранее определенный язык сайта из $_SERVER['HTTP_ACCEPT_LANGUAGE']
$lang = $accept_lang;
 
//- Данные о выборе языка есть в сессии
if ( isset( $_SESSION["lang"] ) )
{
  $lang = $_SESSION["lang"];
}
 
 
$html = '
<a href="?lang=ru" style="color:'.($lang == 'ru' ? 'red' : '' ).'">Русский</a>
<a href="?lang=en" style="color:'.($lang == 'en' ? 'red' : '' ).'">Английский</a>
';
 
$parse_lang = parse_ini_file( $lang .'.ini', true);
 
 
 
?>
 
<!DOCTYPE html>
<html lang="<?=$lang?>">
<head>
    <meta charset="UTF-8">
    <title > <?=$parse_lang['Config']['TITLE']?>  </title>
</head>
<body>
    <?=$html?>
    <p style="color: <?=$parse_lang['Config']['color']?>; font-size: <?=$parse_lang['Config']['font-size']?>">Hello World</p>
    <p>Hi, Denis</p>
    <p>Я пошел гулять в парк</p>
</body>
</html>