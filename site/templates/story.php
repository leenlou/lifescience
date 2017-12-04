<?php snippet('header') ?>

<main class="stories">
    <div class="container">
    	<h1 class="heading stories-heading"><?php echo $page->title()->upper(); ?></h1>
    	<div class="stories-description">
    		<?php echo $page->text()->kirbytext(); ?>
    	</div>
    </div>
</main>

<?php snippet('footer') ?>