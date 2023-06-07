<?php
session_start();
 require "../login_check.php";
 require "../db_connect.php";
 require "../dash_header.php";

 $id = $_GET["id"];;

 $select_portfolio="SELECT * FROM portfolios WHERE id =$id";
 $select_portfolio_result= mysqli_query($db_connect,$select_portfolio);
 $select_portfolio_assoc=mysqli_fetch_assoc($select_portfolio_result);


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
                <h3>Update Portfolio</h3>
              </div>
              <div class="card-body">
                <form action="edit_portfolio_post.php" method="post" enctype="multipart/form-data">
                  <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="hidden" name="id" class="form-control" value="<?=$select_portfolio_assoc['id']?>">
                    <input type="text" name="title" class="form-control" value="<?=$select_portfolio_assoc['title']?>">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Sub Title</label>
                    <input type="text" name="sub_title" class="form-control" value="<?=$select_portfolio_assoc['sub_title']?>">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Photo</label>
                    <input type="file" name="photo" class="form-control" onchange="document.getElementById('portfolio').src = window.URL.createObjectURL(this.files[0])">
                    <img id="portfolio" width="150" src="../uploads/portfolio/<?=$select_portfolio_assoc['photo']?>" alt="">                    
                  </div>


                  <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Update Portfolio</button>      
                  </div>
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
      

<?php if(isset($_SESSION['portfolio_updated'])) {?>
<script>
  Swal.fire({
  icon: 'success',
  title: 'Success',
  text: '<?=$_SESSION['portfolio_updated']?>',
  // footer: '<a href="">Why do I have this issue?</a>'
})
</script>

<?php } unset($_SESSION['portfolio_updated'])?>








