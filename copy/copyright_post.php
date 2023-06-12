<?php
  session_start();
  require "../db_connect.php";



  $action_name =$_POST['action_name'];
  $action_link =$_POST['action_link'];
  $copy_text =$_POST['copy_text'];

  $copy_form =false;

  if(!$action_name){
    $copy_form = true;
    $_SESSION['feild_err']='Please Fill all the Input';

  }
  else{
    $_SESSION['old_act_name']=$action_name;
  }


  if(!$action_link){
    $copy_form = true;
    $_SESSION['feild_err']='Please Fill all the Input';

  }
  else{
    $_SESSION['old_act_link']=$action_link;
  }

  if(!$copy_text){
    $copy_form = true;
    $_SESSION['feild_err']='Please Fill all the Input';

  }
  else{
    $_SESSION['old_copy_text']=$copy_text;
  }

  if($copy_form){
    header("location:copyright.php");
  }
  else{
  
    $_SESSION['old_act_name']='';
    $_SESSION['old_act_link']='';
    $_SESSION['old_copy_text']='';

    $insert = "INSERT INTO copyright(action_name,action_link,copy_text)VALUES('$action_name','$action_link','$copy_text')";
    mysqli_query($db_connect,$insert);

    $_SESSION['copy_add']="Copyright Added Success";
    header("location:copyright.php");
  }

?>