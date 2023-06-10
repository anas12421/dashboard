<?php
session_start();
 require "../login_check.php";
 require "../db_connect.php";
 require "../dash_header.php";

 $id = $_GET["id"];
//  $select_about ="SELECT * FROM about";
//  $select_about_res = mysqli_query($db_connect,$select_about);

 $select_about_count = "SELECT * FROM about WHERE id=$id";
 $select_about_count_res = mysqli_query($db_connect,$select_about_count);
 $select_about_count_assoc=mysqli_fetch_assoc($select_about_count_res);


 ?>



<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-8 mx-auto">
            <div class="card">
              <div class="card-header">
                <h3>Add About Details</h3>
              </div>
              <div class="card-body">
              
                <form action="edit_about_post.php" method="POST" enctype="multipart/form-data">
                  <div class="mb-3">
                   <input type="hidden" class="form-control"  name="id" value="<?=$select_about_count_assoc['id']?>">
                   <input type="text" class="form-control" placeholder="Enter Your Name" name="name" value="<?=$select_about_count_assoc['name']?>">

                  </div>

                  <div class="mb-3">
                   <input type="text" class="form-control" placeholder="Enter Your Title" name="title" value="<?=$select_about_count_assoc['title']?>"">
                  </div>

                  <div class="mb-3">
                   <textarea name="message" id="" class="form-control" cols="30" rows="5" placeholder="Please Enter Your Message"><?=$select_about_count_assoc['message']?></textarea>
                  </div>


                  <div class="mb-3">
                 
                  <input type="file" name="photo" class="form-control" onchange="document.getElementById('about').src = window.URL.createObjectURL(this.files[0])">
                      <img width="150" src="../uploads/about/<?=$select_about_count_assoc['photo']?>" id="about" alt="Please Upload a Photo">
                  </div>

                  <button type="submit" class="btn btn-primary">Update About</button>
                </form>
              </div>
            </div>
          </div>  
        </div>      
    </div>
        <!--**********************************
            Content body end
        ***********************************-->








        
        
<?php require "../dash_footer.php"; 
  unset($_SESSION['old_name']);
  unset($_SESSION['old_title']);
  unset($_SESSION['old_message']);
?>

        
<?php if(isset($_SESSION['about_update'])) {?>
<script>
  Swal.fire({
    icon: 'success',
    title: 'Success',
    text: '<?=$_SESSION['about_update']?>',
    position: 'top-end',
    showConfirmButton: false,
    timer: 1500,
    
  // footer: '<a href="">Why do I have this issue?</a>'
})
</script>
<?php } unset($_SESSION['about_update'])?>






