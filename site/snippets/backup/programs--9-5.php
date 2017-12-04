<?php $flag = 0; $i=0; $sigcount = 0;
$category = $pages->find('programs/' . $slug);
if ($category->hasChildren()) {
?>

<div class="<?php echo $category->slug(); ?>">
	<?php if ($flag==0) { $programtype = $category->slug(); if ($programtype=="signature-programs") {$flag=1; $i=1; } } ?> 
	<div class="programs-heading-holder programs-heading-holder--<?php echo $color; ?>">
		<h1 class="heading programs-heading"><?php echo $category->title()->upper(); ?></h1>
		<?php echo $category->text()->kirbytext(); ?>
	</div>
	<div class="row">
		<?php foreach ($category->children() as $child) { ?>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<?php if (($flag==1)&&($sigcount<3)) { 
			echo '<div class="programs-content-item sig-prog">';
			} else {
			echo '<div class="programs-content-item">';
			} ?>
				<img class="lazy-img programs-content-icon programs-content-icon--<?php echo $color; ?>" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA" data-src="<?php echo $child->icon()->toFile()->url(); ?>" alt="<?php echo $child->title(); ?>">
				<div class="programs-content-title"><?php echo $child->title(); ?></div>
				<div class="programs-content-description">
					<?php echo $child->description(); $sigcount++;?>
				</div>
				<?php if (($flag==0)||($sigcount==4))  { ?>
				<a class="btn programs-content-btn" href="<?php echo $child->url(); ?>">LEARN MORE</a>
				<?php } else { ?>
				<button class="btn programs-content-btn sig-prog-1" <?php echo 'id=mybtn'.$i; $i++;?> >ESSENTIAL</button>
				<button class="btn programs-content-btn sig-prog-2" <?php echo 'id=mybtn'.$i; $i++;?> >ADVANCED</button>
				<button class="btn programs-content-btn sig-prog-3" <?php echo 'id=mybtn'.$i; $i++;?> >COMPREHENSIVE</button>
				<?php } ?>

				
			</div>
		</div>
		<?php } ?>
	</div>
</div>
<?php } ?>

