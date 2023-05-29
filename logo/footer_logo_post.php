<?php
session_start();
require "../db_connect.php";

$logo = $_FILES["footer_logo"];
$after_explode= explode(".", $logo["name"]);
$extention = end($after_explode);
$allowed_ext =array('jpg','JPG','jpeg','png','svg','webp');


$select_footer_logo = "SELECT * FROM footer_logo";
$footer_logo =mysqli_query($db_connect, $select_footer_logo);
$footer_logos_assoc =mysqli_fetch_assoc($footer_logo);

$id = $footer_logos_assoc['id'];

if($footer_logos_assoc["logo"]== null){
 if(in_array($extention, $allowed_ext)){
  if($logo["size"] <= 1000000){
      $file_name = "footer_logo".'.'.$extention;
      $new_location ="../uploads/logo/".$file_name;
      move_uploaded_file($logo["tmp_name"],$new_location);

      $update_logo = "UPDATE footer_logo SET logo = '$file_name' WHERE id=$id";
      mysqli_query($db_connect,$update_logo);
      $_SESSION["footer_logo_add"]="Logo Added Successful";
      header("location:logo.php");

  }else{
    $_SESSION["footer_error"]="Maximum Size 1MB";
    header("location:logo.php");
  }
}else{
  $_SESSION["footer_error"]="Photo must be type of (jpg,png,jpeg,svg,webp.jpeg)";
  header("location:logo.php");
}
}
else{
 $delete_from = "../uploads/logo/".$footer_logos_assoc["logo"];
 unlink($delete_from);

 if(in_array($extention, $allowed_ext)){
  if($logo["size"] <= 1000000){
      $file_name = "footer_logo".'.'.$extention;
      $new_location ="../uploads/logo/".$file_name;
      move_uploaded_file($logo["tmp_name"],$new_location);
      $update_logo_main = "UPDATE footer_logo SET logo = '$file_name' WHERE id=$id";
      mysqli_query($db_connect, $update_logo_main);
      $_SESSION["footer_logo_add"]="Logo Added Successful";
      header("location:logo.php");

  }else{
    $_SESSION["footer_error"]="Maximum Size 1MB";
    header("location:logo.php");
  }
}else{
  $_SESSION["footer_error"]="Photo must be type of (jpg,png,jpeg,svg,webp.jpeg)";
  header("location:logo.php");
}
}


?>


