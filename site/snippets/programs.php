<?php
$category = $pages->find('programs/' . $slug);
if ($category->hasChildren()) {
?>
<div class="<?php echo $category->slug(); ?>">
	<div class="programs-heading-holder programs-heading-holder--<?php echo $color; ?>">
		<h1 class="heading programs-heading"><?php echo $category->title()->upper(); ?></h1>
		<?php echo $category->text()->kirbytext(); ?>
	</div>
	<div class="row">
		<?php foreach ($category->children() as $child) { ?>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<div class="programs-content-item">
				<img class="lazy-img programs-content-icon programs-content-icon--<?php echo $color; ?>" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA" data-src="<?php echo $child->icon()->toFile()->url(); ?>" alt="<?php echo $child->title(); ?>">
				<div class="programs-content-title"><?php echo $child->title(); ?></div>
				<div class="programs-content-description">
					<?php echo $child->description(); ?>
				</div>
				<a class="btn programs-content-btn" href="<?php echo $child->url(); ?>">LEARN MORE</a>
			</div>
		</div>
		<?php } ?>
	</div>
</div>
<?php
}
?>