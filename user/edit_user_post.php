<?php
session_start();
require "../db_connect.php";


$name = $_POST["name"];
$email = $_POST["email"];
$password =$_POST["password"];
$id = $_POST["id"];


if(!$password){
  $update = "UPDATE users SET name = '$name',email='$email' WHERE id =$id";
  mysqli_query($db_connect,$update);
  $_SESSION["user_profile_update"]="User Profile Updated";
  header("location:edit_user.php?id=$id");

}
else{
  $after_hash =password_hash($password,PASSWORD_DEFAULT);
  $update = "UPDATE users SET name = '$name',email='$email',password='$after_hash' WHERE id =$id";
  mysqli_query($db_connect,$update);
   $_SESSION["user_profile_update"]="User Profile Updated";
  header("location:edit_user.php?id=$id");
}
?>