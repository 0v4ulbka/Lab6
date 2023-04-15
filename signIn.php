<?php
session_start();
require_once 'functions.php';
require_once 'dbConnect.php';
if ((!empty($_POST['submit']) && $_POST['submit'] == 'signIn')){
    $login = strip_tags($_POST['login']);
    $password = strip_tags($_POST['password']);
    $query = "SELECT * FROM users where login = '$login' and password = '$password'";
    $res = query($query, $mysqli);
    if (mysqli_affected_rows($mysqli) == 1) {
        $_SESSION['login'] = $login;
        header('Location: classicsView.php');
    }
}
?>
<form method="post">
    <label>Логин<input type="text" name="login"></label>
    <label>Пароль<input type="password" name="password"></label>
    <input type="submit" name="submit" value="signIn">
    <a href="classicsView.php">Назад</a>
</form>
