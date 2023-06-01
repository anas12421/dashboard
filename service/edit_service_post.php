<?php
session_start();
require "../db_connect.php";


$title = $_POST["title"];
$description = $_POST["description"];
$id = $_POST["id"];

// $select_expertise="SELECT * FROM expertise WHERE id =$id";
// $select_expertise_result= mysqli_query($db_connect,$select_expertise);
// $select_expertise_assoc=mysqli_fetch_assoc($select_expertise_result);

if($title && $description){
  $update = "UPDATE services SET title = '$title',description = '$description' WHERE id =$id";
  mysqli_query($db_connect,$update);
   $_SESSION["service_updated"]="Service Updated";
  header("location:edit_service.php?id=".$id);

}

?>