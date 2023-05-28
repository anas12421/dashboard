<?php
  require "db_connect.php";

  $select_footer_logo = "SELECT * FROM footer_logo";
  $footer_logo =mysqli_query($db_connect, $select_footer_logo);
  $footer_logos_assoc =mysqli_fetch_assoc($footer_logo);

?>

<!-- Footer start -->
<footer class="footer border-top-1">
	<div class="container">
		<div class="row align-items-center text-center text-lg-left">
			<div class="col-lg-2">
				<img width="150" src="/dash/uploads/logo/<?= $footer_logos_assoc["logo"]?>" alt="">
        
			</div>
			<div class="col-lg-10">
				<div class="text-right">
					<p class="lead"><span class="text-color">Dreambuzz</span> © 2019 All Right Reserved Ratsaan.</p>
					<a href="#top" class="backtop smoth-scroll"><i class="ti-angle-up"></i></a>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- Footer End -->


    <!-- 
    Essential Scripts
    =====================================-->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- Main jQuery -->
    <script src="/dash/forntend_asset/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4.3.1 -->
    <script src="/dash/forntend_asset/plugins/bootstrap/js/popper.js"></script>
    <script src="/dash/forntend_asset/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/dash/forntend_asset/plugins/nav/jquery.easing.1.3.html"></script>
    
    <!-- Slick Slider -->
    <script src="/dash/forntend_asset/plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="/dash/forntend_asset/plugins/owl/owl.carousel.min.js"></script>
  
    <!-- Skill COunt -->
    <script src="/dash/forntend_asset/plugins/counto/apear.js"></script>
    <script src="/dash/forntend_asset/plugins/counto/counTo.js"></script>
    <!-- AOS Animation -->
    <script src="/dash/forntend_asset/plugins/aos/aos.js"></script>
    
    <script src="/dash/forntend_asset/js/script.js"></script>
    <script src="/dash/forntend_asset/js/ajax-contact.html"></script>

  </body>
</html>
