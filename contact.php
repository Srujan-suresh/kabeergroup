<?php $head_title="Contact Us - Corporate & Financial Business PHP Template"?>
<?php require_once('template-parts/layout/top-layout.php'); ?>
<?php require_once('template-parts/header/header.php'); ?>
<?php
$page_title = "Contact Us";
require_once('template-parts/page-title.php');
?>
	<!-- Contact Page Start -->		
	<div class="contact-page-sec pt-100 pb-80">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
                    <div id="gmap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.2080303927046!2d77.49429921049989!3d13.08599828718675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae231265b3b157%3A0xd46e12b46979643e!2sC.E.S%20public%20school!5e0!3m2!1sen!2sin!4v1770290441653!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							
                    </div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6 d-lg-flex d-md-flex">
					<div class="contact-info-inner">
						<div class="contact-info-icon">
							<i class="icofont-google-map"></i>
						</div>
						<div class="contact-info-text">
							<h2>office address</h2>
							<span>No. 100/1, Hesaraghatta
Main Road, Chikkabanavara
Bangalore – 560090 </span>
						</div>
					</div>
				</div>				
				<div class="col-lg-3 col-md-6 d-lg-flex d-md-flex">
					<div class="contact-info-inner">
						<div class="contact-info-icon">
							<i class="icofont-telephone"></i>
						</div>
						<div class="contact-info-text">
							<h2>phone number</h2>
							<span>080-26563333,</span>
							<span>+91 9480102030</span>
						</div>
					</div>
				</div>				
				<div class="col-lg-3 col-md-6 d-lg-flex d-md-flex">
					<div class="contact-info-inner">
						<div class="contact-info-icon">
							<i class="icofont-envelope-open"></i>
						</div>
						<div class="contact-info-text">
							<h2>email address</h2>
							<span>   md@kabeergroup.com </span>
						</div>
					</div>
				</div>			
				<div class="col-lg-3 col-md-6 d-lg-flex d-md-flex">
					<div class="contact-info-inner">
						<div class="contact-info-icon">
							<i class="icofont-paper-plane"></i>
						</div>
						<div class="contact-info-text">
							<h2>subscribe</h2>
							<form action="#" method="post">
								<input type="email" placeholder="Email"/>
							</form>
						</div>
					</div>
				</div>
			</div>			
			<div class="row">	
				<div class="col-lg-8">
					<!-- Contact Form Section Start-->
					<div class="comment-field">
						<h2 class="comment-form-title">get in touch</h2>
						<form action="mail.php" method="post" id="commentform">
						   <div class="row form-fields">
							  <p class="comment-author col-md-4"><input placeholder="Name" id="author" name="name"  size="30" type="text"></p>
							  <p class="author-email col-md-4"><input placeholder="Email" id="email" name="email" size="30" type="text"></p>
							  <p class="author-website col-md-4"><input placeholder="Phone" id="phone" name="phone" size="30" type="text"></p>
						   </div>						
						   <p class="comment-form">
							<textarea placeholder="Write Your Message" id="comment" name="message" cols="20" rows="5" aria-required="true"></textarea>
						   </p>
						   <p class="form-submit"><input name="submit" id="submit" class="submit" value="Submit Now" type="submit"> 
						   </p>
						</form>					
					</div>
					<!-- Contact Form Section End-->
				</div>
			</div>
		</div>
	</div>
	<!-- Contact Page End -->
<?php require_once('template-parts/footer/footer.php'); ?>
<?php require_once('template-parts/layout/bottom-layout.php'); ?>