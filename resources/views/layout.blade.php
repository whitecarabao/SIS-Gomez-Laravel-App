<!DOCTYPE html>
<html>

<head>
    <title>GomezLabs Laravel Project</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap-daryll.css') }}">
    <style type="text/css">


        .navbar {
            background-color: #5cb85c;
        }

        .navbar-brand {
            color: #ffffff;
        }

        body {
            margin: 0;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #222222;
            text-align: left;
            background-color: #f5f8fa;
        }

        img {
            width: 20px;
            height: 20px;
        }

        .navbar-laravel {
            box-shadow: 0 2px 4px rgba(0, 0, 0, .04);
            color: #ffffff;
        }

        .card-header {
            background-color: #5cb85c;
            color: #ffffff;
        }


        .navbar-brand,
        .nav-link,
        .my-form,
        .login-form {
            font-family: Plus Jakarta Sans, sans-serif;

        }

        .my-form {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .my-form .row {
            margin-left: 0;
            margin-right: 0;
        }

        .login-form {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .login-form .row {
            margin-left: 0;
            margin-right: 0;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="#">Gomez Laravel-Bootstrap UI Package</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    @guest
                    <!-- //this section only displays if public -daryll -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Destroy Session (DARYLL-DEBUG)</a>
                    </li>
                    @else
                    <!-- //this section only displays if logged in -daryll-->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    </li>
                    @endguest
                </ul>

            </div>
        </div>
    </nav>

    @yield('content')

</body>
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2022 Copyright: Written by Daryll Arienza Gomez
  <address>
    Gomez Dynamics and Data Engineering Corporation, Pty Ltd<br>
    <strong>A GOMEZ GROUP OF COMPANIES and SingTel Joint Venture Corporation</strong><br>
    <i>"Connecting the Philippine Spirit"</i><br>
    <br><br>
    <abbr title:"">GoWave Very-Long-Distance Communications Satellite Array Park and Research Complex<br>
    <abbr title="Address">Km. 1 National Highway, Surigao City<br>
    <abbr title="">Surigao Del Norte, 8400<br>
    <abbr title="Phone">P:</abbr> +63 86 231-6067<br>
    <abbr title="Email">E:</abbr> daryll@gomezengineering.com<a href="mailto:daryll@gomezengineering.com"><br>
  </address>
</div>
  
  <!-- Copyright -->

</footer>
<!-- Footer -->
</html>