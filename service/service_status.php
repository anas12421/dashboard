<?php
session_start();
require "../db_connect.php";

$id = $_GET['id'];

$select_status = "SELECT * FROM services WHERE id = $id";
$select_status_res = mysqli_query($db_connect,$select_status);
$select_status_assoc=mysqli_fetch_assoc($select_status_res);

  $select_count = "SELECT COUNT(*) as mot FROM services WHERE status =1";
  $select_count_res = mysqli_query($db_connect,$select_count);
  $select_count_assoc=mysqli_fetch_assoc($select_count_res);

if($select_status_assoc["status"] == 0){


  if($select_count_assoc["mot"] >= 6){
   $_SESSION["max"]="Max 6 item";
   header("location:service.php");
  }
  else{
   $update ="UPDATE services SET status = 1 WHERE id=$id";
    mysqli_query($db_connect,$update);
    header("location:service.php");
  }
    
}
else{
  if($select_count_assoc["mot"] <=4 ){
    $_SESSION["min"]="Min 4 item";
   header("location:service.php");
  }
  else{
       $update ="UPDATE services SET status=0 WHERE id=$id";
    mysqli_query($db_connect,$update);
    header("location:service.php");
  }
}



?>