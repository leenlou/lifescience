<?php
$reviews = $pages->find('reviews');
if ($reviews->hasChildren()) {
?>
<div class="home-reviews">
	<div class="container">
		<div class="row">
			<?php foreach ($reviews->children() as $child) { ?>
			<div class="col-xs-12 col-sm-12 col-md-4">
				<div class="home-reviews-person">
					<div class="row">
						<div class="col-xs-4 col-sm-2 col-md-12">
							<img class="home-reviews-thumbnail" src="<?php echo $child->photo()->toFile()->url(); ?>" alt="<?php echo $child->name(); ?>">
						</div>
						<div class="col-xs-8 col-sm-10 col-md-12">
							<div class="home-reviews-name"><?php echo $child->name(); ?></div>
							<div class="home-reviews-description">
								<q><?php echo $child->text(); ?></q>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div><!-- /.home-reviews -->
<?php
}
?>