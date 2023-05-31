<?php
session_start();
require "../db_connect.php";

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$contact = false;


if(!$name){
  
  $contact = true;
  $_SESSION["name_err"]="Please Enter your name";
}
else{
  $_SESSION["old_name"]=$name;
}

if(!$email){
  $contact = true;
  $_SESSION["email_error_message"] = "Please Enter a Valid Email";
  }
  else{
    
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $contact= true;
      $_SESSION["old_email"] = $email;
      $_SESSION["email_error_message"] = "Valid email format 'name@example.com'";
  }else{
    $email_chcck = "SELECT COUNT(*) AS email_check FROM users WHERE email = '$email'";
    $email_chcck_result =mysqli_query($db_connect, $email_chcck);
    $email_chcck_assoc= mysqli_fetch_assoc($email_chcck_result);

    if(!$email_chcck_assoc['email_check'] == 0){ 
      $contact = true;
      $_SESSION["email_error_message"] = "This email already taken'";
      $_SESSION["old_email"]=$email;
    }
    else{
      $_SESSION["old_email"]=$email;
    }
  }
}

if($subject){
  $_SESSION["old_subject"]=$subject;
}

if($message){
  $_SESSION["old_message"]=$message;
}


if($contact){
  header("location:/dash/index.php#contact");
}
else{
  $_SESSION["old_name"]='';
  $_SESSION["old_email"]='';
  $_SESSION["old_subject"]='';
  $_SESSION["old_message"]='';

  $insert = "INSERT INTO contact(name,email,subject,message)VALUES('$name','$email','$subject','$message')";
  mysqli_query($db_connect,$insert);


  $_SESSION["info_send"]="Info send successful";
  header("location:/dash/index.php#contact");
}

?>