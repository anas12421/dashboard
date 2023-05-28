<?php
session_start();
require "../db_connect.php";


$menu = $_POST["menu"];
$link = $_POST["link"];

$menu_check = false;

if(!$menu){
  $menu_check = true;
  $_SESSION["menu_err"]="Please Enter a menu name";
  header("location:menu.php");
}
else{
  $insert = "INSERT INTO menu(menu_name,menu_link)VALUES('$menu','$link')";
  mysqli_query($db_connect, $insert);

  $_SESSION["menu_sucess"]="Menu Added Sucessful";
  header("location:menu.php");


}


?>