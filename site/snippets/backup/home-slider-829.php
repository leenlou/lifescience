<?php if ($slider = page('home-slider')->children()->visible()) { ?>
<div class="home-slider">
    <?php foreach ($slider as $slide) { ?>
    <div class="home-slider-image" style="background-image: url('<?php echo $slide->photo()->toFile()->url(); ?>');">
        <div class="container">
            <div class="row home-slider-holder">
                <h1 class="heading home-slider-heading"><?php echo $slide->title()->upper(); ?></h1>
                <div class="home-slider-description"><?php echo $slide->description()->kirbytext(); ?></div>
                <?php if ($slide->link() != '') { ?>
                <a class="btn home-slider-btn" href="<?php echo $slide->link(); ?>">LEARN MORE</a>
                <?php } ?>
            </div>
            <div class="home-slider-overlay"></div>
        </div>
    </div>
    <?php } ?>
    <div class="home-slider-image mari-hide">
        <div class="container">
            <div class="row home-slider-holder">
                <h1 class="heading home-slider-heading">&nbsp;</h1>
                <div class="home-slider-description"><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;<br>&nbsp;</p></div>
                <p class="mari-right"><a class="btn home-slider-btn" href="http://www.lifescience.ph/your-health-digest/functional-medicine-finding-a-doctor-who-understands">LEARN MORE</a></p>
            </div>
            <div class="home-slider-overlay"></div>
        </div>
    </div>


</div>
<?php } ?>


