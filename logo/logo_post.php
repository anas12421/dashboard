<?php
session_start();
require "../db_connect.php";

$logo = $_FILES["main_logo"];
$after_explode= explode(".", $logo["name"]);
$extention = end($after_explode);
$allowed_ext =array('jpg','JPG','jpeg','png','svg','webp');


$select_logo = "SELECT * FROM logos";
$logos =mysqli_query($db_connect, $select_logo);
$logos_assoc =mysqli_fetch_assoc($logos);

$id = $logos_assoc['id'];

if($logos_assoc["logo"]== null){
 if(in_array($extention, $allowed_ext)){
  if($logo["size"] <= 1000000){
      $file_name = "main_logo".'.'.$extention;
      $new_location ="../uploads/logo/".$file_name;
      move_uploaded_file($logo["tmp_name"],$new_location);

      $update_logo = "UPDATE logos SET logo = '$file_name' WHERE id=$id";
      mysqli_query($db_connect,$update_logo);
      $_SESSION["logo_add"]="Logo Added Successful";
      header("location:logo.php");

  }else{
    $_SESSION["error"]="Maximum Size 1MB";
    header("location:logo.php");
  }
}else{
  $_SESSION["error"]="Photo must be type of (jpg,png,jpeg,svg,webp.jpeg)";
  header("location:logo.php");
}
}
else{
 $delete_from = "../uploads/logo/".$logos_assoc["logo"];
 unlink($delete_from);

 if(in_array($extention, $allowed_ext)){
  if($logo["size"] <= 1000000){
      $file_name = "main_logo".'.'.$extention;
      $new_location ="../uploads/logo/".$file_name;
      move_uploaded_file($logo["tmp_name"],$new_location);
      $update_logo_main = "UPDATE logos SET logo = '$file_name' WHERE id=$id";
      mysqli_query($db_connect, $update_logo_main);
      $_SESSION["logo_add"]="Logo Added Successful";
      header("location:logo.php");

  }else{
    $_SESSION["error"]="Maximum Size 1MB";
    header("location:logo.php");
  }
}else{
  $_SESSION["error"]="Photo must be type of (jpg,png,jpeg,svg,webp.jpeg)";
  header("location:logo.php");
}
}


?>