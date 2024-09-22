<div class="sl-logo"><a href="<?php echo e(route('dashboard')); ?>">Admin Panel</a></div>
<div class="sl-sideleft">

    <div class="sl-sideleft-menu">
        <a href="<?php echo e(route('dashboard')); ?>" class="sl-menu-link active">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                <span class="menu-item-label">Dashboard</span>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon fa fa-calendar tx-20"></i>
                <span class="menu-item-label">Event Manage</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="<?php echo e(route('event.list')); ?>" class="nav-link">Event List</a></li>
        </ul>
        <!-- menu-item -->

    </div><!-- sl-sideleft-menu -->

</div><!-- sl-sideleft -->
<?php /**PATH F:\laragon\www\event-booking\resources\views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>