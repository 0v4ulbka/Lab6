<?php
$host = 'localhost';
$database = 'publications';
$user = 'root';
$password = 'QWEasd123';
$mysqli = mysqli_connect($host, $user, $password, $database);
if ($mysqli->connect_errno) {
    error_log('Ошибка соединения: ' . $mysqli->connect_errno);
}
$mysqli->set_charset("utf8mb4");