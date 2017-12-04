<?php snippet('header') ?>

<main class="campaign">
	<div class="banner" style="background-image: url('<?php echo $page->photo()->toFile()->url(); ?>')">
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h1 class="heading campaign-heading"><?php echo $page->title()->upper(); ?></h1>
				<div class="campaign-description">
					<?php echo $page->text()->kirbytext(); ?>
				</div>
			</div>
			<div class="col-md-4">
				<form class="form form--campaign" action="#">
					<h1 class="heading campaign-heading">INQUIRY FORM</h1>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 form-group">
							<input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 form-group">
							<input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 form-group">
							<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 form-group">
						<textarea class="form-control" name="message" id="message" cols="30" rows="6" placeholder="Message"></textarea>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 form-group">
							<button class="btn btn--campaign" id="send">SEND</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</main>

<?php snippet('footer') ?>