<?php if($flag==1) { ?>

<!-- The Modal -->
<div id="myModal1" class="modal">

  <!-- Modal content -->
  <div class="modal-content"><span class="close">&times;</span>
  	<h1 class="heading service-heading service-heading--green ess">ESSENTIAL CORE HEALTH PROGRAM</h1>
  	<h1 class="heading service-heading service-heading--green adv">ADVANCED CORE HEALTH PROGRAM</h1>
  	<h1 class="heading service-heading service-heading--green com">COMPREHENSIVE CORE HEALTH PROGRAM</h1>
    
    <div class="service-description modal-pad">
	<p>The program determines the effect of certain food on your body. The program’s objective is to help the body get the most out of the food and supplements in boosting energy, and addressing common symptoms such as migraines, insomnia, chronic fatigue, or declining immune system.</p>
	<div id="essch">
		<p><strong><em>Essential Core Health Program</em></strong> identifies the body’s reaction to specific food items  and evaluates the body’s intestinal health which could be causing some of the current health symptoms, and may trigger potential health issues. Test includes: Food Intolerance Test (FIT), and Organic Acid Test (OAT)</p>
	</div>
	<div id="advch">
		<p><strong><em>Advanced Core Health Program</em></strong> identifies the body’s reaction to specific food items  and evaluates the body’s intestinal health which could be causing some of the current health symptoms, and may trigger potential health issues. Test includes: Food Intolerance Test (FIT), and Organic Acid Test (OAT)</p>
	</div>
	<div id="comch">
		<p><strong><em>Comprehensive Core Health Program</em></strong> identifies the body’s reaction to specific food items  and evaluates the body’s intestinal health which could be causing some of the current health symptoms, and may trigger potential health issues. Test includes: Food Intolerance Test (FIT), and Organic Acid Test (OAT)</p>
	</div>
	<p><strong>Who this program is for </strong></p>
	<p>Individuals with gut problems, signs of malnutrition such as hair loss, chronic fatigue, or a noticeable declining immune system.</p>
	<p><strong>Average Duration</strong></p>
	<p>12 weeks</p>
	<p><strong>Expected Benefits</strong></p>
	<p>Energy gain, Improvement of food intolerance symptoms such as migraines, insomnia.</p>
	<p>Call LifeScience today or book a visit to see if this program is the best for you.</p>
	<form name="chp" action="/programs/signature-programs/core-health-program" method="POST">
    <input type="hidden" name="programName" value="CORE HEALTH PROGRAM" />
    <input type="hidden" name="package" value="" />
    <button type="submit" class="btn btn--service" name="act" value="book">BOOK NOW</button>
    <button type="submit" class="btn btn--service" name="act" value="inquire">INQUIRE</button>
	</form>
	</div>


  </div>

</div>


<div id="myModal2" class="modal">

  <!-- Modal content -->
  <div class="modal-content"><span class="close">&times;</span>
  	<h1 class="heading service-heading service-heading--green ess">ESSENTIAL GENETIC PROFILING & INTERVENTION</h1>
  	<h1 class="heading service-heading service-heading--green adv">ADVANCED GENETIC PROFILING & INTERVENTION</h1>
  	<h1 class="heading service-heading service-heading--green com">COMPREHENSIVE GENETIC PROFILING & INTERVENTION</h1>
    
    <div class="service-description modal-pad">
	<p>Learning your family health history is a solid start to discovering the best path to managing your own health. This 6-month program utilizes the science of genomics to identify your potential risk of inheriting diseases like cancer and heart disease. The results of gene tests will be used to apply intervention modalities to lessen if not reverse these risks. This program aims to screen, prevent and create interventions to ensure that you and your next generation have a healthy future ahead.</p>
	<div id="essid">
		<p><strong><em>Essential Genetic Profiling & Intervention</em></strong></p>
	</div>
	<div id="advid">
		<p><strong><em>Advanced Genetic Profiling & Intervention</em></strong></p>
	</div>
	<div id="comid">
		<p><strong><em>Comprehensive Genetic Profiling & Intervention</em></strong> </p>
	</div>
	<p><strong>Target Audience</strong></p>
	<p>Individuals with family history of diseases such as cancer, heart disease, diabetes.</p>
	<p><strong>Expected Benefits</strong></p>
	<p>Screening, Prevention, Treatment outcome improvement and modification that will ultimately provide excellent quality of life and optimal health.</p>
	<form name ="gpi" action="/programs/signature-programs/genetic-profiling-intervention" method="POST">
    <input type="hidden" name="programName" value="GENETIC PROFILING & INTERVENTION" />
    <input type="hidden" name="package" value="" />
    <button type="submit" class="btn btn--service" name="act" value="book">BOOK NOW</button>
    <button type="submit" class="btn btn--service" name="act" value="inquire">INQUIRE</button>
	</form>
	</div>


  </div>

</div>


<div id="myModal3" class="modal">

  <!-- Modal content -->
  <div class="modal-content"><span class="close">&times;</span>
  	<h1 class="heading service-heading service-heading--green ess">ESSENTIAL REVERSE CHRONIC DISEASE PROGRAM</h1>
  	<h1 class="heading service-heading service-heading--green adv">ADVANCED REVERSE CHRONIC DISEASE PROGRAM</h1>
  	<h1 class="heading service-heading service-heading--green com">COMPREHENSIVE REVERSE CHRONIC DISEASE PROGRAM</h1>
    
    <div class="service-description modal-pad">
	<p>A program for those who suffer from diabetes, high cholesterol, heart diseases, asthma, etc. The program aims to improve your condition by focusing on detoxification and  strengthening your immune system for an improved quality of life, and to prevent further complications from the disease.</p>
	
	<div id="essrc">
		<p><strong><em>Essential Reverse Chronic Disease Program</em></strong> screens for presence of toxic chemicals in our body from the everyday products that we use and other environmental exposure; and nutritional factors that affect the manifestation and acceleration of chronic diseases, such(as) food reaction to specific food items, and intestinal health. Test includes: GPL-TOX Profile,  Glyphosate Test,  Food Intolerance Test (FIT), and Organic Acid Test (OAT).</p>
	</div>
	<div id="advrc">
		<p><strong><em>Advanced Reverse Chronic Disease Program</em></strong> screens for presence of toxic chemicals in our body from the everyday products that we use and other environmental exposure; and nutritional factors that affect the manifestation and acceleration of chronic diseases, such as vitamin and mineral factors affecting amino acid metabolism and protein digestion; Vitamin D related concerns such as bone health, and fat absorption; reaction to specific food items; and intestinal health. Test includes: GPL-TOX Profile,  Glyphosate Test, Food Intolerance Test (FIT), Organic Acid Test (OAT), Amino Acid Test, and Vitamin D Test.</p>
	</div>
	<div id="comrc">
		<p><strong><em>Comprehensive Reverse Chronic Disease Program</em></strong> screens for presence of toxic chemicals in our body from the everyday products that we use and other environmental exposure; and nutritional factors that affect the manifestation and acceleration of chronic diseases, such as reaction to specific food items, intestinal function, amino acid metabolism, adequacy of Vitamin D levels, plus comprehensive stool test to determine the presence of microorganisms such as yeast, parasites, and bacteria that contribute to chronic illness and neurological dysfunction; and Gluten/Casein Peptide test to determine the body’s inability to digest wheat. rye, barley, and milk. Test includes: GPL-TOX Profile,  Glyphosate Test, Food Intolerance Test (FIT), Organic Acid Test (OAT), Amino Acid Test, Vitamin D Test, Comprehensive stool analysis, and Gluten/ Casein Peptide Test.</p>
	</div>
	<p><strong>Target Audience</strong></p>
	<p>Individuals suffering from chronic and lifestyle-related diseases such as diabetes, high cholesterol, heart disease, respiratory diseases such as asthma, arthritis, and the like.</p>
	<p><strong>Expected Benefits</strong></p>
	<p>Reversal of Chronic Disease, Improved Quality of Life, Prevention of Chronic disease complications.</p>
	<form name="rcdp" action="/programs/signature-programs/reverse-chronic-disease" method="POST">
    <input type="hidden" name="programName" value="REVERSE CHRONIC DISEASE PROGRAM" />
    <input type="hidden" name="package" value="" />
    <button type="submit" class="btn btn--service" name="act" value="book">BOOK NOW</button>
    <button type="submit" class="btn btn--service" name="act" value="inquire">INQUIRE</button>
	</form>
	</div>


  </div>

</div>

<div id="myModal4" class="modal">

  <!-- Modal content -->
  <div class="modal-content"><span class="close">&times;</span>
  	<h1 class="heading service-heading service-heading--green ess">ESSENTIAL OPTIMAL WEIGHT MANAGEMENT PROGRAM</h1>
  	<h1 class="heading service-heading service-heading--green adv">ADVANCED OPTIMAL WEIGHT MANAGEMENT PROGRAM</h1>
  	<h1 class="heading service-heading service-heading--green com">COMPREHENSIVE OPTIMAL WEIGHT MANAGEMENT PROGRAM</h1>

    <div class="service-description modal-pad">
    <h2>Optimal Weight Management for men and women</h2>
	<p>The program moves away from the one-size-fits all approach of weight loss. The program reviews factors beyond your diet — such as sleep, stress, and your environment. It determines the effects of all these factors on your ability to gain or lose weight. The program is also ideal for those suffering from obesity or undergoing menopause, andropause, and thyropause — an underactive thyroid condition.</p>
	<div id="essow">
		<p><strong><em>Essential Optimal Weight Management Program</em></strong>  assesses the hormone levels and nutritional factors that affect weight management. It identifies the body’s reaction to specific food items, and evaluates the body’s intestinal health. Test includes: Food Intolerance Test (FIT), Organic Acid Test (OAT), and Comprehensive Hormones Plus.</p>
	</div>
	<div id="advow">
		<p><strong><em>Advanced Optimal Weight Management Program</em></strong> assesses the hormone levels, and nutritional factors that affect weight management such as vitamin and mineral factors affecting amino acid metabolism and protein digestion; Vitamin D related concerns such as bone health, and fat absorption; reaction to specific food items; and intestinal health. Test includes: Food Intolerance Test (FIT), Organic Acid Test (OAT), Amino Acid Test, Vitamin D Test, and Comprehensive Hormone Plus.</p>
	</div>
	<div id="comow">
		<p><strong><em>Comprehensive Optimal Weight Management Program</em></strong> assesses hormone levels, and factors affecting gut health such as reaction to specific food items, intestinal function, amino acid metabolism, adequacy of Vitamin D levels, plus comprehensive stool test to determine the presence of microorganisms such as yeast, parasites, and bacteria that contribute to chronic illness and neurological dysfunction; and Gluten/Casein Peptide test to determine the body’s inability to digest wheat, rye, barley, and milk. Test includes: Food Intolerance Test (FIT), Organic Acid Test (OAT), Amino Acid Test, Vitamin D Test, Comprehensive stool analysis, Gluten/ Casein Peptide Test, and Comprehensive Hormone Plus.</p>
	</div>
	<p><strong>Target Audience</strong></p>
	<p>Individuals suffering from obesity, undergoing menopause and andropause, thyropause, visceral adiposity, resistant weight loss.</p>
	<p><strong>Expected Benefits</strong></p>
	<p>Weight loss, Prevention of metabolic diseases.</p>
	<form name="owmp" action="/programs/signature-programs/optimal-weight-management" method="POST">
    <input type="hidden" name="programName" value="OPTIMUM WEIGHT MANAGEMENT PROGRAM" />
    <input type="hidden" name="package" value="" />
    <button type="submit" class="btn btn--service" name="act" value="book">BOOK NOW</button>
    <button type="submit" class="btn btn--service" name="act" value="inquire">INQUIRE</button>
	</form>
	</div>


  </div>

</div>




<script>
// Get the modal
var modal1 = document.getElementById('myModal1');
var modal2 = document.getElementById('myModal2');
var modal3 = document.getElementById('myModal3');
var modal4 = document.getElementById('myModal4');

// Get the Package type
var ch1 = document.getElementById('essch');
var ch2 = document.getElementById('advch');
var ch3 = document.getElementById('comch');

var id1 = document.getElementById('essid');
var id2 = document.getElementById('advid');
var id3 = document.getElementById('comid');

var rc1 = document.getElementById('essrc');
var rc2 = document.getElementById('advrc');
var rc3 = document.getElementById('comrc');

var ow1 = document.getElementById('essow');
var ow2 = document.getElementById('advow');
var ow3 = document.getElementById('comow');


// Get the button that opens the modal
var btn1 = document.getElementById("mybtn1");
var btn2 = document.getElementById("mybtn2");
var btn3 = document.getElementById("mybtn3");
var btn4 = document.getElementById("mybtn4");
var btn5 = document.getElementById("mybtn5");
var btn6 = document.getElementById("mybtn6");
var btn7 = document.getElementById("mybtn7");
var btn8 = document.getElementById("mybtn8");
var btn9 = document.getElementById("mybtn9");
//var btn10 = document.getElementById("mybtn10");
//var btn11 = document.getElementById("mybtn11");
//var btn12 = document.getElementById("mybtn12");


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close");

var ess = document.getElementsByClassName("ess");
var adv = document.getElementsByClassName("adv");
var com = document.getElementsByClassName("com");


// When the user clicks the button, open the modal 
btn1.onclick = function() {
    modal1.style.display = "block";
    ch1.style.display = "block";
    ch2.style.display = "none";
    ch3.style.display = "none";
    ess[0].style.display = "block";
    adv[0].style.display = "none";
    com[0].style.display = "none";
    document.forms['chp']['package'].value = "ESSENTIAL";
    

}
btn2.onclick = function() {
    modal1.style.display = "block";
    ch1.style.display = "none";
    ch2.style.display = "block";
    ch3.style.display = "none";
    ess[0].style.display = "none";
    adv[0].style.display = "block";
    com[0].style.display = "none";
    document.forms['chp']['package'].value = "ADVANCED";
}
btn3.onclick = function() {
    modal1.style.display = "block";
    ch1.style.display = "none";
    ch2.style.display = "none";
    ch3.style.display = "block";
    ess[0].style.display = "none";
    adv[0].style.display = "none";
    com[0].style.display = "block";
    document.forms['chp']['package'].value = "COMPREHENSIVE";
}
/*btn10.onclick = function() {
    modal2.style.display = "block";
    id1.style.display = "block";
    id2.style.display = "none";
    id3.style.display = "none";
    ess[1].style.display = "block";
    adv[1].style.display = "none";
    com[1].style.display = "none";
    document.forms['gpi']['package'].value = "ESSENTIAL";
}
btn11.onclick = function() {
    modal2.style.display = "block";
    id1.style.display = "none";
    id2.style.display = "block";
    id3.style.display = "none";
    ess[1].style.display = "none";
    adv[1].style.display = "block";
    com[1].style.display = "none";
    document.forms['gpi']['package'].value = "ADVANCED";
}
btn12.onclick = function() {
    modal2.style.display = "block";
    id1.style.display = "none";
    id2.style.display = "none";
    id3.style.display = "block";
    ess[1].style.display = "none";
    adv[1].style.display = "none";
    com[1].style.display = "block";
    document.forms['gpi']['package'].value = "COMPREHENSIVE";
}*/
btn7.onclick = function() {
    modal3.style.display = "block";
    rc1.style.display = "block";
    rc2.style.display = "none";
    rc3.style.display = "none";
    ess[2].style.display = "block";
    adv[2].style.display = "none";
    com[2].style.display = "none";
    document.forms['rcdp']['package'].value = "ESSENTIAL";
}
btn8.onclick = function() {
    modal3.style.display = "block";
    rc1.style.display = "none";
    rc2.style.display = "block";
    rc3.style.display = "none";
    ess[2].style.display = "none";
    adv[2].style.display = "block";
    com[2].style.display = "none";
    document.forms['rcdp']['package'].value = "ADVANCED";
}
btn9.onclick = function() {
    modal3.style.display = "block";
    rc1.style.display = "none";
    rc2.style.display = "none";
    rc3.style.display = "block";
    ess[2].style.display = "none";
    adv[2].style.display = "none";
    com[2].style.display = "block";
    document.forms['rcdp']['package'].value = "COMPREHENSIVE";
}
btn4.onclick = function() {
    modal4.style.display = "block";
    ow1.style.display = "block";
    ow2.style.display = "none";
    ow3.style.display = "none";
    ess[3].style.display = "block";
    adv[3].style.display = "none";
    com[3].style.display = "none";
    document.forms['owmp']['package'].value = "ESSENTIAL";
}
btn5.onclick = function() {
    modal4.style.display = "block";
    ow1.style.display = "none";
    ow2.style.display = "block";
    ow3.style.display = "none";
    ess[3].style.display = "none";
    adv[3].style.display = "block";
    com[3].style.display = "none";
    document.forms['owmp']['package'].value = "ADVANCED";
}
btn6.onclick = function() {
    modal4.style.display = "block";
    ow1.style.display = "none";
    ow2.style.display = "none";
    ow3.style.display = "block";
    ess[3].style.display = "none";
    adv[3].style.display = "none";
    com[3].style.display = "block";
    document.forms['owmp']['package'].value = "COMPREHENSIVE";
}



// When the user clicks on <span> (x), close the modal
var x = span.length;

while(x--) {
span[x].onclick = function() {
	modal1.style.display = "none";
	modal2.style.display = "none";
	modal3.style.display = "none";
	modal4.style.display = "none";
}
};



// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
    else if (event.target == modal2) {
        modal2.style.display = "none";
    }
    else if (event.target == modal3) {
        modal3.style.display = "none";
    }
    else if (event.target == modal4) {
        modal4.style.display = "none";
    }
}


</script>

<?php } ?>
