<script type="text/javascript">
function findPos(obj) {
    var curtop = 0;
    if (obj.offsetParent) {
        do {
            curtop += obj.offsetTop;
        } while (obj = obj.offsetParent);
    return [curtop];
    }
}</script>
<nav class="header-nav">
    <a class="hidden-md hidden-lg header-toggle" data-toggle="off" href="javascript:void(0);">
        <span class="header-hamburger"></span>
    </a><!-- /.header-toggle -->
    <div class="row">
        <div class="col-md-12 hidden-xs hidden-sm">
            <ul class="header-menu header-menu--small">
                <li class="header-menu__item">
                    <a class="header-menu__link" href="<?php echo page('your-health-digest')->url(); ?>"><?php echo page('your-health-digest')->title(); ?></a>
                </li>
                <li class="header-menu__item">
                    <a class="header-menu__link" href="<?php echo page('faqs')->url(); ?>"><?php echo page('faqs')->title(); ?></a>
                </li>
                <li class="header-menu__item">
                    <a class="header-menu__link" href="<?php echo page('feedback')->url(); ?>"><?php echo page('feedback')->title(); ?></a>
                </li>
                <li class="header-menu__item">
                    <a class="header-menu__link btn btn--book book-appointment" id="book-appointment-d" data-device="d" href="#">BOOK AN APPOINTMENT</a>
                    <?php snippet('booking', ['device' => 'd']); ?>
                </li>
            </ul>
        </div>
        <div class="col-md-12">
            <ul class="header-menu">
                <li class="header-menu__item">
                    <a class="header-menu__link" href="<?php echo page('home')->url(); ?>"><?php echo page('home')->title(); ?></a>
                </li>
                <li class="header-menu__item">
                    <a class="header-menu__link" href="<?php echo page('about')->url(); ?>"><?php echo page('about')->title(); ?></a>
                </li>
                <li class="header-menu__item">
                    <div class="dropdown"><a class="header-menu__link" href="<?php echo page('programs')->url(); ?>"><?php echo page('programs')->title(); ?></a>
                        <div class="dropdown-content">
                          <a href="<?php echo page('programs')->url(); ?>/signature-programs/core-health-program">Core Health Program</a>
                          <a href="<?php echo page('programs')->url(); ?>/signature-programs/genetic-profiling-intervention">Genetic Profiling & Intervention</a>
                          <a href="<?php echo page('programs')->url(); ?>/signature-programs/reverse-chronic-disease">Reverse Chronic Disease</a>
                          <a href="<?php echo page('programs')->url(); ?>/signature-programs/optimum-weight-management">Optimum Weight Management</a>
                          <a href="<?php echo page('programs')->url(); ?>#diagnostic-tests">Diagnostic Tests</a>
                          <a href="<?php echo page('programs')->url(); ?>#health-and-wellness-services">Health and Wellness Services</a>
                        </div>
                    </div>
                </li>
                <li class="header-menu__item">
                    <a class="header-menu__link" href="<?php echo page('press')->url(); ?>"><?php echo page('press')->title(); ?></a>
                </li>
                <li class="header-menu__item">
                    <a class="header-menu__link" href="<?php echo page('careers')->url(); ?>"><?php echo page('careers')->title(); ?></a>
                </li>
                <li class="header-menu__item">
                    <a class="header-menu__link" href="http://regenmedinc.managemyspa.com/WebStore/signin.aspx?WebstoreType=0" target="_blank">My Health Diary</a>
                </li>
                <li class="header-menu__item hidden-md hidden-lg">
                    <a class="header-menu__link" href="<?php echo page('your-health-digest')->url(); ?>"><?php echo page('your-health-digest')->title(); ?></a>
                </li>
                <li class="header-menu__item hidden-md hidden-lg">
                    <a class="header-menu__link" href="<?php echo page('faqs')->url(); ?>"><?php echo page('faqs')->title(); ?></a>
                </li>
                <li class="header-menu__item hidden-md hidden-lg">
                    <a class="header-menu__link" href="<?php echo page('feedback')->url(); ?>"><?php echo page('feedback')->title(); ?></a>
                </li>
            </ul>
        </div>
    </div>
</nav><!-- /.header-nav -->
