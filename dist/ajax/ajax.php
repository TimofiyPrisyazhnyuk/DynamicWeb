<?php

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['Email']);
$subject = htmlspecialchars($_POST['Subject']);
$message = htmlspecialchars($_POST['message']);
if($name == "" || $email == "" || $subject == "" || $message == ""){
    echo "Заполните все поля ";
    exit;
}
// Отправка
$subject = "=UTF-8?B?".base64_decode($subject)."?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";
if(mail("timon3060@gmail.com",$subject, $message, $headers)){
    echo "Сообщение отправлено";
} else {
    echo "Ошибка отправки";
}