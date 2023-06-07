<?php
  session_start();
  require "../db_connect.php";

  $name =$_POST["name"];
  $title =$_POST["title"];
  $message =$_POST["message"];
 

  $about_form =  false;

  if(!$name){
    $about_form = true;
    $_SESSION["name_err"] = "Plesae Insert Your Name";
  }
  else{
    $_SESSION["old_name"] = $name ;
  }


  if(!$title){
    $about_form = true;
    $_SESSION["title_err"] = "Plesae Insert Your Title";
  }
  else{
    $_SESSION["old_title"] = $title ;
  }

  if(!$message){
    $about_form = true;
    $_SESSION["message_err"] = "Plesae Insert Your Message";
  }
  else{
    $_SESSION["old_message"] = $message ;
  }





  if($about_form){
    header("location:about.php");
  }
  else{
    $_SESSION["old_name"]='';
    $_SESSION["old_title"]='';
    $_SESSION["old_message"]='';
    $insert = "INSERT INTO about(name,title,message)VALUES('$name','$title','$message')";
    $insert_result = mysqli_query($db_connect,$insert);
    $insert_last_id = mysqli_insert_id($db_connect);
  
  
    $photo = $_FILES["photo"];
    $after_explode = explode('.', $photo['name']);
    $extension = end($after_explode);
    // $allowed_ext = array('jpg','jpeg', 'png', 'gif', 'webp');
    $file_name = $insert_last_id.".".$extension;
  
    $new_location="../uploads/about/".$file_name;
    move_uploaded_file($photo["tmp_name"],$new_location);
  
    $update = "UPDATE about SET photo='$file_name' WHERE id=$insert_last_id";
    mysqli_query($db_connect,$update);
    $_SESSION["about_add"]="About Added Success";
    header("location:about.php");
  }

?>
