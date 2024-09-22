<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}"/>
        <title>@yield('title')</title>
        <link rel="shortcut icon" href="{{URL::to(config('app.asset').'favicon.ico')}}"/>
        <!-- vendor css -->
        <link href="{{asset(config('app.asset').'admin/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
        <link href="{{asset(config('app.asset').'admin/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
        <link href="{{asset(config('app.asset').'admin/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
        <link href="{{asset(config('app.asset').'admin/lib/rickshaw/rickshaw.min.css')}}" rel="stylesheet">
        <link href="{{asset(config('app.asset').'admin/lib/highlightjs/github.css')}}" rel="stylesheet">
        <link href="{{asset(config('app.asset').'admin/lib/datatables/jquery.dataTables.css')}}" rel="stylesheet">
        <link href="{{asset(config('app.asset').'admin/lib/select2/css/select2.min.css')}}" rel="stylesheet">
        <link href="{{asset(config('app.asset').'admin/lib/spectrum/spectrum.css')}}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.css">
        <!-- Starlight CSS -->
        <link rel="stylesheet" href="{{asset(config('app.asset').'admin/css/starlight.css')}}">
        <link rel="stylesheet" href="{{asset(config('app.asset').'admin/css/custom.css')}}">
        <script src="{{asset(config('app.asset').'admin/lib/jquery/jquery.js')}}"></script>
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
        @include('admin.layouts.sidebar')
        <!-- ########## END: LEFT PANEL ########## -->

        <!-- ########## START: HEAD PANEL ########## -->
        @include('admin.layouts.header')
        <!-- ########## END: HEAD PANEL ########## -->

        <!-- ########## START: MAIN PANEL ########## -->
        <div class="sl-mainpanel">
            @yield('head-nav')
            <div class="sl-pagebody">
                @yield('MainContent')
            </div>
        </div>

        <!-- ########## END: MAIN PANEL ########## -->

        <!--Footer Area-->
        @include('admin.layouts.footer')
        <!--End Footer Area-->


        <script src="{{asset(config('app.asset').'admin/lib/popper.js/popper.js')}}"></script>
        <script src="{{asset(config('app.asset').'admin/lib/bootstrap/bootstrap.js')}}"></script>
        <script src="{{asset(config('app.asset').'admin/lib/jquery-ui/jquery-ui.js')}}"></script>
        <script src="{{asset(config('app.asset').'admin/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
        <script src="{{asset(config('app.asset').'admin/lib/highlightjs/highlight.pack.js')}}"></script>
        <script src="{{asset(config('app.asset').'admin/lib/datatables/jquery.dataTables.js')}}"></script>
        <script src="{{asset(config('app.asset').'admin/lib/datatables-responsive/dataTables.responsive.js')}}"></script>
        <script src="{{asset(config('app.asset').'admin/lib/select2/js/select2.min.js')}}"></script>
        <script src="{{asset(config('app.asset').'admin/lib/spectrum/spectrum.js')}}"></script>
        <script src="{{asset(config('app.asset').'admin/lib/jquery.sparkline.bower/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset(config('app.asset').'admin/lib/d3/d3.js')}}"></script>
        <script src="{{asset(config('app.asset').'admin/lib/rickshaw/rickshaw.min.js')}}"></script>
        <script src="{{asset(config('app.asset').'admin/lib/chart.js/Chart.js')}}"></script>
        <script src="{{asset(config('app.asset').'admin/lib/Flot/jquery.flot.js')}}"></script>
        <script src="{{asset(config('app.asset').'admin/lib/Flot/jquery.flot.pie.js')}}"></script>
        <script src="{{asset(config('app.asset').'admin/lib/Flot/jquery.flot.resize.js')}}"></script>
        <script src="{{asset(config('app.asset').'admin/lib/flot-spline/jquery.flot.spline.js')}}"></script>
        <script src="{{asset(config('app.asset').'admin/js/starlight.js')}}"></script>
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
        <script src="{{asset(config('app.asset').'admin/js/ResizeSensor.js')}}"></script>
        <script src="{{asset(config('app.asset').'admin/js/dashboard.js')}}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.js"></script>

        <script>
@if (Session::has('message'))
var type = "{{ Session::get('alert-type','info') }}"
switch (type) {
    case 'info':
        toastr.info("{{ Session::get('message') }}");
        break;
    case 'success':
        toastr.success("{{ Session::get('message') }}");
        break;
    case 'warning':
        toastr.warning("{{ Session::get('message') }}");
        break;
    case 'error':
        toastr.error("{{ Session::get('message') }}");
        break;
}
@endif

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


