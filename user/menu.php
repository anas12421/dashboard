<?php
  session_start();
  require "../login_check.php";
  require "../db_connect.php";
  require "../dash_header.php"
?>


	<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
              <div class="card-header">
                <h2>Add Menu</h2>
              </div>
              <div class="card-body">
              
                <form action="menu_post.php" method="POST">
                <?php if(isset($_SESSION["menu_sucess"])){ ?>
                      <div class="alert alert-success"><?= $_SESSION["menu_sucess"] ?></div>
                    <?php } unset($_SESSION["menu_sucess"])?>
                <div class="form-group">
                    <label class="mb-1 text-black"><strong>Menu Name</strong></label>
                    <input type="text" class="form-control" placeholder="Enter Menu Name" name="menu">
                    <?php if(isset($_SESSION["menu_err"])){ ?>
                      <div class="alert alert-danger"><?= $_SESSION["menu_err"] ?></div>
                    <?php } unset($_SESSION["menu_err"])?>
                </div>

                <div class="form-group">
                    <label class="mb-1 text-black"><strong>Menu Link</strong></label>
                    <input type="text" class="form-control" placeholder="Enter Menu Link" name="link">
                </div>
                    <button type="submit" class="btn btn-primary">Add Menu</button>
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




<?php require "../dash_footer.php" ?>