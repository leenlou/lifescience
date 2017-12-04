<?php
$facilities = $pages->find('our-facilities');
if ($facilities->hasChildren()) {
?>
<div class="facilities facilities--<?php echo $modifier; ?>">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="heading facilities-heading--<?php echo $modifier; ?>"><?php echo $facilities->title()->upper(); ?></h1>
				<div class="facilities-slider" data-arrows="<?php echo $arrows; ?>">
					<?php foreach ($facilities->children()->visible() as $child) { ?>
			  		<div>
					  	<div class="facilities-slide">
						  	<a class="facility" ><img src="<?php echo $child->photo()->toFile()->url(); ?>" alt="<?php echo $child->title(); ?>"></a>
						  	<!-- href="<?php echo $child->url(); ?>" -->
						  	<p><?php echo $child->title(); ?></p>
					  	</div>
				  	</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div><!-- /.facilities -->


<?php
}
?>