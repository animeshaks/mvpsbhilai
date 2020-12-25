
<section class="banner-area relative about-banner" id="home" style="background: url(<?php echo $base_url; ?>img/contact_us_banner.jpg);">	
	<div class="overlay overlay-bg"></div>
	<div class="container">				
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Contact Us				
				</h1>	
				<p class="text-white link-nav"><a href="<?php echo $base_url; ?>">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?php echo $base_url; ?>contact-us"> Contact Us</a></p>
			</div>	
		</div>
	</div>
</section>

<section class="contact-page-area section-gap">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.5931210368194!2d81.39980121452707!3d21.208316385901277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a2923b4c8e04bc9%3A0xa8251fbed0619e1d!2sMata%20Vaishno%20Devi%20Public%20School!5e0!3m2!1sen!2sin!4v1606581169948!5m2!1sen!2sin" frameborder="0" style="border:0;border-radius: 10px;height: 450px;width: 100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				<br><br>
			</div>
			<div class="col-lg-4 d-flex flex-column address-wrap">
				<div class="single-contact-address d-flex flex-row">
					<div class="icon">
						<span class="lnr lnr-home"></span>
					</div>
					<div class="contact-details">
						<a href="https://maps.app.goo.gl/R9SXd1qe8Lv3pkC99" target="_blank">
							<h5>New Khursipar Bhilai, Chhattishgarh</h5>
							<p>
								Near Canal Road
							</p>
						</a>	
					</div>
				</div>
				<div class="single-contact-address d-flex flex-row">
					<div class="icon">
						<span class="lnr lnr-phone-handset"></span>
					</div>
					<div class="contact-details">
						<h5>
							<a href="tel://0788-2281076">0788-2281076</a> , 
							<a href="tel://8719950646">8719950646</a>
						</h5>
						<p>Mon to Fri 9am to 6 pm</p>
					</div>
				</div>
				<div class="single-contact-address d-flex flex-row">
					<div class="icon">
						<span class="lnr lnr-envelope"></span>
					</div>
					<div class="contact-details">
						<h5>
							<a href="mailto:mvps2018@gmail.com">mvps2018@gmail.com</a>
						</h5>
						<p>Send us your query anytime!</p>
					</div>
				</div>														
			</div>
			<div class="col-lg-8">
				<form class="form-area contact-form text-right" id="myForm" action="mail.php" method="post">
					<div class="row">	
						<div class="col-lg-6 form-group">
							<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">

							<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

							<input name="subject" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="text">
						</div>
						<div class="col-lg-6 form-group">
							<textarea class="common-textarea form-control" name="message" placeholder="Enter Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'" required=""></textarea>				
						</div>
						<div class="col-lg-12">
							<div class="alert-msg" style="text-align: left;"></div>
							<button class="genric-btn primary" style="float: right;">Send Message</button>											
						</div>
					</div>
				</form>	
			</div>
		</div>
	</div>	
</section>
