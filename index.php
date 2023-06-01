<?php
session_start();
 require "project_header.php";
 require "db_connect.php";


//  banner
 $banner_select = "SELECT * FROM banner";
 $banner_select_result = mysqli_query($db_connect,$banner_select);
 $banner_assoc = mysqli_fetch_assoc($banner_select_result);

//  expertise

$select ="SELECT * FROM expertise WHERE status=1";
 $select_res = mysqli_query($db_connect,$select);

 $select_count = "SELECT COUNT(*) as mot FROM expertise WHERE status =1";
 $select_count_res = mysqli_query($db_connect,$select_count);
 $select_count_assoc=mysqli_fetch_assoc($select_count_res);


//  service

$select_service_status = "SELECT * FROM services WHERE status=1";
$select_service_status_res = mysqli_query($db_connect,$select_service_status);

  $select_service_count = "SELECT COUNT(*) as mot FROM services WHERE status =1";
  $select_service_count_res = mysqli_query($db_connect,$select_service_count);
  $select_service_count_assoc=mysqli_fetch_assoc($select_service_count_res);
?>



<!-- Banner start -->

<!-- Slider Start -->
<section id="banner" class="slider py-7 ">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-5 col-sm-12 col-12 col-md-5">
				<div class="slider-img position-relative">
					<img src="/dash/uploads/banner/<?=$banner_assoc["photo"]?>" alt="" class="img-fluid w-100">
				</div>
			</div>

			<div class="col-lg-6 col-12 col-md-7">
				<div class="ml-5 position-relative mt-5 mt-lg-0">
					<span class="head-trans">Stephen</span>
					<h1 class="font-weight-normal text-color text-md"><i class="ti-minus mr-2"></i><?=$banner_assoc["sub_title"]?></h1>
					<h2 class="mt-3 text-lg mb-3 text-capitalize"><?=$banner_assoc["title"]?></h2>
					<p class="animated fadeInUp lead mt-4 mb-5 text-white-50 lh-35"><?=$banner_assoc["description"]?></p>
					<a href="<?=$banner_assoc["action_link"]?>" class="btn btn-solid-border"><?=$banner_assoc["action_btn"]?></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Banner End -->

