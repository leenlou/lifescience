<?php
$team = $pages->find('team');
if ($team->hasChildren()) {
?>
<div class="about-team">
	<div class="container">
		<h1 class="heading about-team-heading"><?php echo $team->subtitle()->upper(); ?></h1>
		<div class="row">
			<?php foreach ($team->children()->visible() as $child) { ?>
			<div class="col-xs-6 col-sm-4 col-md-3">
				<div class="about-team-member popup-btn" data-id="<?php echo $child->slug(); ?>">
					<img class="about-team-photo" src="<?php echo $child->photo()->toFile()->url(); ?>" alt="<?php echo $child->name(); ?>">
					<span class="about-team-inline"></span>
					<div class="about-team-name"><?php echo $child->name(); ?></div>
					<div class="about-team-position"><?php echo $child->position(); ?></div>
					<div class="popup" id="<?php echo $child->slug(); ?>">
						<div class="popup-header">
							<h2 class="heading popup-heading"><?php echo $child->name()->upper(); ?></h2>
							<div class="popup-subheading"><?php echo $child->position(); ?></div>
						</div>
						<div class="popup-content">
							<img class="popup-photo" src="<?php echo $child->photo()->toFile()->url(); ?>" alt="<?php echo $child->name(); ?>">
							<?php echo $child->text()->kirbytext(); ?>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<?php
}
?>