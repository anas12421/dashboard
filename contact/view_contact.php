<?php
session_start();
require '../login_check.php';
require '../db_connect.php';
require '../dash_header.php';

$id = $_GET['id'];
$update ="UPDATE contact set status=1 WHERE id =$id";
mysqli_query($db_connect,$update);


$select = "SELECT * FROM contact WHERE id =$id";
$contatc_info =mysqli_query($db_connect, $select);
$contatc_info_assoc =mysqli_fetch_assoc($contatc_info);



?>



<div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
        <div class="col-lg-12">
        <div class="card">
          <div class="card-header text-center">
            <h2>Contact Information</h2>
          </div>
          <div class="card-body">
            <table class="table table-bordered">
              <tr>
                <td>Name</td>
                <td><?=$contatc_info_assoc['name']?></td>
              </tr>
              <tr>
                <td>Email</td>
                <td><?=$contatc_info_assoc['email']?></td>
              </tr>
              <tr>
                <td>Subject</td>
                <td><?=$contatc_info_assoc['subject']?></td>
              </tr>
              <tr>
                <td>Message</td>
                <td><?=$contatc_info_assoc['message']?></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
				</div>
      </div>
    </div>



<?php
require "../dash_footer.php";
?>