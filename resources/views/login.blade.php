<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login - Modern Design</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('public')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('public')}}/css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fc;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-card {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            padding: 30px;
        }

        .login-card h1 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group input {
            border-radius: 10px;
            border: 1px solid #ddd;
            padding: 15px;
            width: 100%;
            margin-bottom: 15px;
            font-size: 16px;
        }

        .form-group input:focus {
            outline: none;
            border-color: #007bff; /* Blue color */
        }

        .btn-primary {
            background-color: #007bff; /* Blue color */
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            width: 100%;
            border-radius: 10px;
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue */
        }

        .forgot-password {
            text-align: center;
            margin-top: 15px;
        }

        .forgot-password a {
            font-size: 14px;
            color: #007bff; /* Blue color */
            text-decoration: none;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }

        .error-message {
            color: red;
            font-size: 14px;
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <div class="login-card">
            <h1 class="text-center">Welcome Back!</h1>

            <!-- Login Form -->
            <form class="user" method="post" action="{{url('admin/login')}}">
                @csrf

                <!-- Username Field -->
                <div class="form-group">
                    <input type="text" name="username" class="form-control form-control-user" 
                        @if(Cookie::has('adminuser')) value="{{Cookie::get('adminuser')}}" @endif
                        id="username" placeholder="Username" required>
                </div>

                <!-- Password Field -->
                <div class="form-group">
                    <input name="password" type="password" class="form-control form-control-user"
                        @if(Cookie::has('adminpwd')) value="{{Cookie::get('adminpwd')}}" @endif
                        id="exampleInputPassword" placeholder="Password" required>
                </div>

                <!-- Remember Me Checkbox -->
                <div class="form-group">
                    <div class="custom-control custom-checkbox small">
                        <input type="checkbox" @if(Cookie::has('adminuser')) checked @endif name="rememberme"
                            class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                    </div>
                </div>

                <!-- Submit Button -->
                <input type="submit" class="btn btn-primary btn-user btn-block" value="Login" />

            </form>

            <!-- Error messages -->
            @if($errors->any())
                <div class="error-message">
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                </div>
            @endif

            @if(Session::has('msg'))
                <div class="error-message">
                    <p>{{session('msg')}}</p>
                </div>
            @endif

            <!-- Forgot Password -->
            <div class="forgot-password">
                <a href="forgot-password.html">Forgot Password?</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('public')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('public')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('public')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('public')}}/js/sb-admin-2.min.js"></script>

</body>

</html>
