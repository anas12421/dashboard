<?php
session_start();
 require "../login_check.php";
 require "../db_connect.php";
 require "../dash_header.php";

 $id = $_GET["id"];;

 $select_expertise="SELECT * FROM expertise WHERE id =$id";
 $select_expertise_result= mysqli_query($db_connect,$select_expertise);
 $select_expertise_assoc=mysqli_fetch_assoc($select_expertise_result);


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
              
              
                <form action="edit_expertise_post.php" method="POST">
                  <div class="mb-3">
                    <input type="hidden" class="form-control" placeholder="Enter Your Topic" name="id" value="<?=$select_expertise_assoc["id"]?>">
                   <input type="text" class="form-control" placeholder="Enter Your Topic" name="topic" value="<?=$select_expertise_assoc["topic"]?>">
                  </div>

                  <div class="mb-3">
                   <input type="number" class="form-control" placeholder="Enter Your Skill (%)" name="percentage" value="<?=$select_expertise_assoc["percentage"]?>">
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
        

<?php if(isset($_SESSION['exper_updated'])) {?>
<script>
  Swal.fire({
  icon: 'success',
  title: 'Success',
  text: '<?=$_SESSION['exper_updated']?>',
  // footer: '<a href="">Why do I have this issue?</a>'
})
</script>

<?php } unset($_SESSION['exper_updated'])?>








