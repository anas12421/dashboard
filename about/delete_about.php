<?php
require '../db_connect.php';
$id= $_GET['id'];
$select_from ="SELECT * FROM about WHERE id=$id";
$select_form_res= mysqli_query($db_connect,$select_from);
$select_form_assoc=mysqli_fetch_assoc($select_form_res);



$delete_from ="../uploads/about/".$select_form_assoc["photo"];
unlink($delete_from);

  $delete = "DELETE FROM about WHERE id = $id";
  mysqli_query($db_connect, $delete);
  header("location:about.php")
  
?>