<?php snippet('header') ?>
<?php
$act = $program = $programName = $package = "";
$flag=0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$flag = 1;
	$act= $_POST["act"];
	$programName= $_POST["programName"];
	$package= $_POST["package"];
	$program = $package." ".$programName;
}
else if (($page->title()->upper()=="CORE HEALTH PROGRAM") || ($page->title()->upper()=="GENETIC PROFILING & INTERVENTION") ||
	($page->title()->upper()=="REVERSE CHRONIC DISEASE") || ($page->title()->upper()=="OPTIMAL WEIGHT MANAGEMENT PROGRAM")) {$flag = 2;}
?>

<script>
var checkpackage = function() {

	var pack = "<?php echo $package; ?>";
	
	if (!(pack=="")) { 
	if (pack=="ESSENTIAL") {
	  document.getElementById('package_book').value = pack;
	} else if (pack=="ADVANCED") {
		document.getElementById('package_book').value = pack;
	} else if (pack=="COMPREHENSIVE") {
		document.getElementById('package_book').value = pack;
	}
	}

}

</script>

<main class="service">
	<div class="banner" style="background-image: url('<?php echo $page->parent()->banner()->toFile()->url(); ?>')"></div>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="heading service-heading service-heading--green"><?php echo $page->title()->upper(); ?></h1>
				<div class="service-content">
					<div class="service-description">
						<?php echo $page->text()->kirbytext(); ?>
					</div>
					<button class="btn btn--service popup-btn" data-id="service-book" <?php if ($flag==1) {echo 'id="bookbtn" ';} ?> >BOOK NOW</button>
					<button class="btn btn--service popup-btn" data-id="service-inquire" <?php if ($flag==1) {echo 'id="inquirebtn" ';} ?> >INQUIRE</button>
				</div>
				<h1 class="heading service-heading">OTHER <?php echo $page->parent()->title()->upper(); ?></h1>
				<div class="service-others">
					<div class="row">
						<?php
						$color = $page->slug() == 'signature-programs' ? 'green' : ($page->slug() == 'diagnostic-tests' ? 'blue' : 'orange');
						foreach ($page->parent()->children()->not($page->slug())->sortBy('date', 'asc') as $child) {
						?>
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
						<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="popup" id="service-book">
		<form class="form form--popup" id="form-book-service" action="#">
			<div class="popup-header">
				<h2 class="heading popup-heading">BOOK OUR <?php echo $page->title()->upper(); ?></h2>
				<div class="popup-subheading">
					Our standard procedure at LifeScience always starts with a full assessment of the client through a Functional Medicine Consult with our doctors.
				</div>
			</div>
			<div class="popup-content">
				<div class="notif"></div>
				<div class="col-xs-12 col-sm-12 <?php if(($flag==1)||($flag==2)) { echo 'col-md-6'; } else {echo 'col-md-12'; } ?> form-group">
	                <label class="form-label" for="title_book">Title</label>
	                <select class="form-control form-control--xs" name="title" id="title_book">
	                    <option value="">Choose...</option>
	                    <option value="mr">Mr.</option>
	                    <option value="ms">Ms.</option>
	                </select>
	            </div>
	            <?php if(($flag==1)||($flag==2)) { ?>
	            <div class="col-xs-12 col-sm-12 col-md-6 form-group">
	                <label class="form-label" for="package_book">Select Package</label>
	                <select class="form-control form-control--xs" name="package" id="package_book">
	                    <option value="">Choose...</option>
	                    <option value="ESSENTIAL">ESSENTIAL</option>
	                    <option value="ADVANCED">ADVANCED</option>
	                    <option value="COMPREHENSIVE">COMPREHENSIVE</option>
	                </select>
	            </div>
	            <?php } if($flag==1){ ?>
	            <script> checkpackage(); </script>
	            <?php } ?>
             	<div class="col-xs-12 col-sm-12 col-md-6 form-group">
	                <label class="form-label" for="first_name_book">First Name</label>
	                <input type="text" class="form-control" name="first_name" id="first_name_book">
	            </div>
	            <div class="col-xs-12 col-sm-12 col-md-6 form-group">
	                <label class="form-label" for="last_name_book">Last Name</label>
	                <input type="text" class="form-control" name="last_name" id="last_name_book">
	            </div>
	            <div class="col-xs-12 col-sm-12 col-md-6 form-group">
	                <label class="form-label" for="contact_number_book">Contact Number</label>
	                <input type="text" class="form-control" name="contact_number" id="contact_number_book">
	            </div>
	            <div class="col-xs-12 col-sm-12 col-md-6 form-group">
	                <label class="form-label" for="email_book">E-mail</label>
	                <input type="text" class="form-control" name="email" id="email_book">
	            </div>
	            <div class="col-xs-12 col-sm-12 col-md-6 form-group">
	                <label class="form-label" for="preferred_date_book">Preferred Date</label>
	                <input type="text" class="form-control datepicker" name="preferred_date" id="preferred_date_book">
	                <span class="form-control-calendar"></span>
	            </div>
	            <div class="col-xs-12 col-sm-12 col-md-6 form-group">
	                <label class="form-label" for="preferred_time_book">Preferred Time</label>
	                <select class="form-control" name="preferred_time" id="preferred_time_book">
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
	            	<input type="checkbox" class="form-checkbox" name="copy" id="copy_book" value="yes"><label for="copy_book"> Send me a copy</label> <br>
	            	<input type="hidden" name="service" value="<?php echo $page->title()->text(); ?>">
	            	<div class="book-service-test hide"><?php //echo $test; ?></div>
	                <button type="submit" class="btn btn--popup" id="book-service" >BOOK NOW</button>
	            </div>
			</div>
		</form>
	</div>

	<div class="popup" id="service-inquire">
		<form class="form form--popup" id="form-inquire-service" action="#">
			<div class="popup-header">
				<h2 class="heading popup-heading">INQUIRY</h2>
			</div>
			<div class="popup-content">
				<div class="notif"></div>
				<div class="col-xs-12 col-sm-12 col-md-12 form-group">
	                <label class="form-label" for="service">Concern</label>
	                <select class="form-control" name="service" id="service">
	                    <option value="">Choose...</option>
	                    <?php foreach (page('programs')->grandChildren() as $gchild) { ?>
	                    <option value="<?php echo $gchild->title(); ?>" <?php echo $page->slug() == $gchild->slug() ? 'selected' : ''; ?>>
	                    	<?php echo $gchild->title(); ?>
	                    </option>
	                    <?php } ?>
	                </select>
	            </div>
             	<div class="col-xs-12 col-sm-12 col-md-6 form-group">
	                <label class="form-label" for="first_name_inquire">First Name</label>
	                <input type="text" class="form-control" name="first_name" id="first_name_inquire">
	            </div>
	            <div class="col-xs-12 col-sm-12 col-md-6 form-group">
	                <label class="form-label" for="last_name_inquire">Last Name</label>
	                <input type="text" class="form-control" name="last_name" id="last_name_inquire">
	            </div>
	            <div class="col-xs-12 col-sm-12 col-md-6 form-group">
	                <label class="form-label" for="contact_number_inquire">Contact Number</label>
	                <input type="text" class="form-control" name="contact_number" id="contact_number_inquire">
	            </div>
	            <div class="col-xs-12 col-sm-12 col-md-6 form-group">
	                <label class="form-label" for="email_inquire">E-mail</label>
	                <input type="text" class="form-control" name="email" id="email_inquire">
	            </div>
	            <div class="col-xs-12 col-sm-12 col-md-12 form-group">
	                <label class="form-label" for="message_inquire">Message</label>
	                <textarea class="form-control" name="message" id="message_inquire" cols="30" rows="4"><?php if($act=="inquire") {echo "RE: ".$program;} ?></textarea>
	            </div>
	            <div class="col-xs-12 col-sm-12 col-md-12 form-group">
	            <input type="checkbox" class="form-checkbox" name="copy" id="copy_inquire" value="yes"><label for="copy_inquire"> Send me a copy</label> <br>
	                <button type="submit" class="btn btn--popup" id="inquire-service">SEND</button>
	            </div>
			</div>
		</form>
	</div>
</main>


<?php snippet('footer') ?>



<?php

	if ($act=="book"){ echo '<script>  var bkbtn = document.getElementById("bookbtn"); bkbtn.click(); </script>'; }
	elseif ($act=="inquire") { echo '<script>  var inbtn = document.getElementById("inquirebtn"); inbtn.click(); </script>'; }

?>

