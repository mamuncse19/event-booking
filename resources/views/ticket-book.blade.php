<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Event Booking System</title>
    <link rel="shortcut icon" href="{{URL::to(config('app.asset').'favicon.ico')}}"/>

    <!-- css -->
    <link rel="stylesheet"
        href="{{ asset(config('app.asset') . 'frontend/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset(config('app.asset') . 'frontend/bower_components/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset(config('app.asset') . 'frontend/assets/css/main.css') }}">
</head>

<body data-spy="scroll" data-target="#site-nav">
    <nav id="site-nav" class="navbar navbar-fixed-top navbar-custom"
        style="background-color: black !important; padding-top:0px !important">
        <div class="container">
            <div class="navbar-header">

                <!-- logo -->
                <div class="site-branding">
                    <a class="logo" href="{{ url('/') }}">

                        <!-- logo image  -->
                        <img src="{{ asset(config('app.asset') . 'frontend/assets/images/logo.png') }}" alt="Logo">

                        Conference 2024
                    </a>
                </div>

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-items" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div><!-- /.navbar-header -->

            <div class="collapse navbar-collapse" id="navbar-items">
                <ul class="nav navbar-nav navbar-right">

                    <!-- navigation menu -->
                    <li class="active"><a href="{{ url('/') }}#about">About</a></li>
                    <li><a href="{{ url('/') }}#schedule">Schedule</a></li>
                    <li><a href="{{ url('/') }}#partner">Partner</a></li>
                    <li><a href="{{ route('ticket.create') }}">Book Ticket</a></li>

                </ul>
            </div>
        </div><!-- /.container -->
    </nav>

    <section id="registration" class="section registration">
        <div class="container">
            <div class="row">
                @if ($errors->has('error'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="col-md-12">
                    <h3 class="section-title">Registration</h3>
                </div>
            </div>

            <form action="{{ route('book.seat') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-12" id="registration-msg" style="display:none;">
                        <div class="alert"></div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" value="{{old('name')}}" class="form-control" placeholder="Enter your full name" name="name"
                                required>
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>

                        <div class="form-group">
                            <input type="email" value="{{old('email')}}" class="form-control" placeholder="Enter your E-mail" name="email"
                                required>
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>

                        <div class="form-group">
                            <input type="text" value="{{old('phone_no')}}" class="form-control" placeholder="Enter your phone number"
                                name="phone_no" required>
                            <span class="text-danger">{{ $errors->first('phone_no') }}</span>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" value="{{old('address')}}" class="form-control" placeholder="Enter your address" name="address"
                                required>
                            <span class="text-danger">{{ $errors->first('address') }}</span>
                        </div>

                        <div class="form-group">
                            <input type="number" value="{{old('seats_booked')}}" class="form-control" placeholder="Enter number of seats"
                                name="seats_booked" required>
                            <span class="text-danger">{{ $errors->first('seats_booked') }}</span>
                        </div>

                        <div class="form-group">
                            <select class="form-control" name="event_id" required>
                                <option value="0">Select Event</option>
                                @foreach ($eventInfo as $event)
                                    <option value="{{ $event->id }}" {{ old('event_id') == $event->id ? 'selected' : '' }}>{{ $event->name }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('event_id') }}</span>
                        </div>
                    </div>
                </div>
                <div class="text-center mt20">
                    <button type="submit" class="btn btn-black" id="registration-submit-btn">Book Ticket</button>
                </div>
            </form>
        </div>
    </section>
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="site-info">&copy; {{ date('Y') }} Mamun Hossain. All Rights Reserved</p>

                </div>
            </div>
        </div>
    </footer>

    <!-- script -->
    <script src="{{ asset(config('app.asset') . 'frontend/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset(config('app.asset') . 'frontend/bower_components/bootstrap/dist/js/bootstrap.min.js') }}">
    </script>
    <script
        src="{{ asset(config('app.asset') . 'frontend/bower_components/smooth-scroll/dist/js/smooth-scroll.min.js') }}">
    </script>
    <script src="{{ asset(config('app.asset') . 'frontend/assets/js/main.js') }}"></script>
</body>

</html>
