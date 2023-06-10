<?php
require '../db_connect.php';
  $id= $_GET['id'];

  $delete = "DELETE FROM menu WHERE id = $id";

  mysqli_query($db_connect, $delete);
  header("location:menu_list.php")
  
?>