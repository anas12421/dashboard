<?php
session_start();
require "../dash_header.php";
require "../login_check.php";
require "../db_connect.php";

$select_copy ="SELECT * FROM copyright";
$select_copy_res =mysqli_query($db_connect,$select_copy);

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
                  <h3>Copyright Details</h3>
                </div>
                <div class="card-body">
                  <?php if(isset($_SESSION['feild_err'])) { ?>
                    <div class="alert alert-danger mt-2"><?=$_SESSION['feild_err']?></div>
                  <?php } unset($_SESSION['feild_err'])?>
                  <form action="copyright_post.php" method="post">
                    <div class="mb-3">
                      <label for="" class="label-control">Action Name</label>
                      <input type="text" class="form-control" name="action_name" value="<?=(isset( $_SESSION['old_act_name'])? $_SESSION['old_act_name']:'')?>" >
                    </div>
                    <div class="mb-3">
                      <label for="" class="label-control">Action Link</label>
                      <input type="text" class="form-control" name="action_link" value="<?=(isset( $_SESSION['old_act_name'])? $_SESSION['old_act_link']:'')?>" >
                    </div>
                    <div class="mb-3">
                      <label for="" class="label-control">Copyright Text</label>
                      <input type="text" class="form-control" name="copy_text" value="<?=(isset( $_SESSION['old_act_name'])? $_SESSION['old_copy_text']:'')?>" >
                    </div>
                    <div class="mb-3">
                      <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                  </form>
                </div>
              </div>
          </div>
          <div class="col-lg-8">
            <div class="card">
              <div class="card-header">
                Copyright Details
              </div>
              <div class="card-body">
                <table class="table table-striped table-bordered table-hover">
                  <tr>
                    <th>SL</th>
                    <th>ACTION NAME</th>
                    <th>ACTION LINK</th>
                    <th>COPYRIGHT TEXT</th>
                    <th>STATUS</th>
                    <th>ACTION</th>
                  </tr>
                  <?php foreach($select_copy_res as $key=>$copyright) {?>
                    <tr>
                      <td><?=$key+1?></td>
                      <td><?=$copyright['action_name']?></td>
                      <td><?=$copyright['action_link']?></td>
                      <td><?=$copyright['copy_text']?></td>
                      <td>
                      <a href="status_copy.php?id=<?=$copyright['id']?>" class="btn btn-<?=$copyright["status"]==0?'light':'success'?>"><?=$copyright["status"]==0?'OFF':'ON'?></a>
                      </td>
                      <td class="d-flex justify-content-center align-items-center">
                        <a href="delete_copy.php?id=<?=$copyright['id']?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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
unset( $_SESSION['old_act_name']);
unset( $_SESSION['old_act_link']);
unset( $_SESSION['old_copy_text']);
?>



<?php if(isset($_SESSION["copy_add"])) {?>

<script>
  Swal.fire({
position: 'top-end',
icon: 'success',
title: '<?=$_SESSION["copy_add"]?>',
showConfirmButton: false,
timer: 1500
})
</script>

<?php } unset($_SESSION["copy_add"])?>

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