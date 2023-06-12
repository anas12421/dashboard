<?php

require "../db_connect.php";

$id = $_GET['id'];

$delete = "DELETE FROM copyright WHERE id = $id";
mysqli_query($db_connect,$delete);
header("location:copyright.php");
?>