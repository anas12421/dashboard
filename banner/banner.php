<?php
session_start();
require "../login_check.php";
require "../dash_header.php";
require "../db_connect.php";

$banner_select = "SELECT * FROM banner";
$banner_select_result = mysqli_query($db_connect,$banner_select);
$banner_assoc = mysqli_fetch_assoc($banner_select_result);

?>

		
		<!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3>Update Banner</h3>
              </div>
              <div class="card-body">
              <?php if(isset( $_SESSION["banner_update"])){ ?>
                    <div class="alert alert-success"><?= $_SESSION["banner_update"]?></div>
                <?php } unset( $_SESSION["banner_update"]) ?>

                <form action="banner_post.php" method="POST" enctype="multipart/form-data">


                <div class="form-group">
                    <label class="mb-1 text-black"><strong>Sub Title</strong></label>
                    <input type="text" class="form-control" placeholder="" name="sub_title" value="<?=$banner_assoc['sub_title']?>">
                </div>

                <div class="form-group">
                    <label class="mb-1 text-black"><strong>Title</strong></label>
                    <input type="text" class="form-control" placeholder="" name="title" value="<?=$banner_assoc['title']?>">
                </div>
                
                <div class="form-group">
                    <label class="mb-1 text-black"><strong>Description</strong></label>
                    <textarea class="form-control" name="description" id="" cols="30" rows="5"><?=$banner_assoc['description']?></textarea>
                </div>

                <div class="form-group">
                    <label class="mb-1 text-black"><strong>Action Button</strong></label>
                    <input type="text" class="form-control" placeholder="" name="action_btn" value="<?=$banner_assoc['action_btn']?>">
                </div>

                <div class="form-group">
                    <label class="mb-1 text-black"><strong>Action Link</strong></label>
                    <input type="url" class="form-control" placeholder="" name="action_link" value="<?=$banner_assoc['action_link']?>">
                </div>

                <div class="form-group">
                    <label class="mb-1 text-black"><strong>Action Link</strong></label>
                    <input type="file" class="form-control" placeholder="" name="photo" onchange="document.getElementById('banner').src = window.URL.createObjectURL(this.files[0])">
                </div>

                <div class="form-group">
                    <img id="banner" width="150" src="../uploads/banner/<?=$banner_assoc["photo"]?>" alt="banner_img">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>

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
require "../dash_footer.php"
?>