<?php
include "koneksi.php";
$query = "DELETe FROM biodata where id='$_GET[id]'";
$mysqli->query($query);
header('location:index.php');
?>