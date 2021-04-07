<?php

session_start();

$host = "localhost:3307"; // ім'я хосту
$user = "root"; // користувач
$password = "password2009"; // пароль
$dbname = "users"; // ім'я бази

$con = mysqli_connect($host, $user, $password,$dbname);
// Перевіряємо з'єднання з базою
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}