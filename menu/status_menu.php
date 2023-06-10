<?php
  require "../db_connect.php";

  $id =$_GET['id'];

  $select_status = "SELECT * FROM menu WHERE id = $id";
  $select_status_res = mysqli_query($db_connect,$select_status);
  $select_status_assoc=mysqli_fetch_assoc($select_status_res);

  if($select_status_assoc['status']==0){
    $update ="UPDATE menu SET status = 1 WHERE id=$id";
    mysqli_query($db_connect,$update);
    header("location:menu_list.php");
  }
  else{
    $update ="UPDATE menu SET status = 0 WHERE id=$id";
    mysqli_query($db_connect,$update);
    header("location:menu_list.php");
  }
?>