<?php
session_start();
 require "../login_check.php";
 require "../db_connect.php";
 require "../dash_header.php";

 $id = $_GET["id"];;

 $select_service="SELECT * FROM services WHERE id =$id";
 $select_service_result= mysqli_query($db_connect,$select_service);
 $select_service_assoc=mysqli_fetch_assoc($select_service_result);


 ?>




		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card">
              <div class="card-header">
                <h3>Add Expertise</h3>
              </div>
              <div class="card-body">
              
              
                <form action="edit_service_post.php" method="POST">
                  <div class="mb-3">
                  <label for="" class="form-label">Title</label>
                    <input type="hidden" class="form-control" placeholder="Id" name="id" value="<?=$select_service_assoc["id"]?>">
                   <input type="text" class="form-control" placeholder="Enter a Title" name="title" value="<?=$select_service_assoc["title"]?>">
                  </div>

                  <div class="mb-3">
                    <label for="" class="form-label">Description</label>
                   <!-- <input type="text" class="form-control" placeholder="Enter a Description" name="description" value=""> -->
                   <textarea class="form-control" name="description" cols="30" rows="5"><?=$select_service_assoc["description"]?></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Update</button>
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








        
        
<?php require "../dash_footer.php"; ?>
        

        
<?php if(isset($_SESSION['service_updated'])) {?>
<script>
  Swal.fire({
  icon: 'success',
  title: 'Success',
  text: '<?=$_SESSION['service_updated']?>',
  // footer: '<a href="">Why do I have this issue?</a>'
})
</script>
<?php } unset($_SESSION['service_updated'])?>







