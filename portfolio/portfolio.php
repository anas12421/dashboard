<?php
session_start();
require "../dash_header.php";
require "../login_check.php";
require "../db_connect.php";

$select = "SELECT * FROM portfolios";
$portfolios_res=mysqli_query($db_connect,$select);
?>
	<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
               <div class="card">
               <div class="card-header">
                    <h3>Add Portfolio</h3>
                </div>
                <div class="card-body">
                  
                  
                  <form action="portfolio_post.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label class="form-label">Title</label>
                      <input type="text" name="title" class="form-control" value="<?=(isset($_SESSION["old_title"])?$_SESSION["old_title"]:'')?>">
                      <?php if(isset($_SESSION["title_err"])) {?>
                        <div class="alert alert-danger mt-2"><?=$_SESSION["title_err"]?></div>  
                      <?php } unset($_SESSION["title_err"])?>
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Sub Title</label>
                      <input type="text" name="sub_title" class="form-control" value="<?=(isset($_SESSION["old_sub_title"])?$_SESSION["old_sub_title"]:'')?>">

                      <?php if(isset($_SESSION["sub_title_err"])) {?>
                        <div class="alert alert-danger mt-2"><?=$_SESSION["sub_title_err"]?></div>  
                      <?php } unset($_SESSION["sub_title_err"])?>
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Photo</label>
                      <input type="file" name="photo" class="form-control" onchange="document.getElementById('port').src = window.URL.createObjectURL(this.files[0])">
                      <img width="150" src="" id="port" alt="Please Upload a Photo">
                      <?php if(isset($_SESSION["photo_err"])) {?>
                        <div class="alert alert-danger mt-2"><?=$_SESSION["photo_err"]?></div>  
                      <?php } unset($_SESSION["photo_err"])?>
                    </div>

                    <div class="mb-3">
                      <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                  </form>
                </div>
               </div>
            </div>
            <div class="col-lg-9">
              <div class="card">
                <div class="card-header">
                  <h3>Portfolio Item List</h3>
                </div>
                <div class="card-body">
                  <table class="table table-hover table-bordered table-striped">
                    <tr>
                      <th>SL</th>
                      <th>TITLE</th>
                      <th>SUB TITLE</th>
                      <th>PHOTO</th>
                      <th>STATUS</th>
                      <th>ACTION</th>
                    </tr>
                  <?php foreach($portfolios_res as $key=>$portfolio){?>
                    <tr>
                      <td><?=$key+1?></td>
                      <td><?=$portfolio["title"]?></td>
                      <td><?=$portfolio["sub_title"]?></td>
                      <td><img width="150" src="../uploads/portfolio/<?=$portfolio['photo']?>" alt=""></td>
                      <td>
                      <a href="status_portfolio.php?id=<?=$portfolio['id']?>" class="btn btn-<?=$portfolio["status"]==0?'light':'success'?>"><?=$portfolio["status"]==0?'OFF':'ON'?></a>
                      </td>
                      <td class="d-flex justify-content-center align-items-center">
                        <a href="edit_portfolio.php?id=<?=$portfolio['id']?>" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                        <a href="delete_portfolio.php?id=<?=$portfolio['id']?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php } ?>
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


<?php
require "../dash_footer.php";
unset($_SESSION["old_title"]);
unset($_SESSION["old_sub_title"]);
?>




<?php if(isset($_SESSION["portfolio_added"])) {?>

  <script>
    Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: '<?=$_SESSION["portfolio_added"]?>',
  showConfirmButton: false,
  timer: 1500
  })
  </script>

<?php } unset($_SESSION["portfolio_added"])?>



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