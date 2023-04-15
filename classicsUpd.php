<?php
require_once 'dbConnect.php';
require_once 'functions.php';
$id = (int)$_GET['id'];
if (!empty($_POST['submit']) && $_POST['submit'] == 'UPD') {
    $author = strip_tags($_POST['author']);
    $title = strip_tags($_POST['title']);
    $type = strip_tags($_POST['type']);
    $year = strip_tags($_POST['year']);
    $query = "UPDATE classics SET `title` = '$title',
                    `author` = '$author', 
                    `type` = '$type',
                    `year` = '$year' WHERE id = $id";
    $res = query($query, $mysqli);
    if (mysqli_affected_rows($mysqli) == 1) {
        header('Location: classicsView.php');
    }
}
$query = "SELECT * FROM classics where id = $id";
$res = query($query, $mysqli);
foreach ($res as $re){ ?>
<form method="post">
    <label>Author <input type="text" name="author" value="<?= $re['author']?>"></label>
    <label>Title <input type="text" name="title" value="<?= $re['title']?>"></label>
    <label>Category <input type="text" name="type" value="<?= $re['type']?>"></label>
    <label>Year <input type="text" name="year" value="<?= $re['year']?>"></label>
    <input type="submit" name="submit" value="UPD">
    <a href="classicsView.php">Назад</a>
</form>
<?php }?>