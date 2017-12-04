<?php snippet('header') ?>

  <main class="home">
	<?php snippet('home-slider'); ?>

	<?php $ambassador = $pages->find('home/brand-ambassador'); ?>
	<div class="banner home-ambassador" style="background-image: url('<?php echo $ambassador->background()->toFile()->url(); ?>')">
		<div class="home-ambassador-content">
			<?php echo $ambassador->text()->kirbytext(); ?>
			<a class="btn" href="/health-test">START NOW</a>
		</div>
	</div>

	<?php // snippet('facilities', ['modifier' => 'home', 'arrows' => 'black']); ?>

	<?php // snippet('reviews'); ?>

	<!--concierge start -->
	<?php // $concierge = $pages->find('home/concierge-md'); ?>
	<!-- <div class="banner home-concierge" style="background-image: url('<?php echo $concierge->background()->toFile()->url(); ?>')">
		<div class="home-concierge-content">
			<?php // echo $concierge->text()->kirbytext(); ?>
			<a id="book-m" class="btn book-appointment" data-device="mt">BOOK AN ONLINE CONSULTATION WITH A PHYSICIAN</a>
			<a id="book-d" class="btn book-appointment" data-device="d">BOOK AN ONLINE CONSULTATION WITH A PHYSICIAN</a>
		</div>
	</div>
	-->
	<!--concierge end -->

	<?php $center = $pages->find('home/center'); ?>
	<div class="home-center">
		<div class="address-left">
		<h1 class="heading home-center-heading">LIFESCIENCE</h1>
		<h2 class="heading home-center-heading">CENTER FOR HEALTH AND WELLNESS</h2>
		<div class="home-center-address">
			<?php echo $center->address()->kirbytext(); ?>
		</div>
		<div class="home-center-btns">
			<a class="btn home-center-btn" href="tel:<?php echo $center->contact_number_1(); ?>"><i class="home-center-call"></i><?php echo $center->contact_label_1(); ?></a>
			<a class="btn home-center-btn" href="tel:<?php echo $center->contact_number_2(); ?>"><i class="home-center-call"></i><?php echo $center->contact_label_2(); ?></a>
			<a class="btn" href="<?php echo $center->directions(); ?>" target="_blank">GET DIRECTIONS</a>
		</div>
		</div>
		<div class="address-right">
		<div class="home-center-map">
			<!--<div style="background:transparent; position:absolute; z-index:1; width:100%; height:100%; cursor:pointer;" onClick="style.pointerEvents='none'"></div> -->
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1930.8968719537834!2d121.04502762057623!3d14.55378428815445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c8fa0a38aec1%3A0xdfaad697480a3d27!2sLifeScience+Center+for+Health+and+Wellness!5e0!3m2!1sen!2sph!4v1479786495850" width="100%" height="100%" frameborder="0" style="border:0"></iframe>
		</div>
		</div>
		<div class="clear"></div>
		
	</div>
</main>

<?php snippet('footer') ?>