<?php snippet('header') ?>

<main class="programs">
	<div class="banner programs-services" style="background-image: url('<?php echo $page->banner()->toFile()->url(); ?>');">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="heading programs-services-heading"><?php echo $page->subtitle()->upper(); ?></h1>
					<div class="programs-services-description">
						<?php echo $page->text(); ?>
					</div>
				</div>
			</div>
		</div><!-- /.programs-services -->
	</div>
	<div class="move" id="signature-programs"></div>

	<div class="programs-content">
		<div class="container">
			<?php snippet('programs', ['slug' => 'signature-programs', 'color' => 'green']); ?>
			<div class="move" id="diagnostic-tests"></div>
			<hr class="programs-content-separator">

			<?php snippet('programs', ['slug' => 'diagnostic-tests', 'color' => 'blue']); ?>
			<div class="move" id="health-and-wellness-services"></div>
			<hr class="programs-content-separator">

			<?php snippet('programs', ['slug' => 'health-and-wellness-services', 'color' => 'orange']); ?>
		</div>
	</div><!-- /.programs-content -->
</main>

<?php snippet('footer') ?>