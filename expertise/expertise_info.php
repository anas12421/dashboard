<?php
session_start();
 require "../login_check.php";
 require "../db_connect.php";
 require "../dash_header.php";

//  $id = $_SESSION["id"];
 $select ="SELECT * FROM expertise";
 $select_res = mysqli_query($db_connect,$select);

 $select_count = "SELECT COUNT(*) as mot FROM expertise WHERE status =1";
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
                <h3>Add Expertise</h3>
              </div>
              <div class="card-body">
                <form action="expertise_info_post.php" method="POST">
                  <div class="mb-3">
                   <input type="text" class="form-control" placeholder="Enter Your Topic" name="topic" value="<?=(isset($_SESSION['old_topic'])?$_SESSION['old_topic']:'')?>">
                   <?php if(isset($_SESSION['topic_err'])) {?>
                    <div class="alert alert-danger mt-2"><?=$_SESSION['topic_err']?></div>
                  <?php } unset($_SESSION['topic_err'])?>
                  </div>

                  <div class="mb-3">
                   <input type="number" class="form-control" placeholder="Enter Your Skill (%)" name="percentage" value="<?=(isset($_SESSION['old_percentage'])?$_SESSION['old_percentage']:'')?>">
                   <?php if(isset($_SESSION['percentage_err'])) {?>
                    <div class="alert alert-danger mt-2"><?=$_SESSION['percentage_err']?></div>
                  <?php } unset($_SESSION['percentage_err'])?>
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
                <?php if(isset($_SESSION['min'])) {?>
                <div class="alert alert-danger"><?=$_SESSION['min']?></div>
                <?php } unset($_SESSION['min'])?>

                <?php if(isset($_SESSION['max'])) {?>
                <div class="alert alert-danger"><?=$_SESSION['max']?></div>
                <?php } unset($_SESSION['max'])?>
                  <table class="table table-bordered table-striped table-hover text-capitalize">
                    <tr>
                      <th>SL</th>
                      <th>TOPIC</th>
                      <th>PERCENTAGE</th>
                      <th>STATUS</th>
                      <th>ACTION</th>
                    </tr>
                  <?php foreach($select_res as $key=>$expertise_info){?>
                    <tr>
                      <td><?=$key+1?></td>
                      <td><?=$expertise_info["topic"]?></td>
                      <td><?=$expertise_info["percentage"]?></td>
                      <td>
                        <a href="expertise_status.php?id=<?=$expertise_info['id']?>" class="btn btn-<?=$expertise_info["status"]==0?'light':'success'?>"><?=$expertise_info["status"]==0?'OFF':'ON'?></a>
                      </td>
                      <td class="d-flex justify-content-center">
                        <a href="edit_expertise.php?id=<?=$expertise_info['id']?>" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                        <a href="delete_expertise.php?id=<?=$expertise_info['id']?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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
  unset($_SESSION['old_topic']);
  unset($_SESSION['old_percentage']);
?>
        


<?php if(isset($_SESSION['expertise_update'])) {?>
<script>
  Swal.fire({
  icon: 'success',
  title: 'Success',
  text: '<?=$_SESSION['expertise_update']?>',
  // footer: '<a href="">Why do I have this issue?</a>'
})
</script>

<?php } unset($_SESSION['expertise_update'])?>







