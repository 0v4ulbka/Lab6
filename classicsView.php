<a href="classicsAdd.php">Добавить</a>
<?php
require_once 'dbConnect.php';
require_once 'functions.php';
$query = "SELECT * FROM classics";
$res = query($query, $mysqli);
while ($row = mysqli_fetch_assoc($res)) {
    ?>
    <p>
    <h2><?= $row['title']; ?> <a href="classicsDel.php?id=<?= $row['id']?>">уд.</a></h2>
    <?= $row['author']; ?><br>
    Category: <?= $row['type']; ?><br>
    Year: <?= $row['year']; ?><br>
    <p><a href="classicsUpd.php?id=<?= $row['id']?>">Изменить</a></p>
    </p>
    <?php
}
