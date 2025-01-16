<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>Restaurant Management System</title>
    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/')}}backend/vendors/images/apple-touch-icon.png" />
    <link rel="icon" href="{{asset('/')}}images/favicon.png" type="image/x-icon">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}backend/vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}backend/vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}backend/vendors/styles/style.css" />
    <link rel="icon" href="{{asset('/')}}images/favicon.png" type="image/x-icon">
</head>

<body class="login-page">
    <div class="login-header box-shadow">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <a href="{{url('/')}}" title=""><img src="{{asset('/')}}images/logo.png" class="ml-4" width="180px" alt="" title=""></a>
        </div>
    </div>
    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="{{asset('/')}}backend/vendors/images/login-page-img.png" alt="" />
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center" style="color:#038fca;">Login To Dashboard</h2>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="input-group custom">
                                <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Username" required autocomplete="email" autofocus />
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                </div>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="input-group custom">
                                <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="**********" />
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                </div>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group mb-0">
                                        <button type="submit" class="btn btn-lg btn-block " style=" background-color:#038fca;">
                                            Sign In
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(Session::has('message'))
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
            icon: "success",
            title: "{{Session::get('message')}}",
        });
    </script>
    @endif

</body>

</html>