<?php
session_start();
 require "../login_check.php";
 require "../db_connect.php";
 require "../dash_header.php";

//  $id = $_SESSION["id"];
 $select ="SELECT * FROM services";
 $select_res = mysqli_query($db_connect,$select);

 $select_count = "SELECT COUNT(*) as mot FROM services WHERE status =1";
 $select_count_res = mysqli_query($db_connect,$select_count);
 $select_count_assoc=mysqli_fetch_assoc($select_count_res);


 ?>



<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-4">
            <div class="card">
              <div class="card-header">
                <h3>Add Service</h3>
              </div>
              <div class="card-body">
              
                <form action="service_post.php" method="POST">
                  <div class="mb-3">
                   <input type="text" class="form-control" placeholder="Enter Your Title" name="title" value="<?=(isset( $_SESSION["old_title"])? $_SESSION["old_title"]:'')?>">
                    <?php if(isset( $_SESSION["title_err"])) { ?>
                      <div class="alert alert-danger mt-3"><?= $_SESSION["title_err"]?></div>
                    <?php } unset( $_SESSION["title_err"]) ?>
                  </div>

                  <div class="mb-3">
                   <input type="text" class="form-control" placeholder="Enter a Description" name="description" value="<?=(isset( $_SESSION["old_description"])? $_SESSION["old_description"]:'')?>">
                   <?php if(isset( $_SESSION["description_err"])) { ?>
                      <div class="alert alert-danger mt-3"><?= $_SESSION["description_err"]?></div>
                    <?php } unset( $_SESSION["description_err"]) ?>
                  </div>
                  <button type="submit" class="btn btn-primary">Update</button>
                </form>
              </div>
            </div>
          </div>

          <div class="col-lg-8">
              <div class="card">
                <div class="card-header">
                  <h3>Expertise Details</h3>
                </div>
                <div class="card-body">
                
                  <table class="table table-bordered table-striped table-hover text-capitalize">
                    <tr>
                      <th>SL</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>STATUS</th>
                      <th>ACTION</th>
                    </tr>
                  <?php foreach($select_res as $key=>$service_details){?>
                    <tr>
                      <td><?=$key+1?></td>
                      <td><?=$service_details["title"]?></td>
                      <td><?=$service_details["description"]?></td>
                      <td>
                        <a href="service_status.php?id=<?=$service_details['id']?>" class="btn btn-<?=$service_details["status"]==0?'light':'success'?>"><?=$service_details["status"]==0?'OFF':'ON'?></a>
                      </td>
                      <td class="d-flex justify-content-center">
                        <a href="edit_service.php?id=<?=$service_details['id']?>" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                        <a href="delete_service.php?id=<?=$service_details['id']?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php }?>
                  </table>
                </div>
              </div>
          </div>
          
      </div>
    </div>
        <!--**********************************
            Content body end
        ***********************************-->








        
        
<?php require "../dash_footer.php"; 
  unset($_SESSION['old_title']);
  unset($_SESSION['old_description']);
?>

        
<?php if(isset($_SESSION['service_add'])) {?>
<script>
  Swal.fire({
  icon: 'success',
  title: 'Success',
  text: '<?=$_SESSION['service_add']?>',
  // footer: '<a href="">Why do I have this issue?</a>'
})
</script>
<?php } unset($_SESSION['service_add'])?>




<?php if(isset($_SESSION['min'])) {?>
<script>
  Swal.fire({
    icon: 'error',
  title: 'Oops...',
  text: '<?=$_SESSION['min']?>',
  // footer: '<a href="">Why do I have this issue?</a>'
})
</script>
<?php } unset($_SESSION['min'])?>




<?php if(isset($_SESSION['max'])) {?>
<script>
  Swal.fire({
    icon: 'error',
  title: 'Oops...',
  text: '<?=$_SESSION['max']?>',
  // footer: '<a href="">Why do I have this issue?</a>'
})
</script>
<?php } unset($_SESSION['max'])?>




