<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
//mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "root", "", "dynamicsitebase");
$mysqli->query("SET NAMES 'UTF-8'");
$result = "";
$email = $_POST['email'];
$password = $_POST['password'];
$success = $mysqli->query("INSERT INTO `emails`(`email`, `password`) VALUES ('$email', '$password')");
if ($success) $result = "Вы успешно зарегистрированы";
else $result = "Что-то пошло не так. Попробуйте еще раз";
//Проверяем, нет ли уже такого адреса в БД.
$result_query = $mysqli->query("SELECT `email` FROM `emails` WHERE `email`='$email'");

//Если кол-во полученных строк ровно единице, значит, пользователь с таким почтовым адресом уже зарегистрирован
if($result_query->num_rows == 1)
    $result = "Пользователь с таким почтовым адресом уже зарегистрирован";
echo $result;


$mysqli->close ();
?>
