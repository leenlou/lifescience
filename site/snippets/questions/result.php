<div class="test-question">Recommended Programs and Services</div>
<?php if ($services) { ?>
<div class="row home-survey-description">
    <div class="row">
        <?php
        foreach ($services as $service) {
            $s     = $pages->find('programs/' . $service);
            $color = $s->parent()->slug() == 'signature-programs' ? 'green' : ($s->parent()->slug() == 'diagnostic-tests' ? 'blue' : 'orange');
        ?>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="programs-content-item">
                <img class="lazy-img programs-content-icon programs-content-icon--<?php echo $color; ?>" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA" data-src="<?php echo $s->icon()->toFile()->url(); ?>" alt="<?php echo $s->title(); ?>">
                <div class="programs-content-title"><?php echo $s->slug() == 'gene-tests' ? 'Sports Sensor' : $s->title(); ?></div>
                <div class="programs-content-description">
                    <?php echo $s->description(); ?>
                </div>
                <a class="btn programs-content-btn" href="<?php echo $s->url(); ?>?test=<?php echo $key; ?>">LEARN MORE</a>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>
<?php } ?>

<a class="btn test-btn test-retake" href="javascript:void(0);">TAKE THE TEST AGAIN</a>

<script>
    /**
     * Lazy load images
     */
    $(".lazy-img").unveil();
</script>