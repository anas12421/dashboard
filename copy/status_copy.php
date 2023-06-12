<?php
session_start();
require "../db_connect.php";

$id = $_GET['id'];

$select_status = "SELECT * FROM copyright WHERE id = $id";
$select_status_res = mysqli_query($db_connect,$select_status);
$select_status_assoc=mysqli_fetch_assoc($select_status_res);

  $select_count = "SELECT COUNT(*) as mot FROM copyright WHERE status =1";
  $select_count_res = mysqli_query($db_connect,$select_count);
  $select_count_assoc=mysqli_fetch_assoc($select_count_res);

if($select_status_assoc["status"] == 0){


  if($select_count_assoc["mot"] >= 1){
   $_SESSION["min"]="Only 1 item Can be active at a time";
   header("location:copyright.php");
  }
  else{
   $update ="UPDATE copyright SET status = 1 WHERE id=$id";
    mysqli_query($db_connect,$update);
    header("location:copyright.php");
  }
    
}
else{
  if($select_count_assoc["mot"] ==0 ){
    $_SESSION["min"]="Only 1 item Can be active at a time";
   header("location:copyright.php");
  }
  else{
       $update ="UPDATE copyright SET status=0 WHERE id=$id";
    mysqli_query($db_connect,$update);
    header("location:copyright.php");
  }
}



?>