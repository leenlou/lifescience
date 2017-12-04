<?php snippet('header') ?>

<main class="faqs">
	<div class="container">
		<?php if ($page->hasChildren()) { ?>
		<div class="faqs-content">
			<div class="row">
				<div class="col-md-12">
					<h1 class="heading faqs-heading"><?php echo $page->title()->upper(); ?></h1>
					<div class="accordion">
						<?php foreach ($page->children()->visible() as $child) { ?>
						<div class="accordion-panel">
							<div class="accordion-panel-link"><?php echo $child->question(); ?></div>
							<div class="accordion-panel-content">
								<?php echo $child->answer()->kirbytext(); ?>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div><!-- /.faqs-content -->
		<?php } ?>
		<div class="faqs-inquiries">
			<div class="row">
				<div class="col-md-4">
					<h1 class="heading faqs-heading">FOR INQUIRIES</h1>
					<p><?php echo $page->text()->html(); ?></p>
				</div>
				<div class="col-md-8">
					<form class="form form--inquiries" id="form-inquiry" action="">
						<div class="notif"></div>
						<div class="row">
							<div class="col-sm-6 col-md-6 form-group">
								<label class="form-label" for="first_name">First Name</label>
								<input type="text" class="form-control" id="first_name" name="first_name">
							</div>
							<div class="col-sm-6 col-md-6 form-group">
								<label class="form-label" for="last_name">Last Name</label>
								<input type="text" class="form-control" id="last_name" name="last_name">
							</div>
							<div class="col-md-12 form-group">
								<label class="form-label" for="email">E-mail</label>
								<input type="text" class="form-control" id="email" name="email">
							</div>
							<div class="col-md-12 form-group">
								<label class="form-label" for="message">Message</label>
								<textarea class="form-control" name="message" id="message" cols="30" rows="6"></textarea>
							</div>
							<div class="col-md-12 form-group">
								<button class="btn btn--inquire" id="inquire">SEND</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div><!-- /.faqs-inquiries -->
	</div>
</main>

<?php snippet('footer') ?>