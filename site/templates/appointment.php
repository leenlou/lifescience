<?php snippet('header') ?>

<main class="about">
	<div class="home-appointment">
		<div class="container">
			<h1 class="heading home-appointment-heading"><?php echo strtoupper($page->title()->html()); ?></h1>
			<div class="row">
				<form class="form form--appointment" id="form-appointment" action="#">
					<div class="notif"></div>
					<div class="col-xs-12 col-sm-12 col-md-12 form-group">
						<label class="form-label" for="title">Title</label>
						<select class="form-control form-control--xs" name="title" id="title">
							<option value="">Choose...</option>
							<option value="mr">Mr.</option>
							<option value="ms">Ms.</option>
						</select>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 form-group">
						<label class="form-label" for="first_name">First Name</label>
						<input type="text" class="form-control" name="first_name" id="first_name">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 form-group">
						<label class="form-label" for="last_name">Last Name</label>
						<input type="text" class="form-control" name="last_name" id="last_name">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 form-group">
						<label class="form-label" for="contact_number">Contact Number</label>
						<input type="text" class="form-control" name="contact_number" id="contact_number">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 form-group">
						<label class="form-label" for="email">E-mail</label>
						<input type="text" class="form-control" name="email" id="email">
					</div>
					<?php if ($page->slug() == 'new-patient-appointment') { ?>
					<div class="col-xs-12 col-sm-12 col-md-12 form-group">
						<label class="form-label" for="birth_date">Date of Birth</label>
						<input type="text" class="form-control datepicker" name="birth_date" id="birth_date">
						<span class="form-control-calendar"></span>
					</div>
					<?php } ?>
					<div class="col-xs-12 col-sm-12 col-md-6 form-group">
						<label class="form-label" for="preferred_date">Preferred Date</label>
						<input type="text" class="form-control datepicker" name="preferred_date" id="preferred_date">
						<span class="form-control-calendar"></span>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 form-group">
						<label class="form-label" for="preferred_time">Preferred Time</label>
						<select class="form-control" name="preferred_time" id="preferred_time">
							<option value="">Choose...</option>
							<option value="07:00 - 08:00 am">07:00 - 08:00 am</option>
							<option value="08:00 - 09:00 am">08:00 - 09:00 am</option>
							<option value="09:00 - 10:00 am">09:00 - 10:00 am</option>
							<option value="10:00 - 11:00 am">10:00 - 11:00 am</option>
							<option value="11:00 - 12:00 am">11:00 - 12:00 am</option>
							<option value="01:00 - 02:00 pm">01:00 - 02:00 pm</option>
							<option value="02:00 - 03:00 pm">02:00 - 03:00 pm</option>
							<option value="03:00 - 04:00 pm">03:00 - 04:00 pm</option>
							<option value="04:00 - 05:00 pm">04:00 - 05:00 pm</option>
							<option value="05:00 - 06:00 pm">05:00 - 06:00 pm</option>
							<option value="06:00 - 07:00 pm">06:00 - 07:00 pm</option>
						</select>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 form-group">
						<label class="form-label" for="service">Service</label>
						<select class="form-control" name="service" id="service">
							<option value="">Choose...</option>
							<option value="Environmental Tests">Environmental Tests</option>
							<option value="Gene Tests">Gene Tests</option>
							<option value="GI Immunology Tests">GI Immunology Tests</option>
							<option value="Metabolic Tests">Metabolic Tests</option>
							<option value="Nutritional Tests">Nutritional Tests</option>
							<option value="Core Nutrition Program">Core Nutrition Program</option>
							<option value="Inherited Disease Screening &amp; Intervention">Inherited Disease Screening &amp; Intervention</option>
							<option value="Reverse Chronic Disease">Reverse Chronic Disease</option>
							<option value="Weight and Metabolic Management">Weight and Metabolic Management</option>
							<option value="Functional Medicine Consultation">Functional Medicine Consultation</option>
							<option value="Hyperbaric Oxygen Treatment (HBOT)">Hyperbaric Oxygen Treatment (HBOT)</option>
							<option value="Kinesis and Muscoskeletal Rehab">Kinesis and Muscoskeletal Rehab</option>
							<option value="Nutrition Coaching">Nutrition Coaching</option>
						</select>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 form-group">
						<label class="form-label" for="message">Message</label>
						<textarea class="form-control" name="message" id="message" cols="30" rows="8"></textarea>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 form-group">
						<input type="hidden" name="slug" value="<?php echo $page->slug(); ?>">
						<button class="btn btn--send" id="book-appointment">SEND</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</main>

<?php snippet('footer') ?>