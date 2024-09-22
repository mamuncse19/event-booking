<div class="sl-header">
    <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
    </div><!-- sl-header-left -->
    <div class="sl-header-right">
        <nav class="nav">
            <div class="dropdown">
                <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                    <span class="logged-name"><span class="hidden-md-down"><?php echo e(Auth::user()->name); ?></span></span>
                    <img src="<?php echo e(asset(config('app.asset').'admin/userImg/avatar/avatar.jpg')); ?>" class="wd-32 rounded-circle" alt="">
                </a>
                <div class="dropdown-menu dropdown-menu-header wd-200">
                    <ul class="list-unstyled user-profile-nav">
                        <form action="<?php echo e(url('logout')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <li><i class="icon ion-power ml-2"></i><input type="submit" value="Sign Out" style="cursor:pointer; background-color: #2F3844; border: none; color: white;"></li>
                        </form>
                    </ul>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
        </nav>
    </div><!-- sl-header-right -->
</div><!-- sl-header -->
<?php /**PATH F:\laragon\www\event-booking\resources\views/admin/layouts/header.blade.php ENDPATH**/ ?>