<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
//mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "root", "", "dynamicsitebase");
$mysqli->query("SET NAMES 'UTF-8'");
$result = "";
$email = $_POST['email'];
$password = $_POST['password'];
//Проверяем, нет ли уже такого адреса в БД.
$result_query = $mysqli->query("SELECT `email` FROM `emails` WHERE `email`='$email'");

//Если кол-во полученных строк ровно единице, значит, пользователь с таким почтовым адресом уже зарегистрирован
if($result_query->num_rows == 0)
    $result = "Такой e-mail не зарегистрирован";
else echo "Вход для $email выполнен";
echo $result;


$mysqli->close ();


?>
