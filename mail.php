<?php

$recepient = "ukr.net";
$sitename = "Alex Hubar - Frontend Developer";

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$message = trim($_POST["message"]);

$pagetitle = "Alex Hubar - Frontend Developer | New message";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
>