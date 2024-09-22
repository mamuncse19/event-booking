<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Event Booking System</title>
    <link rel="shortcut icon" href="<?php echo e(URL::to(config('app.asset').'favicon.ico')); ?>"/>
    <!-- css -->
    <link rel="stylesheet" href="<?php echo e(asset(config('app.asset').'frontend/bower_components/bootstrap/dist/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset(config('app.asset').'frontend/bower_components/ionicons/css/ionicons.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset(config('app.asset').'frontend/assets/css/main.css')); ?>">
</head>
<body data-spy="scroll" data-target="#site-nav">
    <nav id="site-nav" class="navbar navbar-fixed-top navbar-custom">
        <div class="container">
            <div class="navbar-header">

                <!-- logo -->
                <div class="site-branding">
                    <a class="logo" href="<?php echo e(url('/')); ?>">

                        <!-- logo image  -->
                        <img src="<?php echo e(asset(config('app.asset').'frontend/assets/images/logo.png')); ?>" alt="Logo">

                        Conference 2024
                    </a>
                </div>

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-items" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div><!-- /.navbar-header -->

            <div class="collapse navbar-collapse" id="navbar-items">
                <ul class="nav navbar-nav navbar-right">

                    <!-- navigation menu -->
                    <li class="active"><a data-scroll href="#about">About</a></li>
                    <li><a data-scroll href="#schedule">Schedule</a></li>
                    <li><a data-scroll href="#partner">Partner</a></li>
                    <li><a href="<?php echo e(route('ticket.create')); ?>">Book Ticket</a></li>

                </ul>
            </div>
        </div><!-- /.container -->
    </nav>

    <header id="site-header" class="site-header valign-center">
        <div class="intro">

            <h2>11 October, 2024 / Dhaka</h2>

            <h1>Freelancer Conference 2024</h1>

            <p>First &amp; Largest Conference</p>

            <a class="btn btn-white" href="<?php echo e(route('ticket.create')); ?>">Book Ticket</a>

        </div>
    </header>

    <section id="about" class="section about">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">

                    <h3 class="section-title">About Us</h3>

                    <p>You've inspired new consumer, racked up click-thru's, blown-up brand enes. We can't give you back the weekends you worked, or erase the pain ebeing forced to make the logo bigger. But if you submit your best work we ajusts might be able to give the chance to show you best digital marketing.</p>

                    <figure>
                        <img alt="" class="img-responsive" src="assets/images/about-us.jpg">
                    </figure>

                </div><!-- /.col-sm-6 -->

                <div class="col-sm-6">

                    <h3 class="section-title multiple-title">What is Our Goal?</h3>

                    <p>You've inspired new consumer, racked up click-thru's, blown-up brand enes. We can't give you back the weekends you worked, or erase the pain ebeing forced to make the logo bigger. But if you submit your best work we ajusts might be able to give the chance to show you best digital marketing.</p>

                    <ul class="list-arrow-right">

                        <li>Learn from the best Asian Social Media Experts &amp; Case Studies</li>
                        <li>Have dedicated 2-to-1 meetings with the experts</li>
                        <li>Reach more consumers for less by learning new digital media skills</li>
                        <li>Save money when spending in online advertising</li>

                    </ul>

                </div><!-- /.col-sm-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <section id="schedule" class="section schedule">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Event Schedule</h3>
                </div>
            </div>
            <div class="row">
                <?php $__empty_1 = true; $__currentLoopData = $eventInfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-md-4 col-sm-6">
                    <div class="schedule-box">
                        <div class="time">
                            <time datetime="09:00"><?php echo e($event->date->format('j M, Y, g:i a')); ?>

                        </div>
                        <h3><?php echo e($event->name); ?></h3>
                        <p>Available Seats: <?php echo e($event->available_seats); ?></p>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="col-md-4 col-sm-6">
                    <div class="schedule-box">
                        <p>No upcoming events at the moment. Please check back later.</p>
                    </div>
                </div>
                <?php endif; ?>
            </div>
    </section>

    <section id="partner" class="section partner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Event Partner</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <a class="partner-box partner-box-1"></a>
                </div>
                <div class="col-sm-3">
                    <a class="partner-box partner-box-2"></a>
                </div>
                <div class="col-sm-3">
                    <a class="partner-box partner-box-3"></a>
                </div>
                <div class="col-sm-3">
                    <a class="partner-box partner-box-4"></a>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <a class="partner-box partner-box-5"></a>
                </div>
                <div class="col-sm-3">
                    <a class="partner-box partner-box-6"></a>
                </div>
                <div class="col-sm-3">
                    <a class="partner-box partner-box-7"></a>
                </div>
                <div class="col-sm-3">
                    <a class="partner-box partner-box-8"></a>
                </div>
            </div>
    </section>

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="site-info">&copy; <?php echo e(date('Y')); ?> Mamun Hossain. All Rights Reserved</p>

                </div>
            </div>
        </div>
    </footer>

    <!-- script -->
    <script src="<?php echo e(asset(config('app.asset').'frontend/bower_components/jquery/dist/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset(config('app.asset').'frontend/bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset(config('app.asset').'frontend/bower_components/smooth-scroll/dist/js/smooth-scroll.min.js')); ?>"></script>
    <script src="<?php echo e(asset(config('app.asset').'frontend/assets/js/main.js')); ?>"></script>
</body>
</html>
<?php /**PATH F:\laragon\www\event-booking\resources\views/index.blade.php ENDPATH**/ ?>