<?php snippet('header') ?>

<main class="careers">
	<div class="container">
		<?php if ($page->hasChildren()) { ?>
		<div class="careers-content">
			<div class="row">
				<div class="col-md-12">
					<h1 class="heading careers-heading"><?php echo $page->title()->upper(); ?></h1>
					<div class="accordion">
						<?php foreach ($page->children()->visible() as $child) { ?>
						<div class="accordion-panel">
							<div class="accordion-panel-link">
								<span class="careers-job-title"><?php echo $child->title(); ?></span>
								<span class="careers-job-experience"><?php echo $child->experience(); ?></span>
							</div>
							<div class="accordion-panel-content">
								<?php echo $child->description()->kirbytext(); ?>
								<a class="btn apply-now" href="javascript:void(0);" data-title="<?php echo $child->title(); ?>">APPLY NOW</a>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div><!-- /.careers-content -->
		<?php } ?>
		<div class="careers-resumes" id="upload-resume">
			<div class="row">
				<div class="col-md-4">
					<h1 class="heading careers-heading">UPLOAD YOUR RESUME</h1>
					<p><?php echo $page->text()->kirbytext(); ?></p>
				</div>
				<div class="col-md-8">
					<form class="form form" id="form-careers" action="">
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
							<div class="col-md-6 form-group">
								<label class="form-label" for="email">E-mail</label>
								<input type="text" class="form-control" id="email" name="email">
							</div>
							<div class="col-md-6 form-group">
								<label class="form-label" for="position">Job Position</label>
								<select class="form-control" id="position" name="position">
								<option value="">Choose...</option>
								<?php
								if ($page->hasChildren()) {
									foreach ($page->children()->visible() as $child) {
								?>
								<option><?php echo $child->title(); ?></option>
								<?php
									}
								}
								?>
								</select>
							</div>
							<div class="col-md-12 form-group">
								<label class="form-label" for="message">Message</label>
								<textarea class="form-control" name="message" id="message" cols="30" rows="6"></textarea>
							</div>
							<div class="col-md-12 form-group">
								<label class="form-label" for="resume">Upload Your Resume (.doc, .docx or .pdf only | 5mb)</label>
								<input type="file" class="form-control" name="resume" id="resume">
							</div>
							<div class="col-md-12 form-group">
								<button class="btn" id="submit-resume">SUBMIT</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div><!-- /.careers-inquiries -->
	</div>
</main>

<?php snippet('footer') ?>