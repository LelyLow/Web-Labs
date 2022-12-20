<?php

//Задание 1
$date="31-12-2020";
$date=implode('-', array_reverse(explode('-', $date)));
$date=str_replace('-', '.', $date);
echo($date);

echo "<br/>";

//Задание 2
$london="london is the capital of great britain";
$London=ucwords($london);
echo($London);

echo "<br/>";

//Задание 3
$password="qwerty123";
if (strlen(trim($password))>12 || strlen(trim($password))<7)
{
	echo "Придумайте новый пароль";
}
else
{
	echo "Пароль ок";
}

echo "<br/>";

//Задание 4
$stroka="1a2b3c4b5d6e7f8g9h0";
$stroka = preg_replace('/\d/', '', $stroka);
echo $stroka;

echo "<br/>";
?>