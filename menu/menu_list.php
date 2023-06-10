<?php

  session_start();
  require "../login_check.php";
  require "../db_connect.php";
  require "../dash_header.php";

  $id= $_SESSION["id"];
  $select = "SELECT * FROM menu";
  $menu_list =mysqli_query($db_connect, $select);
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
                <h3>Menu List</h3>
              </div>
              <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                  <tr>
                    <th>SL</th>
                    <th>MENU NAME</th>
                    <th>MENU LINK</th>
                    <th class="text-center">STATUS</th>
                    <th class="text-center">Action</th>
                  </tr>
                  <?php foreach($menu_list as $key=>$menu){?>
                        <tr>
                          <td text-center"><?=$key +1?></td>
                          <td ><?=$menu['menu_name']?></td>
                          <td ><?=$menu['menu_link']?></td>
                          <td class="text-center" >
                            <a href="status_menu.php?id=<?=$menu['id']?>" class="btn btn-<?=(($menu['status']==0?'danger':'success'))?>">
                              <?=($menu['status']==0?'OFF':'ON')?>
                            </a>
                          </td>
                          <td class="d-flex justify-content-center">
                            <a href="edit_menu.php?id=<?=$menu['id']?>" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="delete_menu.php?id=<?=$menu['id']?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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
        <!--**********************************
            Content body end
        ***********************************-->

        <div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
      


<?php

  require "../dash_footer.php"
?>