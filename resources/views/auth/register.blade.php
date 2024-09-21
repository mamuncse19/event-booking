<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Meta -->
        <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
        <meta name="author" content="ThemePixels"><!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>User Registration</title>

        <!-- vendor css -->
        <link href="{{ asset(config('app.asset').'admin/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
        <link href="{{ asset(config('app.asset').'admin/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
        <link href="{{ asset(config('app.asset').'admin/lib/select2/css/select2.min.css') }}" rel="stylesheet">


        <!-- Starlight CSS -->
        <link rel="stylesheet" href="{{ asset(config('app.asset').'admin/css/starlight.css') }}">
        <link rel="stylesheet" href="{{ asset(config('app.asset').'admin/css/custom.css') }}">
    </head>

    <body>

        <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-md-100v">

            <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white">
                <div class="signin-logo tx-center tx-24 tx-bold tx-inverse mg-b-10">User<span class="tx-info tx-normal"> Registration</span></div>
                <form action="{{url('register')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" id="" class="form-control" placeholder="Enter your full name" autocomplete="off">
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>
                <div class="form-group">
                    <input type="email" name="email" id="" class="form-control" placeholder="Enter your email" autocomplete="off">
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="" class="form-control" placeholder="Enter password" autocomplete="off">
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                </div>
                <div class="form-group">
                    <input type="password" name="password_confirmation" id="" class="form-control" placeholder="Enter confirm password" autocomplete="off">
                    <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                </div>
                <button type="submit" class="btn btn-info btn-block cursor-pointer">Register</button>
            </form>
                <div class="mg-t-10 tx-center">Already have an account? <a href="{{route('login')}}" class="tx-info">Login</a></div>
            </div>
        </div>

        <script src="{{ asset(config('app.asset').'admin/lib/jquery/jquery.js') }}"></script>
        <script src="{{ asset(config('app.asset').'admin/lib/popper.js/popper.js') }}"></script>
        <script src="{{ asset(config('app.asset').'admin/lib/bootstrap/bootstrap.js') }}"></script>
        <script src="{{ asset(config('app.asset').'admin/lib/select2/js/select2.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.js"></script>
        <script>
@if (Session::has('message'))
var type = "{{ Session::get('alert-type','info') }}";
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
        </script>
        <script>
                    $(function () {
                    'use strict';
                    $('.select2').select2({
                    minimumResultsForSearch: Infinity
                    });
                    }
                    );
        </script>

    </body>
</html>
