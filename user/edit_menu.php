<?php
session_start();
require "../login_check.php";
require "../dash_header.php";
require "../db_connect.php";

$menu_id= $_GET["id"];

$select = "SELECT * FROM menu WHERE id = $menu_id";
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
                <?php if(isset( $_SESSION["menu_update"])){ ?>
                    <div class="alert alert-success"><?= $_SESSION["menu_update"]?></div>
                <?php } unset( $_SESSION["menu_update"]) ?>
                <form action="edit_menu_post.php" method="POST">
                    <div class="form-group">
                        <label class="mb-1 text-black"><strong>Menu Name</strong></label>
                        <input type="text" class="form-control" name="name" value="<?=$after_assoc["menu_name"]?>">
                        <input type="hidden" class="form-control" name="id" value="<?=$after_assoc["id"]?>">
                    </div>

                    <div class="form-group">
                        <label class="mb-1 text-black"><strong>Menu Link</strong></label>
                        <input type="text" class="form-control" name="menu_link" value="<?=$after_assoc["menu_link"]?>">
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