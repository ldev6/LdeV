<?php $this->load->view('header')?>
	<!-- Content
	================================================== -->
	<section id="content" class="container">



	
	<div class="row">
		<div class="span4 offset1">
			<h3>Réseaux Sociaux</h3>
			<br />
			<p class="active lead">
				<a class="social-network twitter" href="https://twitter.com/L_de_V"  target="_blank"></a> &nbsp;
				<a class="social-network facebook" href="https://www.facebook.com/ldev6" target="_blank"></a> &nbsp;
				<a class="social-network linkedin" href="http://www.linkedin.com/pub/laurence-de-villers/29/152/a8" target="_blank"></a> &nbsp;
				<a class="social-network gplus2" href="http://google.com/+LaurencedeVillers" target="_blank"></a> &nbsp;
				<a class="social-network myspace" href="https://myspace.com/ldev666" target="_blank"></a>
			</p>
		
		</div>
		<div class="span6 pull1">

			<h3>Contact us</h3><br />
				<!-- Contact form
				================================================== -->

				<!-- form message -->
				<div id="contact-form-response" class="alert hidden"></div>

				<form id="contact-form" class="row">
					<div class="span3">
						<label>Name</label>
						<input type="text" name="name" placeholder="Your name" />
					</div>
					<div class="span3">
						<label>E-mail</label>
						<input type="email" name="email" placeholder="@" />
					</div>
					<div class="span6">
						<label>Your message</label>
						<textarea style="width:450px" name="message" rows="4" placeholder="Leave us your message"></textarea>
						<p>
							<a id="contact-form-submit" class="button yellow fr">Send &nbsp;<i class="icon-chevron-right"></i></a>
						</p>
					</div>
					<input type="hidden" name="bot" value="" />
				</form>
		</div>
	</div>
	</section>

	<!-- Footer
	================================================== --><?php $this->load->view('footer')?>