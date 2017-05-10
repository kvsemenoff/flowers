<?php
$to = "test@yandex.ru ";
$phone = $_POST['phone'];
$uname = $_POST['uname'];
$text = $_POST['message'];
$email = $_POST['email'];
$thememessage = $_POST['thememessage'];
$password = $_POST['password'];

// Формирование заголовка письма
if(!empty($_POST['subject'])){
	$subject = $_POST['subject'];
}
else{
	$subject  = "Новое сообщение";	
}

$headers  = "From: info@starlight.space" . "\r\n";
$headers .= "Reply-To: info@starlight.space".  "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма
$msg  = "<html><body>";

if(!empty($uname)){
	$msg .= "<p><strong>Имя:</strong> ".$uname."</p>\r\n";
}
if(!empty($phone)){
	$msg .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
}

if(!empty($email)){
	$msg .= "<p><strong>E-mail:</strong> ".$email."</p>\r\n";
}
if(!empty($text)){
	$msg .= "<p><strong>Комментарий:</strong> ".$text."</p>\r\n";
}
if(!empty($text)){
	$msg .= "<p><strong>Тема сообщения:</strong> ".$thememessage."</p>\r\n";
}
if(!empty($password)){
	$msg .= "<p><strong>Пароль:</strong> ".$password."</p>\r\n";
}
$msg .= "</body></html>";


// отправка сообщения
@mail($to, $subject, $msg, $headers);

?>