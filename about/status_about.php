<?php
session_start();
require "../db_connect.php";

$id = $_GET['id'];

$select_status = "SELECT * FROM about WHERE id = $id";
$select_status_res = mysqli_query($db_connect,$select_status);
$select_status_assoc=mysqli_fetch_assoc($select_status_res);

  $select_count = "SELECT COUNT(*) as mot FROM about WHERE status =1";
  $select_count_res = mysqli_query($db_connect,$select_count);
  $select_count_assoc=mysqli_fetch_assoc($select_count_res);

if($select_status_assoc["status"] == 0){


  if($select_count_assoc["mot"] >= 5){
   $_SESSION["max"]="Max 5 item";
   header("location:about.php");
  }
  else{
   $update ="UPDATE about SET status = 1 WHERE id=$id";
    mysqli_query($db_connect,$update);
    header("location:about.php");
  }
    
}
else{
  if($select_count_assoc["mot"] <=2 ){
    $_SESSION["min"]="Min 2 item";
   header("location:about.php");
  }
  else{
    $update ="UPDATE about SET status=0 WHERE id=$id";
    mysqli_query($db_connect,$update);
    header("location:about.php");
  }
}



?>