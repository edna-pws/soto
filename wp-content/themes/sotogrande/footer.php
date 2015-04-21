<section class="section section-footer">
	<div class="container-fluid clearfix footer-pad-responsive">
		<div class="row">
			<div class="col-sm-12 col-md-4">
				<div class="footer-location">
					<h4 class="footer-title">SotoGrande</h4>
					<p>Dapdap, Mactan Island, Lapu-Lapu City,</p>
					<p>Cebu, Philippines</p>
				</div>
			</div>

			<div class="col-sm-12 col-md-8">
				<div class="footer-connect">
					<h3 class="title-bold text-right">Stay Connected</h3>
						<ul class="social social-responsive-lg social-responsive-medium social-responsive-s">
							<li><a href="/"><span><i class="fa fa-facebook"></i></span></a></li>
							<li><a href="/"><span><i class="fa fa-twitter"></i></span></a></li>
							<li><a href="/"><span><i class="fa fa-linkedin"></i></span></a></li>
							<li><a href="/"><span><i class="fa fa-google-plus"></i></span></a></li>
						</ul>
				</div>
			</div>
			<div class="footer-nav-desktop">
				<div class="col-md-12 p0 mt10">
					<div class="col-md-3">
						<p class="footer-phone">Phone: +63032 238 6590</p>
					</div>
					<div class="col-md-9 pr0 footer-full footer-nav-center">
						<ul class="nav navbar-nav m0">
					        <li><a href="<?php echo bloginfo('url' ); ?>/about">about</a></li>
					        <li><a href="<?php echo bloginfo('url' ); ?>/properties">properties</a></li>
					        <li><a href="#">sitemap</a></li>
					        <li><a href="#" class="subscribe">subscribe newsletter</a></li>
					        <li><a href="<?php echo bloginfo('url' ); ?>/contact">contact</a></li>
					     </ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

	<footer>
		<div class="container-fluid clearfix section-footer-bottom-responsive">
			<div class="pull-left copyright">
				<img src="<?php echo IMG; ?>/icons/logo-xs.png" alt=""> © SotoGrande <?php echo date('Y'); ?>. All rights reserved. Privacy / Contact Us
			</div>

			<div class="pull-right footer-left-responsive">
				designed and developed by: philwebservices.
			</div>
		</div>
	</footer>
	<div id="subscribe-wrapper" class="hidden">
		<div class="subscribe-box">
			<div class="subscribe-box-title">Subscribe Now <i class="fa fa-close fa-subscribe" id="form-button"></i></div>
			<div class="subscibe-box-inner">
				<p class="subs-button-par">We'd love to stay in touch. Subscribe to our newsletter for news, images and offers.</p>
				<div class="input-group subs-button">
					<input type="text" class="input-subscribe form-control subs-button-mail" placeholder="Email Address">
					<div class="input-group-btn subs-button-send-button">
						<button type="submit" class="btn btn-submit subs-button-send">Send</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php wp_footer(); ?>
</body>
</html>


