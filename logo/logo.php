<?php
session_start();
require "../login_check.php";
require "../dash_header.php";
require "../db_connect.php";

$select_logo = "SELECT * FROM logos";
$logos =mysqli_query($db_connect, $select_logo);
$logos_assoc =mysqli_fetch_assoc($logos);

$select_footer_logo = "SELECT * FROM footer_logo";
$footer_logos =mysqli_query($db_connect, $select_footer_logo);
$footer_logos_assoc =mysqli_fetch_assoc($footer_logos);

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
                <h2>Main Logo</h2>
              </div>
              <div class="card-body">
                <?php if(isset($_SESSION["error"])){?>
                  <div class="alert alert-danger"><?=$_SESSION["error"]?></div>
                <?php } unset($_SESSION["error"])?>

                <?php if(isset($_SESSION["logo_add"])){?>
                  <div class="alert alert-success"><?=$_SESSION["logo_add"]?></div>
                <?php } unset($_SESSION["logo_add"])?>
                <form action="logo_post.php" method="POST" enctype="multipart/form-data">
                  <div class="mb-3">
                    <input type="file" class="form-control" name="main_logo" onchange="document.getElementById('main_logo').src = window.URL.createObjectURL(this.files[0])">
                  </div>
                  <div class="my-2">
                    <img id="main_logo" width="120" src="../uploads/logo/<?=$logos_assoc["logo"]?>" alt="">
                  </div>
                  <button class="btn btn-primary" type="submit">Update</button>
                </form>
              </div>
            </div>
				</div>


					<div class="col-lg-6">
						<div class="card">
              <div class="card-header">
                <h2>Footer Logo</h2>
              </div>
              <div class="card-body">
                <form action="logo_post.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                      <input type="file" class="form-control" name="footer_logo" onchange="document.getElementById('footer_logo').src = window.URL.createObjectURL(this.files[0])">
                    </div>
                    <div class="my-2">
                    <img id="footer_logo" width="120" src="../uploads/logo/<?=$footer_logos_assoc["logo"]?>" alt="">
                  </div>
                    <button class="btn btn-primary" type="submit">Update</button>
                  </form>
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