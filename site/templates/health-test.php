<?php snippet('header') ?>

<main class="test">
    <div class="banner test-banner" style="background-image: url('<?php echo $page->banner()->toFile()->url(); ?>'); background-size: cover; margin: 0; padding: 50px 0 200px 0;">
        <?php echo $page->text()->kirbytext(); ?>
    </div>
    <div class="container">
		<form class="form" id="form-test" action="#">
			<div class="test-questionnaire">
				<?php snippet('questions/question'); ?>
			</div>
		</form>
	</div>
</main>

<?php snippet('footer') ?>