<?php

$frm_name  = "Youname";
$recepient = "youmail@mail.ru";
$sitename  = "Портфолио фотографий";
$subject   = "Новая заявка с сайта \"$sitename\"";

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$message = "E-mail: $email \nИмя: $name \nСообщение: $message";
mail($recepient, $subject, $message, "From: $frm_name <$recepient>" . "\r\n" . "Reply-To: $recepient" . "\r\n" . "X-Mailer: PHP/" . phpversion() . "\r\n" . "Content-type: text/html; charset=\"utf-8\"");
