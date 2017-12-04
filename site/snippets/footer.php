			<?php // snippet('newsletter'); ?>
			<footer class="footer">
				<div class="container">
					<div class="row">
						<nav class="footer-nav">
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="footer-divider">
									<h2 class="heading footer-heading footer-toggle" data-shown="no">HOME</h2>
									<ul class="footer-menu">
										<li class="footer-menu__item">
											<a class="footer-menu__link" href="<?php echo page('home')->url(); ?>/health-test">Quick Health Test</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-2 col-md-half-offset">
								<div class="footer-divider">
									<h2 class="heading footer-heading footer-toggle" data-shown="no">ABOUT</h2>
									<ul class="footer-menu">
										<li class="footer-menu__item">
											<a class="footer-menu__link" href="<?php echo page('about')->url(); ?>#approach">Our Approach</a>
										</li>
										<li class="footer-menu__item">
											<a class="footer-menu__link" href="<?php echo page('about')->url(); ?>#practitioners">Our Medical Team</a>
										</li>
										<li class="footer-menu__item">
											<a class="footer-menu__link" href="<?php echo page('about')->url(); ?>#facilities">Our Facilities</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-2 col-md-half-offset">
								<div class="footer-divider">
									<h2 class="heading footer-heading footer-toggle" data-shown="no">PROGRAMS</h2>
									<ul class="footer-menu">
										<li class="footer-menu__item">
											<a class="footer-menu__link" href="<?php echo page('programs')->url(); ?>#signature-programs">Our Signature Programs</a>
										</li>
										<li class="footer-menu__item">
											<a class="footer-menu__link" href="<?php echo page('programs')->url(); ?>#health-and-wellness-services">Our Signature Services</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-2 col-md-half-offset">
								<div class="footer-divider">
									<h2 class="heading footer-heading"><a class="footer-link" href="<?php echo page('press')->url(); ?>">PRESS</a></h2>
								</div>
								<div class="footer-divider">
									<h2 class="heading footer-heading"><a class="footer-link" href="http://regenmedinc.managemyspa.com/WebStore/signin.aspx?WebstoreType=0">MY ACCOUNT</a></h2>
								</div>
								<div class="footer-divider">
									<h2 class="heading footer-heading"><a class="footer-link" href="<?php echo page('careers')->url(); ?>">CAREERS</a></h2>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-2 col-md-half-offset">
								<div class="footer-divider">
									<h2 class="heading footer-heading footer-toggle" data-shown="no">FOLLOW US</h2>
									<ul class="footer-menu">
										<li class="footer-menu__item">
											<ul class="footer-menu footer-menu--social">
												<li class="footer-menu__item">
													<a class="footer-menu__link" href="<?php echo $site->facebook(); ?>" target="_blank"><i class="social-icon social-icon--facebook"></i></a>
												</li>
												<li class="footer-menu__item">
													<a class="footer-menu__link" href="<?php echo $site->twitter(); ?>" target="_blank"><i class="social-icon social-icon--twitter"></i></a>
												</li>
												<li class="footer-menu__item">
													<a class="footer-menu__link" href="<?php echo $site->youtube(); ?>" target="_blank"><i class="social-icon social-icon--youtube"></i></a>
												</li>
												<li class="footer-menu__item">
													<a class="footer-menu__link" href="<?php echo $site->instagram(); ?>" target="_blank"><i class="social-icon social-icon--instagram"></i></a>
												</li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</nav>
					</div>
				</div>
				<hr class="footer-line hidden-xs hidden-sm">
				<div class="container">
					<div class="footer-office">
						<?php echo $site->office()->kirbytext(); ?>
					</div>
					<div class="footer-copyright">
						<?php echo $site->copyright()->kirbytext(); ?>
					</div>
				</div>
			</footer>
		</div>

		<!-- Scripts -->
		<script>var BASE_URL = '<?php echo url(); ?>';</script>
		<?php echo js('assets/js/jquery-2.2.2.min.js'); ?>
		<?php echo js('assets/js/jquery.unveil.js'); ?>
		<?php echo js('assets/js/bootstrap-datepicker.min.js'); ?>
		<?php echo js('assets/js/slick.min.js'); ?>
		<?php echo js('assets/js/lazyYT.js'); ?>
		<?php echo js('assets/js/app.js'); ?>
	</body>
</html>