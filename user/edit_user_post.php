<?php
session_start();
require "../db_connect.php";


$name = $_POST["name"];
$email = $_POST["email"];
$password = password_hash($_POST["password"],PASSWORD_DEFAULT);
$id = $_POST["id"];

if(!$password){
  $update = "UPDATE users SET name = '$name',email='$email' WHERE id =$id";
  mysqli_query($db_connect,$update);
   $_SESSION["user_profile_update"]="User Profile Updated";
  header("location:edit_user.php?id=".$id);

}
else{
  $update = "UPDATE users SET name = '$name',email='$email',password='$password' WHERE id =$id";
  mysqli_query($db_connect,$update);
   $_SESSION["user_profile_update"]="User Profile Updated";
  header("location:edit_user.php?id=".$id);
}
?>