<!-- Skills start -->
<section class="section bg-gray" id="skillbar" data-aos="fade-up">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="section-title text-center">
					<span class="text-color mb-0 text-uppercase letter-spacing text-sm"><i class="ti-minus mr-2"></i>Skills Set</span>
					<h2 class="title">Expertise</h2>
				</div>
			</div>
		</div>

		<div class="row justify-content-center">
			<?php foreach($select_res as $expertise_details) {?>
			<div class="col-lg-<?=($select_count_assoc["mot"]==5)?'4':'6'?>">
				<div class="skill-bar mb-4 mb-lg-0">
					<div class="mb-4 text-right"><h4 class="font-weight-normal"><?=$expertise_details['topic']?></h4></div>
					<div class="progress">
						<div class="progress-bar" data-percent="<?=$expertise_details['percentage']?>">
							<span class="percent-text"><span class="count"><?=$expertise_details['percentage']?></span>%</span>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
			<!-- <div class="col-lg-6 col-md-6">
				<div class="skill-bar mb-4 mb-lg-0">
					<div class="mb-4 text-right"><h4 class="font-weight-normal">CSS</h4></div>
					<div class="progress">
						<div class="progress-bar" data-percent="85">
							<span class="percent-text"><span class="count">85</span>%</span>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-6">
				<div class="skill-bar mb-4 mb-lg-0">
					<div class="mb-4 text-right"><h4 class="font-weight-normal">Javascript</h4></div>
					<div class="progress">
						<div class="progress-bar" data-percent="70">
							<span class="percent-text"><span class="count">70</span>%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="skill-bar mb-4 mb-lg-0">
					<div class="mb-4 text-right"><h4 class="font-weight-normal">Bootstrap</h4></div>
					<div class="progress">
						<div class="progress-bar" data-percent="85">
							<span class="percent-text"><span class="count">85</span>%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="skill-bar mb-4 mb-lg-0">
					<div class=" mb-4 text-right"><h4 class="font-weight-normal">Tailwind CSS</h4></div>
					<div class="progress">
						<div class="progress-bar" data-percent="75">
							<span class="percent-text"><span class="count">75</span>%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="skill-bar mb-4 mb-lg-0">
					<div class=" mb-4 text-right"><h4 class="font-weight-normal">React JS</h4></div>
					<div class="progress">
						<div class="progress-bar" data-percent="65">
							<span class="percent-text"><span class="count">65</span>%</span>
						</div>
					</div>
				</div>
			</div> -->
		</div>
	</div>
</section>	

<!-- Skills End -->

<!-- Service start -->
<section class="section bg-gray" id="service" data-aos="fade-up">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="section-title text-center">
					<span class="text-color mb-0 text-uppercase letter-spacing text-sm"><i class="ti-minus mr-2"></i>What i do</span>
					<h2 class="title">Services</h2>
				</div>
			</div>
		</div>

		<div class="row no-gutters justify-content-center">
			<?php foreach($select_service_status_res as $service_item){ ?>
			<div class="col-lg-<?=$select_service_count_assoc["mot"]==4?'6':'4'?> col-md-6">
				<div class="card p-5 rounded-0">
					<h3 class="my-4 text-capitalize"><?=$service_item["title"]?></h3>
					<p><?=$service_item["description"]?></p>
				</div>
			</div>
			<?php }?>

		</div>

		<div class="row align-items-center mt-5" data-aos="fade-up">
			<div class="col-lg-6 mt-5">
				<h2 class="mb-5 text-lg-2 text-white-50">Let's <span class="text-white">work together</span> on your next project </h2>
			</div>
			<div class="col-lg-4 ml-auto text-right">
				<a href="#contact" class="btn btn-main text-white smoth-scroll">Hire Me</a>
			</div>
		</div>
	</div>
</section>
<!-- Service End -->

<!-- Portfolio start -->
<section class="section" id="portfolio" data-aos="fade-up">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="section-title text-center">
					<span class="text-color mb-0 text-uppercase letter-spacing text-sm"><i class="ti-minus"></i>works</span>
					<h2 class="title">Portfolio</h2>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="post_gallery owl-carousel owl-theme">
				<div class="item">
					<div class="portfolio-item position-relative">
						<img src="/dash/forntend_asset/images/portfolio/3.jpg" alt="" class="img-fluid">

						<div class="portoflio-item-overlay">
							<a href="portfolio-single.html"><i class="ti-plus"></i></a>
						</div>
					</div>
					<div class="text mt-3">
						<h4 class="mb-1 text-capitalize">Web development</h4>
						<p class="text-uppercase letter-spacing text-sm">wordpress</p>
					</div>
				</div>
				<div class="item">
					<div class="portfolio-item position-relative">
						<img src="/dash/forntend_asset/images/portfolio/4.jpg" alt="" class="img-fluid">

						<div class="portoflio-item-overlay">
							<a href="portfolio-single.html"><i class="ti-plus"></i></a>
						</div>
					</div>
					<div class="text mt-3">
						<h4 class="mb-1 text-capitalize">Web development</h4>
						<p class="text-uppercase letter-spacing text-sm">wordpress</p>
					</div>
				</div>
				<div class="item">
					<div class="portfolio-item position-relative">
						<img src="/dash/forntend_asset/images/portfolio/5.jpg" alt="" class="img-fluid">

						<div class="portoflio-item-overlay">
							<a href="portfolio-single.html"><i class="ti-plus"></i></a>
						</div>
					</div>
					<div class="text mt-3">
						<h4 class="mb-1 text-capitalize">Web development</h4>
						<p class="text-uppercase letter-spacing text-sm">wordpress</p>
					</div>
				</div>
				<div class="item">
					<div class="portfolio-item position-relative">
						<img src="/dash/forntend_asset/images/portfolio/6.jpg" alt="" class="img-fluid">

						<div class="portoflio-item-overlay">
							<a href="portfolio-single.html"><i class="ti-plus"></i></a>
						</div>
					</div>
					<div class="text mt-3">
						<h4 class="mb-1 text-capitalize">Web development</h4>
						<p class="text-uppercase letter-spacing text-sm">wordpress</p>
					</div>
				</div>
				<div class="item">
					<div class="portfolio-item position-relative">
						<img src="/dash/forntend_asset/images/portfolio/1.jpg" alt="" class="img-fluid">

						<div class="portoflio-item-overlay">
							<a href="portfolio-single.html"><i class="ti-plus"></i></a>
						</div>
					</div>
					<div class="text mt-3">
						<h4 class="mb-1 text-capitalize">Web development</h4>
						<p class="text-uppercase letter-spacing text-sm">wordpress</p>
					</div>
				</div>
				<div class="item">
					<div class="portfolio-item position-relative">
						<img src="/dash/forntend_asset/images/portfolio/2.jpg" alt="" class="img-fluid">

						<div class="portoflio-item-overlay">
							<a href="portfolio-single.html"><i class="ti-plus"></i></a>
						</div>
					</div>
					<div class="text mt-3">
						<h4 class="mb-1 text-capitalize">Web development</h4>
						<p class="text-uppercase letter-spacing text-sm">wordpress</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Portfolio End -->

<!-- Tetsimonial start -->
<section id="testimonial" class="section testomionial" data-aos="fade-up">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="section-title">
					<span class="text-color mb-0 text-uppercase letter-spacing text-sm"> <i class="ti-minus mr-2"></i>testimonial</span>
					<h1 class="title">What People Say About me</h1>
				</div>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-lg-10">
				<div class="testimonial-slider">
					<div class="testimonial-item position-relative">
						<i class="ti-quote-left text-white-50"></i>
						<div class="testimonial-content">
							<p class="text-md mt-3">They do this through collaboration between our strategists, designers and technologists.They craft beautiful and unique digital experiences.Unlimited power and customization possibilities.Pixel perfect design & clear code delivered to you.</p>

							<div class="media mt-5 align-items-center">
								<img src="/dash/forntend_asset/images/about/2.jpg" alt="" class="img-fluid  rounded-circle align-self-center mr-4">
								<div class="media-body">
									<h3 class="mb-0">John Smith</h3>
									<span class="text-muted">Creative Designer</span>
								</div>
							</div>
						</div>
					</div>
					<div class="testimonial-item position-relative">
						<i class="ti-quote-left text-white-50"></i>
						<div class="testimonial-content">
							<p class="text-md mt-3">They do this through collaboration between our strategists, designers and technologists.They craft beautiful and unique digital experiences.Unlimited power and customization possibilities.Pixel perfect design & clear code delivered to you.</p>

							<div class="media mt-5 align-items-center">
								<img src="/dash/forntend_asset/images/about/3.jpg" alt="" class="img-fluid  rounded-circle align-self-center mr-4">
								<div class="media-body">
									<h3 class="mb-0">Smith Austin</h3>
									<span class="text-muted">Developer</span>
								</div>
							</div>
						</div>
					</div>
					<div class="testimonial-item position-relative">
						<i class="ti-quote-left text-white-50"></i>
						<div class="testimonial-content">
							<p class="text-md mt-3">They do this through collaboration between our strategists, designers and technologists.They craft beautiful and unique digital experiences.Unlimited power and customization possibilities.Pixel perfect design & clear code delivered to you.</p>

							<div class="media mt-5 align-items-center">
								<img src="/dash/forntend_asset/images/about/3.jpg" alt="" class="img-fluid  rounded-circle align-self-center mr-4">
								<div class="media-body">
									<h3 class="mb-0">Mike jack</h3>
									<span class="text-muted">Marketer</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
</section>
<!-- Tetsimonial End -->

<!-- Contact start -->
<section class="section" id="contact" data-aos="fade-up">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="section-title text-center">
					<span class="text-color mb-0 text-uppercase letter-spacing text-sm"> <i class="ti-minus mr-2"></i>Contact</span>
					<h1 class="title">Get in Touch</h1>
				</div>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-lg-8">
							<?php if(isset( $_SESSION["info_send"])) { ?>
										<div class="alert alert-success mt-2"><?= $_SESSION["info_send"]?></div>
							<?php } unset( $_SESSION["info_send"])?>
					<form class="contact__form form-row contact-form" method="POST" action="/dash/contact/contact_post.php" id="contactForm">
					<div class="form-group col-lg-6 mb-5">
						<input type="text" id="name" name="name" class="form-control bg-transparent" placeholder="Your Name" value="<?=(isset($_SESSION["old_name"])?$_SESSION["old_name"]:'')?>">
							<?php if(isset( $_SESSION["name_err"])) { ?>
										<div class="alert alert-warning mt-2"><?= $_SESSION["name_err"]?></div>
							<?php } unset( $_SESSION["name_err"])?>
					</div>
					<div class="form-group col-lg-6 mb-5">
						<input type="text" name="email" id="email" class="form-control bg-transparent" placeholder="Your Email" value="<?=(isset($_SESSION["old_email"])?$_SESSION["old_email"]:'');unset($_SESSION["old_email"]);?>">
						<?php if(isset( $_SESSION["email_error_message"])) { ?>
										<div class="alert alert-warning mt-2"><?= $_SESSION["email_error_message"]?></div>
							<?php } unset( $_SESSION["email_error_message"])?>
					</div>
					<div class="form-group col-lg-12 mb-5">
						<input type="text" name="subject" id="subject" class="form-control bg-transparent" placeholder="Your Subject" value="<?=(isset($_SESSION["old_subject"])?$_SESSION["old_subject"]:'');unset($_SESSION["old_subject"]);?>">
					</div>
					
					<div class="form-group col-lg-12 mb-5">
						<textarea id="message" name="message" cols="30" rows="6" class="form-control bg-transparent" placeholder="Your Message"></textarea>
						
						<div class="text-center">
							 <!-- <input class="btn btn-main text-white mt-5" id="submit" name="submit" type="submit" class="btn btn-hero" value="Send Message"> -->
							 <button class="btn btn-main text-white mt-5" id="submit" name="submit" type="submit" class="btn btn-hero">Send Message</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- Contact End -->

<?php
require "project_footer.php";
?>
   