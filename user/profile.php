<?php
session_start();
require "../login_check.php";
require "../dash_header.php";
require "../db_connect.php";

$select_profile = "SELECT * FROM users";
$select_profile_res =mysqli_query($db_connect, $select_profile);
$profile_assoc =mysqli_fetch_assoc($select_profile_res);
?>

<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6">
						<div class="card">
              <div class="card-header">
                <h2>Profiel Upload</h2>
              </div>
              <div class="card-body">
                <?php if(isset( $_SESSION["update"])){?>
                  <div class="alert alert-success"><?= $_SESSION["update"]?></div>
                <?php } unset( $_SESSION["update"]);?>
                <form method="POST" action="profiel_post.php">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="hidden" class="form-control" id="exampleInputEmail1" name="user_id" value="<?= $user_assoc['id'] ?>">
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="<?= $user_assoc['name'] ?>">
                  </div>
                  
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Old Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="old_password">
                    <?php if(isset( $_SESSION["wrong_pass"])){?>
                       <div class="alert alert-danger mt-2"><?= $_SESSION["wrong_pass"]?></div>
                    <?php } unset( $_SESSION["wrong_pass"]);?>
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputPassword2" class="form-label">New Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword2" name="password">
                    
                  </div>


                 
                  
                  <button type="submit" class="btn btn-primary">Update</button>
                </form>
              </div>
            </div>
					</div>

          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h2>Profile Photo Update</h2>
              </div>
              <div class="card-body">

              <?php if(isset( $_SESSION["photo_sucess"])){?>
                  <div class="alert alert-success mb-3"><?= $_SESSION["photo_sucess"]?></div>
                <?php } unset( $_SESSION["photo_sucess"]);?>

              
                
              <?php if(isset( $_SESSION["ext_err"])){?>
                  <div class="alert alert-danger mb-3"><?= $_SESSION["ext_err"]?></div>
                <?php } unset( $_SESSION["ext_err"]);?>

              <?php if(isset( $_SESSION["size_err"])){?>
                  <div class="alert alert-danger mb-3"><?= $_SESSION["size_err"]?></div>
                <?php } unset( $_SESSION["size_err"]);?>

              <?php if(isset( $_SESSION["photo_select_err"])){?>
                  <div class="alert alert-danger mb-3"><?= $_SESSION["photo_select_err"]?></div>
                <?php } unset( $_SESSION["photo_select_err"]);?>


                <form action="profile_photo.php" method="POST" enctype="multipart/form-data">
                  <div class="mb-3">
                    <input type="file" name="photo" class="form-control" onchange="document.getElementById('profile').src = window.URL.createObjectURL(this.files[0])">
                    <img width="150" id="profile" src="/dash/uploads/users/<?=$profile_assoc["photo"]?>" alt="">
                  </div>
                  <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                </form>
                
              </div>
            </div>
          </div>
				</div>
      </div>
    </div>
        <!--**********************************
            Content body end
        ***********************************-->



<?php
  require "../dash_footer.php";
?>