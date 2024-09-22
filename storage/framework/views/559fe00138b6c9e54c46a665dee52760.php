<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>"/>

        <title>Admin Login</title>

        <!-- vendor css -->
        <link href="<?php echo e(asset(config('app.asset').'admin/lib/font-awesome/css/font-awesome.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset(config('app.asset').'admin/lib/Ionicons/css/ionicons.css')); ?>" rel="stylesheet">


        <!-- Starlight CSS -->
        <link rel="stylesheet" href="<?php echo e(asset(config('app.asset').'admin/css/starlight.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset(config('app.asset').'admin/css/custom.css')); ?>">
        <!-- toastr CSS cdn-->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.css">
    </head>

    <body>



        <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

            <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
                <div class="signin-logo tx-center tx-24 tx-bold tx-inverse"><span class="tx-info tx-normal">Admin</span> Login</div>
                <div class="tx-center mg-b-40"></div>
                <form method="post" action="<?php echo e(url('login')); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Enter your email" autocomplete="off">
                    <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Enter your password" autocomplete="off">
                    <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                </div>
                <button type="submit" class="btn btn-info btn-block cursor-pointer">Login</button>

                <div class="mg-t-10">Haven't got an account yet? <a href="<?php echo e(url('register')); ?>" class="tx-info">Create Account</a></div>
                </form>
            </div>
        </div>



        <script src="<?php echo e(asset(config('app.asset').'admin/lib/jquery/jquery.js')); ?>"></script>
        <script src="<?php echo e(asset(config('app.asset').'admin/lib/popper.js/popper.js')); ?>"></script>
        <script src="<?php echo e(asset(config('app.asset').'admin/lib/bootstrap/bootstrap.js')); ?>"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.js"></script>
        <script>
<?php if(Session::has('message')): ?>
var type = "<?php echo e(Session::get('alert-type','info')); ?>";
switch (type){
case 'info':
        toastr.info("<?php echo e(Session::get('message')); ?>");
        break;
        case 'success':
        toastr.success("<?php echo e(Session::get('message')); ?>");
        break;
        case 'warning':
        toastr.warning("<?php echo e(Session::get('message')); ?>");
        break;
        case 'error':
        toastr.error("<?php echo e(Session::get('message')); ?>");
        break;
        }
<?php endif; ?>
        </script>

    </body>
</html>

<?php /**PATH F:\laragon\www\event-booking\resources\views/auth/login.blade.php ENDPATH**/ ?>