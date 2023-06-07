<?php
session_start();
require "../db_connect.php";


$title = $_POST["title"];
$sub_title = $_POST["sub_title"];
$id = $_POST["id"];

$select_from ="SELECT * FROM portfolios WHERE id=$id";
$select_form_res= mysqli_query($db_connect,$select_from);
$select_form_assoc=mysqli_fetch_assoc($select_form_res);

$photo = $_FILES["photo"];

  $after_explode = explode('.', $photo['name']);
  $extension = end($after_explode);
  // $allowed_ext = array('jpg','jpeg', 'png', 'gif', 'webp');
  $file_name = $id.".".$extension;


// $select_expertise="SELECT * FROM expertise WHERE id =$id";
// $select_expertise_result= mysqli_query($db_connect,$select_expertise);
// $select_expertise_assoc=mysqli_fetch_assoc($select_expertise_result);

// if($title || $sub_title){
  
//   $update = "UPDATE portfolios SET title = '$title',sub_title = '$sub_title' WHERE id =$id";
//   mysqli_query($db_connect,$update);
//   $_SESSION["portfolio_updated"]="Portfolio Updated";
//   header("location:edit_portfolio.php?id=".$id);
// }


if($photo['name'] == ''){
  $update = "UPDATE portfolios SET title = '$title',sub_title = '$sub_title' WHERE id =$id";
  mysqli_query($db_connect,$update);
  $_SESSION["portfolio_updated"]="Portfolio Updated";
  header("location:edit_portfolio.php?id=".$id);
}
else{
    $delete_from ="../uploads/portfolio/".$select_form_assoc["photo"];
  unlink($delete_from);

  
  $new_location="../uploads/portfolio/".$file_name;
  move_uploaded_file($photo["tmp_name"],$new_location);

  $update = "UPDATE portfolios SET title = '$title',sub_title = '$sub_title', photo='$file_name' WHERE id=$id";
  mysqli_query($db_connect,$update);
  $_SESSION["portfolio_updated"]="Portfolio Updated";
  header("location:edit_portfolio.php?id=".$id);
}

?>