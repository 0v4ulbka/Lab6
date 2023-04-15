<?php
session_start();
require_once 'dbConnect.php';
require_once 'functions.php';
if (!empty($_POST['submit']) && $_POST['submit'] == 'signUp') {
    $name = strip_tags($_POST['name']);
    $login = strip_tags($_POST['login']);
    $password = strip_tags($_POST['password']);
    $query = "INSERT INTO users (name, login, password) VALUES ('$name', '$login', '$password')";
    $res = query($query, $mysqli);
    if (mysqli_affected_rows($mysqli) == 1) {
        $_SESSION['login'] = $login;
        header('Location: classicsView.php');
    }
}
?>
<h1>Регистрация</h1>
<form method="post">
    <label>Имя<input type="text" name="name"></label>
    <label>Логин<input type="text" name="login"></label>
    <label>Пароль<input type="password" name="password"></label>
    <input type="submit" name="submit" value="signUp">
    <a href="classicsView.php">Назад</a>
</form>
