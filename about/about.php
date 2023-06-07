<?php
session_start();
 require "../login_check.php";
 require "../db_connect.php";
 require "../dash_header.php";

//  $id = $_SESSION["id"];
 $select_about ="SELECT * FROM about";
 $select_about_res = mysqli_query($db_connect,$select_about);

 $select_about_count = "SELECT COUNT(*) as mot FROM about WHERE status =1";
 $select_about_count_res = mysqli_query($db_connect,$select_about_count);
 $select_about_count_assoc=mysqli_fetch_assoc($select_about_count_res);


 ?>



<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-8 mx-auto">
            <div class="card">
              <div class="card-header">
                <h3>Add About Details</h3>
              </div>
              <div class="card-body">
              
                <form action="about_post.php" method="POST" enctype="multipart/form-data">
                  <div class="mb-3">
                   <input type="text" class="form-control" placeholder="Enter Your Name" name="name" value="<?=(isset( $_SESSION["old_name"])? $_SESSION["old_name"]:'')?>">

                   <?php if(isset($_SESSION["name_err"])){ ?>
                    <div class="alert alert-danger"><?=$_SESSION["name_err"]?></div>
                   <?php } unset($_SESSION["name_err"]) ?>
                  </div>

                  <div class="mb-3">
                   <input type="text" class="form-control" placeholder="Enter Your Title" name="title" value="<?=(isset( $_SESSION["old_title"])? $_SESSION["old_title"]:'')?>">
                   <?php if(isset($_SESSION["title_err"])){ ?>
                    <div class="alert alert-danger"><?=$_SESSION["title_err"]?></div>
                   <?php } unset($_SESSION["title_err"]) ?>
                  </div>

                  <div class="mb-3">
                   <textarea name="message" id="" class="form-control" cols="30" rows="10" placeholder="Please Enter Your Message"><?=(isset( $_SESSION["old_message"])? $_SESSION["old_message"]:'')?></textarea>
                   <?php if(isset($_SESSION["message_err"])){ ?>
                    <div class="alert alert-danger"><?=$_SESSION["message_err"]?></div>
                   <?php } unset($_SESSION["message_err"]) ?>
                  </div>


                  <div class="mb-3">
                 
                  <input type="file" name="photo" class="form-control" onchange="document.getElementById('about').src = window.URL.createObjectURL(this.files[0])">
                      <img width="150" src="" id="about" alt="Please Upload a Photo">
                  </div>

                  <button type="submit" class="btn btn-primary">Add About</button>
                </form>
              </div>
            </div>
          </div>  
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-hedaer">
                <h3>About Details</h3>
              </div>
              <div class="card-body">
                <table class="table table-hover table-bordered">
                  <tr>
                    <th>SL</th>
                    <th>NAME</th>
                    <th>TITLE</th>
                    <th>MESSAGE</th>
                    <th>PHOTO</th>
                    <th>STATUS</th>
                    <th>ACTION</th>
                  </tr>
                  <?php foreach($select_about_res as $key=>$about) {?>
                    <tr>
                      <td><?=$key+1?></td>
                      <td><?=$about['name']?></td>
                      <td><?=$about['title']?></td>
                      <td><?=$about['message']?></td>
                      <td><img width="150" src="../uploads/about/<?=$about['photo']?>" alt=""></td>
                      <td>
                      <a href="status_about.php?id=<?=$about['id']?>" class="btn btn-<?=$about["status"]==0?'light':'success'?>"><?=$about["status"]==0?'OFF':'ON'?></a>
                      </td>
                      <td class="d-flex justify-content-center align-items-center">
                        <a href="edit_about.php?id=<?=$about['id']?>" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                        <a href="delete_about.php?id=<?=$about['id']?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                      </td>
                   </tr>
                  <?php }?>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>
        <!--**********************************
            Content body end
        ***********************************-->








        
        
<?php require "../dash_footer.php"; 
  unset($_SESSION['old_name']);
  unset($_SESSION['old_title']);
  unset($_SESSION['old_message']);
?>

        
<?php if(isset($_SESSION['about_add'])) {?>
<script>
  Swal.fire({
  icon: 'success',
  title: 'Success',
  text: '<?=$_SESSION['about_add']?>',
  // footer: '<a href="">Why do I have this issue?</a>'
})
</script>
<?php } unset($_SESSION['about_add'])?>




<?php if(isset($_SESSION['min'])) {?>
<script>
  Swal.fire({
    icon: 'error',
  title: 'Oops...',
  text: '<?=$_SESSION['min']?>',
  // footer: '<a href="">Why do I have this issue?</a>'
})
</script>
<?php } unset($_SESSION['min'])?>




<?php if(isset($_SESSION['max'])) {?>
<script>
  Swal.fire({
    icon: 'error',
  title: 'Oops...',
  text: '<?=$_SESSION['max']?>',
  // footer: '<a href="">Why do I have this issue?</a>'
})
</script>
<?php } unset($_SESSION['max'])?>




