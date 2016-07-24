<?php

$recepient = "dasflancer@gmail.com";
$sitename = "Агенство безопасности";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$object = trim($_POST["object"]);

$message = "Имя: $name \nТелефон: $phone \nХотят охранять: $object";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
