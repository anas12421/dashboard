<?php
session_start();
require '../login_check.php';
require '../db_connect.php';
require '../dash_header.php';


// $id= $_SESSION["id"];
$select = "SELECT * FROM contact";
$contatc_info =mysqli_query($db_connect, $select);

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
            <table class="table table-striped table-bordered table-hover">
              <tr>
                <th >SL</th>
                <th >NAME</th>
                <th >EMAIL</th>
                <th >SUBJECT</th>
                <th >MESSAGEE</th>
                <th >STATUS</th>
                <th class="text-center" >ACTION</th>
              </tr>
              <?php foreach($contatc_info as $key=>$contatc_list){?>
              <tr>
                <td text-center"><?=$key +1?></td>
                <td ><?=$contatc_list['name']?></td>
                <td ><?=$contatc_list['email']?></td>
                <td ><?=$contatc_list['subject']?></td>
                <td ><?=substr($contatc_list['message'],0,15).'......'?></td>
                <td >
                  <a href="view_contact.php?id=<?=$contatc_list['id']?>" class="btn btn-<?=($contatc_list['status']==0)?'light':'success'?>"><?=($contatc_list['status']==0)?'Unread':'Read'?></a>
                </td>
                <td class="d-flex justify-content-center">
									<a href="delete_contact.php?id=<?=$contatc_list['id']?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
              <?php }?>
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