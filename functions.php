<?php
require_once 'dbConnect.php';
function query($query, $mysqli){
    $res = mysqli_query($mysqli, $query);
    if (!$res) die (mysqli_error($mysqli));
    return $res;
}