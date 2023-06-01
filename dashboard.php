<?php
session_start();
require "login_check.php";
require "db_connect.php";
require "dash_header.php";

$id =$_GET["id"];

$user_select = "SELECT * FROM users WHERE id =$id";
$user_select_res= mysqli_query($db_connect,$user_select);
$user_select_assoc=mysqli_fetch_assoc($user_select_res);

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
                    <h2>Welcome <span style="color: #0B2A97; text-transform: uppercase;"><?=$user_select_assoc["name"]?></span> to Dashboard</h2>
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
require "dash_footer.php"
?>