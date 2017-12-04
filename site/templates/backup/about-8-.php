<?php snippet('header') ?>
<span id="approach"></span>
<main class="about">
	<div class="about-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="heading">PROFILE PROBE, PROGRAM</h1>
					<?php if ($video_info = $page->video_url()->youtube_info()) { ?>
					<div class="about-content-video">
						<div class="lazyYT" data-youtube-id="<?php echo $video_info['id']; ?>" data-youtube-title="<?php echo $video_info['title']; ?>"></div>
					</div>
					<?php } ?>
					<div class="about-content-description">
						<?php echo $page->text()->kirbytext(); ?>
					</div>
				</div>
			</div>
		</div>
	</div><!-- /.about-content -->

	<?php snippet('facilities', ['modifier' => 'about', 'arrows' => 'white']); ?>
	<span id="practitioners"></span>
	<?php snippet('team'); ?>
</main>

<?php snippet('footer') ?>