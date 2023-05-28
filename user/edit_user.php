<?php
session_start();
require "../login_check.php";
require "../dash_header.php";
require "../db_connect.php";

$edit_user_id= $_GET["id"];

$select = "SELECT * FROM users WHERE id = $edit_user_id";
$select_result = mysqli_query($db_connect, $select);
$after_assoc = mysqli_fetch_assoc($select_result);
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
                <h2>Update User Info</h2>
            </div>
            <div class="card-body">
                <?php if(isset( $_SESSION["user_profile_update"])){ ?>
                    <div class="alert alert-success"><?= $_SESSION["user_profile_update"]?></div>
                <?php } unset( $_SESSION["user_profile_update"]) ?>
                <form action="edit_user_post.php" method="POST">
                    <div class="form-group">
                        <label class="mb-1 text-black"><strong>Name</strong></label>
                        <input type="text" class="form-control" name="name" value="<?=$after_assoc["name"]?>">
                        <input type="hidden" class="form-control" name="id" value="<?=$after_assoc["id"]?>">
                    </div>

                    <div class="form-group">
                        <label class="mb-1 text-black"><strong>Email</strong></label>
                        <input type="email" class="form-control" name="email" value="<?=$after_assoc["email"]?>">
                    </div>

                    <div class="form-group">
                        <label class="mb-1 text-black"><strong>Password</strong></label>
                        <input type="password" class="form-control" name="password" >
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


<?php require "../dash_footer.php" ?>