<?php
session_start();
require "../db_connect.php";


$name = $_POST["name"];
$menu_link = $_POST["menu_link"];
$id = $_POST["id"];

if($name){
  $update = "UPDATE menu SET menu_name = '$name',menu_link='$menu_link'WHERE id =$id";
  mysqli_query($db_connect,$update);
   $_SESSION["menu_update"]="Menu Updated";
  header("location:edit_menu.php?id=".$id);

}
?>