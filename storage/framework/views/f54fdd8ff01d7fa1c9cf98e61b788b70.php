<?php $__env->startSection('title'); ?>
Event
<?php $__env->stopSection(); ?>
<?php $__env->startSection('head-nav'); ?>
<nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
    <span class="breadcrumb-item active">Event List</span>
</nav>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('MainContent'); ?>
<div class="card pd-20 pd-sm-40 mg-b-50">
    <h6 class="card-body-title">Event List
        <a href="<?php echo e(route('event.create')); ?>" class="btn btn-sm btn-success product-create-btn">Create New Event</a>
    </h6>

    <div class="table-wrapper">
        <table id="datatable1" class="table display responsive nowrap table-bordered">
            <thead>
                <tr>
                    <th class="wd-10p text-center">Sl No.</th>
                    <th class="wd-25p">Name</th>
                    <th class="wd-10p text-center">Date</th>
                    <th class="wd-10p text-center">Total Seat</th>
                    <th class="wd-10p text-center">Available Seat</th>

                </tr>
            </thead>
            <tbody>
                <?php if(!$eventInfo->isEmpty()): ?>
                <?php $sl = 0; ?>
                <?php $__currentLoopData = $eventInfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="text-center"><?php echo e(++$sl); ?></td>
                    <td><?php echo e($event->name); ?></td>
                    <td class="text-center"><?php echo e($event->date->format('j M, Y, g:i a')); ?></td>
                    <td class="text-center"><?php echo e($event->total_seats); ?></td>
                    <td class="text-center"><?php echo e($event->available_seats); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <tr>
                    <td colspan="5">There is no event created yet</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div><!-- table-wrapper -->
</div><!-- card -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\event-booking\resources\views/admin/event/index.blade.php ENDPATH**/ ?>