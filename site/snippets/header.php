<?php
$exclude     = ['signature-programs', 'diagnostic-tests', 'health-and-wellness-services', 'your-health-digest', 'press'];
$title       = $page->title()->html() . ' - ' . $site->title()->html();
$description = $site->description()->html();
$image       = $site->file('share.jpg')->url();

if (in_array($page->parent()->slug(), $exclude)) {
    $description = $page->description()->html();
    $image       = in_array($page->parent()->slug(), ['your-health-digest', 'press']) ? $page->photo()->toFile()->url() : $page->parent()->banner()->toFile()->url();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $site->keywords()->html(); ?>">
    <meta property="og:title" content="<?php echo $title; ?>">
    <meta property="og:description" content="<?php echo $description; ?>">
    <meta property="og:image" content="<?php echo $image; ?>">
    <meta property="og:url" content="<?php echo url::current(); ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="og:site_name" content="<?php echo $site->title()->html(); ?>">
    <meta property="og:type" content="website">
    <meta name="twitter:image:alt" content="<?php echo $title; ?>">
    <meta name="twitter:site" content="@LifeSciencePhil">
    <title><?php echo $page->title()->html() ?> - <?php echo $site->title()->html() ?></title>
    <link rel="icon" type="image/png" href="assets/images/favicon.png" />
    <?php echo css('assets/css/bootstrap-datepicker.standalone.min.css') ?>
    <?php echo css('assets/css/slick.css') ?>
    <?php echo css('assets/css/lazyYT.css') ?>
    <?php echo css('assets/css/main.css') ?>
    <!-- Google Web Fonts -->
    <script type="text/javascript">
    WebFontConfig = {
    google: { families: [ 'Open+Sans:400,700,800:latin', 'Francois+One::latin' ] }
    };
    (function() {
    var wf = document.createElement('script');
    wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
    })();
    </script>
    <script>
        var BASE_URL = '<?php echo $site->url(); ?>';
    </script>
</head>
<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-97039929-1', 'auto');
  ga('send', 'pageview');
</script>
    <div class="overlay"></div>
    <?php snippet('booking', ['device' => 'mt']); ?>
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <a class="header-logo" href="<?php echo url() ?>">
                            <img class="header-logo__image" src="<?php echo url('assets/images/logo.png') ?>" alt="<?php echo $site->title()->html() ?>">
                        </a><!-- /.header-logo -->
                        <a class="btn btn--book hidden-md hidden-lg book-appointment" id="book-appointment-mt" data-device="mt" href="#">Book an Appointment</a>
                        <?php snippet('menu') ?>
                    </div>
                </div>
            </div><!-- /.header -->
        </header>