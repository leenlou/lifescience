<?php snippet('header') ?>

<main class="feedback">
	<div class="container">
		<h1 class="heading feedback-heading"><?php echo $page->title(); ?></h1>
		<?php echo $page->text()->kirbytext(); ?>
		<form class="form form--feedback" id="form-feedback" action="">
			<hr class="feedback-separator">

			<div class="notif"></div>
			<div class="row feedback-group">
				<div class="col-md-12 form-group">
					<label class="form-label" for="first_name">First Name</label>
					<input type="text" class="form-control feedback-input" id="first_name" name="first_name">
				</div>
				<div class="col-md-12 form-group">
					<label class="form-label" for="last_name">Last Name</label>
					<input type="text" class="form-control feedback-input" id="last_name" name="last_name">
				</div>
				<div class="col-md-12 form-group">
					<label class="form-label" for="email">E-mail</label>
					<input type="text" class="form-control feedback-input" id="email" name="email">
				</div>
				<div class="col-md-12 form-group">
					<label class="form-label" for="address">Address</label>
					<textarea class="form-control feedback-input" name="address" id="address" cols="30" rows="4"></textarea>
				</div>
				<div class="col-md-12 form-group">
					<label class="form-label" for="regular_client">Client</label>
					<div class="feedback-checkbox">
						<input type="checkbox" class="form-checkbox single-select" id="regular_client" name="client" value="regular">
						<label class="feedback-checkbox-label" for="regular_client">Regular Client</label>
					</div>
					<div class="feedback-checkbox">
						<input type="checkbox" class="form-checkbox single-select" id="firsttime_client" name="client" value="first time">
						<label class="feedback-checkbox-label" for="firsttime_client">First Time Client</label>
					</div>
				</div>
			</div>

			<hr class="feedback-separator">

			<div class="row feedback-group">
				<div class="col-md-12 form-group">
					<label class="form-label" for="last_visit">When did you last visit our clinic?</label>
					<textarea class="form-control feedback-input" name="last_visit" id="last_visit" cols="30" rows="4"></textarea>
				</div>
				<div class="col-md-12 form-group">
					<label class="form-label" for="experience">How has your experience been so far across all your visits?</label>
					<textarea class="form-control feedback-input" name="experience" id="experience" cols="30" rows="4"></textarea>
				</div>
				<div class="col-md-12 form-group">
					<label class="form-label" for="improve">In what ways can we improve your experience with us?</label>
					<textarea class="form-control feedback-input" name="improve" id="improve" cols="30" rows="4"></textarea>
				</div>
				<div class="col-md-12 form-group">
					<label class="form-label" for="message">Please share with us the name of the doctor/staff that you would like to commend and a message you would like to give them.</label>
					<textarea class="form-control feedback-input" name="message" id="message" cols="30" rows="4"></textarea>
				</div>
			</div>

			<hr class="feedback-separator">

			<div class="row feedback-group feedback-question hidden-xs hidden-sm">
				<div class="col-md-5"></div>
				<div class="col-md-2">Strongly Agree</div>
				<div class="col-md-1">Agree</div>
				<div class="col-md-1">Neutral</div>
				<div class="col-md-1">Disagree</div>
				<div class="col-md-2">Strongly Disagree</div>
			</div>

			<div class="row feedback-group feedback-question">
				<div class="col-md-5"><label for="question1">You are treated with care throughout your stay</label></div>
				<div class="col-md-2">
					<input type="radio" class="form-radio" name="question1" id="question1_sa" value="Strongly Agree">
					<label class="hidden-md hidden-lg" for="question1_sa">Strongly Agree</label>
				</div>
				<div class="col-md-1">
					<input type="radio" class="form-radio" name="question1" id="question1_a" value="Agree">
					<label class="hidden-md hidden-lg" for="question1_a">Agree</label>
				</div>
				<div class="col-md-1">
					<input type="radio" class="form-radio" name="question1" id="question1_n" value="Neutral">
					<label class="hidden-md hidden-lg" for="question1_n">Neutral</label>
				</div>
				<div class="col-md-1">
					<input type="radio" class="form-radio" name="question1" id="question1_d" value="Disagree">
					<label class="hidden-md hidden-lg" for="question1_d">Disagree</label>
				</div>
				<div class="col-md-2">
					<input type="radio" class="form-radio" name="question1" id="question1_sd" value="Disagree">
					<label class="hidden-md hidden-lg" for="question1_sd">Strongly Disagree</label>
				</div>
			</div>

			<div class="row feedback-group feedback-question">
				<div class="col-md-5"><label for="question2">You consider yourself as a regular customer for the next 5 years</label></div>
				<div class="col-md-2">
					<input type="radio" class="form-radio" name="question2" id="question2_sa" value="Strongly Agree">
					<label class="hidden-md hidden-lg" for="question2_sa">Strongly Agree</label>
				</div>
				<div class="col-md-1">
					<input type="radio" class="form-radio" name="question2" id="question2_a" value="Agree">
					<label class="hidden-md hidden-lg" for="question2_a">Agree</label>
				</div>
				<div class="col-md-1">
					<input type="radio" class="form-radio" name="question2" id="question2_n" value="Neutral">
					<label class="hidden-md hidden-lg" for="question2_n">Neutral</label>
				</div>
				<div class="col-md-1">
					<input type="radio" class="form-radio" name="question2" id="question2_d" value="Disagree">
					<label class="hidden-md hidden-lg" for="question2_d">Disagree</label>
				</div>
				<div class="col-md-2">
					<input type="radio" class="form-radio" name="question2" id="question2_sd" value="Disagree">
					<label class="hidden-md hidden-lg" for="question2_sd">Strongly Disagree</label>
				</div>
			</div>

			<div class="row feedback-group feedback-question">
				<div class="col-md-5"><label for="question3">The staff are friendly and accomodating</label></div>
				<div class="col-md-2">
					<input type="radio" class="form-radio" name="question3" id="question3_sa" value="Strongly Agree">
					<label class="hidden-md hidden-lg" for="question3_sa">Strongly Agree</label>
				</div>
				<div class="col-md-1">
					<input type="radio" class="form-radio" name="question3" id="question3_a" value="Agree">
					<label class="hidden-md hidden-lg" for="question3_a">Agree</label>
				</div>
				<div class="col-md-1">
					<input type="radio" class="form-radio" name="question3" id="question3_n" value="Neutral">
					<label class="hidden-md hidden-lg" for="question3_n">Neutral</label>
				</div>
				<div class="col-md-1">
					<input type="radio" class="form-radio" name="question3" id="question3_d" value="Disagree">
					<label class="hidden-md hidden-lg" for="question3_d">Disagree</label>
				</div>
				<div class="col-md-2">
					<input type="radio" class="form-radio" name="question3" id="question3_sd" value="Disagree">
					<label class="hidden-md hidden-lg" for="question3_sd">Strongly Disagree</label>
				</div>
			</div>

			<div class="row feedback-group feedback-question">
				<div class="col-md-5"><label for="question4">LifeScience provides you the health care you need</label></div>
				<div class="col-md-2">
					<input type="radio" class="form-radio" name="question4" id="question4_sa" value="Strongly Agree">
					<label class="hidden-md hidden-lg" for="question4_sa">Strongly Agree</label>
				</div>
				<div class="col-md-1">
					<input type="radio" class="form-radio" name="question4" id="question4_a" value="Agree">
					<label class="hidden-md hidden-lg" for="question4_a">Agree</label>
				</div>
				<div class="col-md-1">
					<input type="radio" class="form-radio" name="question4" id="question4_n" value="Neutral">
					<label class="hidden-md hidden-lg" for="question4_n">Neutral</label>
				</div>
				<div class="col-md-1">
					<input type="radio" class="form-radio" name="question4" id="question4_d" value="Disagree">
					<label class="hidden-md hidden-lg" for="question4_d">Disagree</label>
				</div>
				<div class="col-md-2">
					<input type="radio" class="form-radio" name="question4" id="question4_sd" value="Disagree">
					<label class="hidden-md hidden-lg" for="question4_sd">Strongly Disagree</label>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12 form-group">
					<button class="btn" id="feedback">SUBMIT</button>
				</div>
			</div>
		</form>
	</div>


</main>

<?php snippet('footer') ?>