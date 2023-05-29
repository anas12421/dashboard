<?php
session_start();
require "../db_connect.php";

$sub_title = $_POST["sub_title"];
$title = $_POST["title"];
$description = $_POST["description"];
$action_btn = $_POST["action_btn"];
$action_link = $_POST["action_link"];
$photo = $_FILES["photo"];

$after_explode= explode(".", $photo["name"]);
$extention = end($after_explode);
// $allowed_ext =array('jpg','JPG','jpeg','png','svg','webp');
$file_name = "banner".".".$extention;

$select_banner ="SELECT * FROM banner";
$select_banner_result =mysqli_query($db_connect,$select_banner);
$select_banner_assoc =mysqli_fetch_assoc($select_banner_result);


if($photo['name'] == ''){
  $update_banner = "UPDATE banner SET sub_title='$sub_title',title='$title',description='$description',action_btn='$action_btn',action_link='$action_link'";
  mysqli_query($db_connect,$update_banner);
  $_SESSION["banner_update"]= "Banner Update Successful";
  header("location:banner.php");

}
else{
 $delete_from = "../uploads/banner/".$select_banner_assoc['photo'];
 unlink($delete_from);
 $new_location = "../uploads/banner/".$file_name;
 move_uploaded_file($photo["tmp_name"],$new_location);

 $update_banner = "UPDATE banner SET sub_title='$sub_title',title='$title',description='$description',action_btn='$action_btn',action_link='$action_link',photo='$file_name'";
  mysqli_query($db_connect,$update_banner);

  $_SESSION["banner_update"]= "Banner Update Successful";
  header("location:banner.php");
}
?>