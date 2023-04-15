<?php
require_once 'dbConnect.php';
require_once 'functions.php';
if (!empty($_POST['submit']) && $_POST['submit'] == 'ADD') {
    $author = strip_tags($_POST['author']);
    $title = strip_tags($_POST['title']);
    $type = strip_tags($_POST['type']);
    $year = strip_tags($_POST['year']);
    $query = "INSERT INTO classics (author, title, type, year) VALUES ('$author', '$title', '$type', '$year')";
    $res = query($query, $mysqli);
    if (mysqli_affected_rows($mysqli) == 1) {
        header('Location: classicsView.php');
    }
}
?>
<form action="" method="post">
    <label>Author <input type="text" name="author"></label>
    <label>Title <input type="text" name="title"></label>
    <label>Category <input type="text" name="type"></label>
    <label>Year <input type="text" name="year"></label>
    <input type="submit" name="submit" value="ADD">
    <a href="classicsView.php">Назад</a>
</form>
