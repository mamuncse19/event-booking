<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>"/>
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <!-- vendor css -->
        <link href="<?php echo e(asset(config('app.asset').'admin/lib/font-awesome/css/font-awesome.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset(config('app.asset').'admin/lib/Ionicons/css/ionicons.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset(config('app.asset').'admin/lib/perfect-scrollbar/css/perfect-scrollbar.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset(config('app.asset').'admin/lib/rickshaw/rickshaw.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset(config('app.asset').'admin/lib/highlightjs/github.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset(config('app.asset').'admin/lib/datatables/jquery.dataTables.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset(config('app.asset').'admin/lib/select2/css/select2.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset(config('app.asset').'admin/lib/spectrum/spectrum.css')); ?>" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.css">
        <!-- Starlight CSS -->
        <link rel="stylesheet" href="<?php echo e(asset(config('app.asset').'admin/css/starlight.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset(config('app.asset').'admin/css/custom.css')); ?>">
        <script src="<?php echo e(asset(config('app.asset').'admin/lib/jquery/jquery.js')); ?>"></script>
        <style>
            html{
                height: 100%;
            }
            body{
                position: relative;
                min-height: 100%;
            }
        </style>
    </head>

    <body>

        <!-- ########## START: LEFT PANEL ########## -->
        <?php echo $__env->make('admin.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- ########## END: LEFT PANEL ########## -->

        <!-- ########## START: HEAD PANEL ########## -->
        <?php echo $__env->make('admin.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- ########## END: HEAD PANEL ########## -->

        <!-- ########## START: MAIN PANEL ########## -->
        <div class="sl-mainpanel">
            <?php echo $__env->yieldContent('head-nav'); ?>
            <div class="sl-pagebody">
                <?php echo $__env->yieldContent('MainContent'); ?>
            </div>
        </div>

        <!-- ########## END: MAIN PANEL ########## -->

        <!--Footer Area-->
        <?php echo $__env->make('admin.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--End Footer Area-->


        <script src="<?php echo e(asset(config('app.asset').'admin/lib/popper.js/popper.js')); ?>"></script>
        <script src="<?php echo e(asset(config('app.asset').'admin/lib/bootstrap/bootstrap.js')); ?>"></script>
        <script src="<?php echo e(asset(config('app.asset').'admin/lib/jquery-ui/jquery-ui.js')); ?>"></script>
        <script src="<?php echo e(asset(config('app.asset').'admin/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')); ?>"></script>
        <script src="<?php echo e(asset(config('app.asset').'admin/lib/highlightjs/highlight.pack.js')); ?>"></script>
        <script src="<?php echo e(asset(config('app.asset').'admin/lib/datatables/jquery.dataTables.js')); ?>"></script>
        <script src="<?php echo e(asset(config('app.asset').'admin/lib/datatables-responsive/dataTables.responsive.js')); ?>"></script>
        <script src="<?php echo e(asset(config('app.asset').'admin/lib/select2/js/select2.min.js')); ?>"></script>
        <script src="<?php echo e(asset(config('app.asset').'admin/lib/spectrum/spectrum.js')); ?>"></script>
        <script src="<?php echo e(asset(config('app.asset').'admin/lib/jquery.sparkline.bower/jquery.sparkline.min.js')); ?>"></script>
        <script src="<?php echo e(asset(config('app.asset').'admin/lib/d3/d3.js')); ?>"></script>
        <script src="<?php echo e(asset(config('app.asset').'admin/lib/rickshaw/rickshaw.min.js')); ?>"></script>
        <script src="<?php echo e(asset(config('app.asset').'admin/lib/chart.js/Chart.js')); ?>"></script>
        <script src="<?php echo e(asset(config('app.asset').'admin/lib/Flot/jquery.flot.js')); ?>"></script>
        <script src="<?php echo e(asset(config('app.asset').'admin/lib/Flot/jquery.flot.pie.js')); ?>"></script>
        <script src="<?php echo e(asset(config('app.asset').'admin/lib/Flot/jquery.flot.resize.js')); ?>"></script>
        <script src="<?php echo e(asset(config('app.asset').'admin/lib/flot-spline/jquery.flot.spline.js')); ?>"></script>
        <script src="<?php echo e(asset(config('app.asset').'admin/js/starlight.js')); ?>"></script>
        <script>
$(function () {
    'use strict';

    $('#datatable1').DataTable({
        responsive: true,
        language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
        }
    });

    // Select2
    $('.dataTables_length select').select2({minimumResultsForSearch: Infinity});

    // Select2 by showing the search
    $('.select2-show-search').select2({
        minimumResultsForSearch: ''
    });

    // Select2 with tagging support
    $('.select2-tag').select2({
        tags: true,
        tokenSeparators: [',', ' ']
    });

    // Datepicker
    $('.fc-datepicker').datepicker({
        showOtherMonths: true,
        selectOtherMonths: true
    });

    $('#datepickerNoOfMonths').datepicker({
        showOtherMonths: true,
        selectOtherMonths: true,
        numberOfMonths: 2
    });

    // Color picker
    $('#colorpicker').spectrum({
        color: '#17A2B8'
    });

    $('#showAlpha').spectrum({
        color: 'rgba(23,162,184,0.5)',
        showAlpha: true
    });

    $('#showPaletteOnly').spectrum({
        showPaletteOnly: true,
        showPalette: true,
        color: '#DC3545',
        palette: [
            ['#1D2939', '#fff', '#0866C6', '#23BF08', '#F49917'],
            ['#DC3545', '#17A2B8', '#6610F2', '#fa1e81', '#72e7a6']
        ]
    });

});
        </script>
        <script src="<?php echo e(asset(config('app.asset').'admin/js/ResizeSensor.js')); ?>"></script>
        <script src="<?php echo e(asset(config('app.asset').'admin/js/dashboard.js')); ?>"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.js"></script>

        <script>
<?php if(Session::has('message')): ?>
var type = "<?php echo e(Session::get('alert-type','info')); ?>"
switch (type) {
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

        $(document).on("click", "#delete", function(e){
e.preventDefault();
var link = $(this).attr('href');
const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
})

swalWithBootstrapButtons.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Yes, delete it!',
    cancelButtonText: 'No, cancel!',
    reverseButtons: true
}).then((result) => {
    if (result.value) {
        window.location.href = link;
    } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
            ) {
        swalWithBootstrapButtons.fire(
                'Cancelled',
                'Your imaginary file is safe :)',
                'error'
                )
    }
    }
    )
}
);

        </script>
    </body>
</html>


<?php /**PATH D:\laragon\www\event-booking\resources\views/admin/layouts/master.blade.php ENDPATH**/ ?>