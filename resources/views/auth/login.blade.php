<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}"/>

        <title>Admin Login</title>

        <!-- vendor css -->
        <link href="{{asset(config('app.asset').'admin/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
        <link href="{{asset(config('app.asset').'admin/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">


        <!-- Starlight CSS -->
        <link rel="stylesheet" href="{{asset(config('app.asset').'admin/css/starlight.css')}}">
        <link rel="stylesheet" href="{{asset(config('app.asset').'admin/css/custom.css')}}">
        <!-- toastr CSS cdn-->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.css">
    </head>

    <body>



        <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

            <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
                <div class="signin-logo tx-center tx-24 tx-bold tx-inverse"><span class="tx-info tx-normal">Admin</span> Login</div>
                <div class="tx-center mg-b-40"></div>
                <form method="post" action="{{url('login')}}">
                @csrf
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Enter your email" autocomplete="off">
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Enter your password" autocomplete="off">
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                </div>
                <button type="submit" class="btn btn-info btn-block cursor-pointer">Login</button>

                <div class="mg-t-10">Haven't got an account yet? <a href="{{ url('register') }}" class="tx-info">Create Account</a></div>
                </form>
            </div>
        </div>



        <script src="{{asset(config('app.asset').'admin/lib/jquery/jquery.js')}}"></script>
        <script src="{{asset(config('app.asset').'admin/lib/popper.js/popper.js')}}"></script>
        <script src="{{asset(config('app.asset').'admin/lib/bootstrap/bootstrap.js')}}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.js"></script>
        <script>
@if (Session::has('message'))
var type = "{{ Session::get('alert-type','info') }}";
switch (type){
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

    </body>
</html>

