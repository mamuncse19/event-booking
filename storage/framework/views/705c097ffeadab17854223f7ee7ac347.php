<?php $__env->startSection('title'); ?>
Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('MainContent'); ?>

<div class="row row-sm">
    <div class="col-sm-6 col-xl-3">
        <div class="card pd-20 bg-primary">
            <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total Event</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
            </div><!-- card-header -->
            <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>

                <h3 class="mg-b-0 tx-white tx-lato tx-bold"><?php echo e($totalEvent); ?></h3>
            </div><!-- card-body -->

        </div><!-- card -->
    </div><!-- col-3 -->
    <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
        <div class="card pd-20 bg-info">
            <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Week's Event</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
            </div><!-- card-header -->
            <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold"><?php echo e($totalEvent); ?></h3>
            </div><!-- card-body -->

        </div><!-- card -->
    </div><!-- col-3 -->
    <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
        <div class="card pd-20 bg-purple">
            <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Month's Event</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
            </div><!-- card-header -->
            <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold"><?php echo e($totalEvent); ?></h3>
            </div><!-- card-body -->

        </div><!-- card -->
    </div><!-- col-3 -->
    <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
        <div class="card pd-20 bg-sl-primary">
            <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Year's Event</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
            </div><!-- card-header -->
            <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold"><?php echo e($totalEvent); ?></h3>
            </div><!-- card-body -->

        </div><!-- card -->
    </div><!-- col-3 -->
</div><!-- row -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laragon\www\event-booking\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>