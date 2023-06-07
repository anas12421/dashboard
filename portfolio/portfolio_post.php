<?php
session_start();
require "../db_connect.php";


$title = $_POST["title"];
$sub_title = $_POST["sub_title"];




$portfolio_form =false;

if(!$title){
  $portfolio_form =true;
  $_SESSION['title_err']="Please Fill the Input";
  header("location:portfolio.php");
}
else{
  $_SESSION["old_title"]=$title;
}

if(!$sub_title){
  $portfolio_form =true;
  $_SESSION['sub_title_err']="Please Fill the Input";
  header("location:portfolio.php");
}
else{
  $_SESSION["old_sub_title"]=$sub_title;
}

// if(!$photo){
//   $portfolio_form =true;
//   $_SESSION['photo_err']="Please upload a photo";
//   header("location:portfolio.php");
// }




if($portfolio_form){
  header("location:portfolio.php");
}
else{
  $_SESSION["old_sub_title"]='';
  $_SESSION["old_title"]='';
  $insert = "INSERT INTO portfolios(title,sub_title)VALUES('$title','$sub_title')";
  $insert_result = mysqli_query($db_connect,$insert);
  $insert_last_id = mysqli_insert_id($db_connect);


  $photo = $_FILES["photo"];
  $after_explode = explode('.', $photo['name']);
  $extension = end($after_explode);
  // $allowed_ext = array('jpg','jpeg', 'png', 'gif', 'webp');
  $file_name = $insert_last_id.".".$extension;

  $new_location="../uploads/portfolio/".$file_name;
  move_uploaded_file($photo["tmp_name"],$new_location);

  $update = "UPDATE portfolios SET photo='$file_name' WHERE id=$insert_last_id";
  mysqli_query($db_connect,$update);
  $_SESSION["portfolio_added"]="Portfolio Added Success";
  header("location:portfolio.php");
}
?>