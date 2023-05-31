<?php
session_start();
require "../db_connect.php";

$topic = $_POST["topic"];
$percentage = $_POST["percentage"];

$expertise_form = false;

if(!$topic){
  $expertise_form = true;
  $_SESSION["topic_err"]="Please enter your topic";
  header("location:expertise_info.php");
}
else{
  $_SESSION["old_topic"]=$topic;
}


if(!$percentage){
  $expertise_form = true;
  $_SESSION["percentage_err"]="Please enter your percentage";
  header("location:expertise_info.php");
}
else{
  $_SESSION["old_percentage"]=$percentage;
}




if($expertise_form){
  header("location:expertise_info.php");
}
else{

  $_SESSION["old_topic"]='';
  $_SESSION["old_percentage"]='';

  $insert = "INSERT INTO expertise(topic,percentage)VALUES('$topic','$percentage')";
  mysqli_query($db_connect,$insert);
  $_SESSION["expertise_update"]='Expertise Added Successful';
  header('location:expertise_info.php');
}



?>