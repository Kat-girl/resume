<?php
  $email = $_POST['email'];
  $subject = "Восстановление пароля";
	$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";
	if(mail($email, $subject, $headers))
		echo "На Ваш e-mail отправлено сообщение с интрукцией для восстановления пароля";
	else
		echo "Сообщение не отправлено";
?>
