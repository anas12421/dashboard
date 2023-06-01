<?php
session_start();
require "../db_connect.php";

$title = $_POST["title"];
$description=$_POST["description"];


$service_form = false;

if(!$title){
  $service_form = true;
  $_SESSION["title_err"]="Please enter a Title";
  header("location:service.php");
}
else{
  $_SESSION["old_title"]=$title;
}

if(!$description){
  $service_form = true;
  $_SESSION["description_err"]="Please enter a Description";
  header("location:service.php");
}
else{
  $_SESSION["old_description"]=$description;
}

if($service_form){
  header("location:service.php");
}
else{

  $_SESSION["old_title"]='';
  $_SESSION["old_description"]='';

  $insert = "INSERT INTO services(title,description)VALUES('$title','$description')";
  mysqli_query($db_connect,$insert);
  $_SESSION["service_add"]='Expertise Added Successful';
  header('location:service.php');
}


?>