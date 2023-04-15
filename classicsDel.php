<?php
session_start();
require_once 'dbConnect.php';
require_once 'functions.php';
if (!empty($_POST['del'])) {
    $id = (int)$_GET['id'];
    $query = "DELETE FROM classics WHERE id=$id";
    $res = query($query, $mysqli);
    header('Location: classicsView.php');
} ?>
<p>Вы уверены, что хотите удалить?</p>
<form method="post">
    <input type="submit" name="del" value="Удалить">
    <a href="classicsView.php">Назад</a>
</form>
