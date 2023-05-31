<?php
session_start();
require "../db_connect.php";


$topic = $_POST["topic"];
$percentage = $_POST["percentage"];
$id = $_POST["id"];

// $select_expertise="SELECT * FROM expertise WHERE id =$id";
// $select_expertise_result= mysqli_query($db_connect,$select_expertise);
// $select_expertise_assoc=mysqli_fetch_assoc($select_expertise_result);

if($topic && $percentage){
  $update = "UPDATE expertise SET topic = '$topic',percentage = '$percentage' WHERE id =$id";
  mysqli_query($db_connect,$update);
   $_SESSION["exper_updated"]="Expertise Updated";
  header("location:edit_expertise.php?id=".$id);

}

?>