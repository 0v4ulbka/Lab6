<?php
session_start();
if($_SESSION && !empty($_SESSION)){ ?>
    <a href="logout.php">Выйти</a>
    <p><a href="classicsAdd.php">Добавить</a></p>
<?php } else {?>
    <a href="signIn.php">Войти</a>
    <a href="signUp.php">Зарегистрироваться</a>
<?php }?>


<?php
require_once 'dbConnect.php';
require_once 'functions.php';
$query = "SELECT * FROM classics";
$res = query($query, $mysqli);
while ($row = mysqli_fetch_assoc($res)) {
    ?>
    <p>
    <h2><?= $row['title']; ?>
    <?php if($_SESSION && !empty($_SESSION)){ ?>
        <a href="classicsDel.php?id=<?= $row['id']?>">уд.</a>
    <?php }?>
    </h2>
    <?= $row['author']; ?><br>
    Category: <?= $row['type']; ?><br>
    Year: <?= $row['year']; ?><br>
    <?php if($_SESSION && !empty($_SESSION)){ ?>
    <p><a href="classicsUpd.php?id=<?= $row['id']?>">Изменить</a></p>
    <?php }?>
    </p>
    <?php
}
