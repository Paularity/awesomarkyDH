<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Awesomarky Doctor Hospital</title>
    <style>
    /* Paste this css to your style sheet file or under head tag */
    /* This only works with JavaScript,
    if it's not present, don't show loader */
    .no-js #loader { display: none;  }
    .js #loader { display: block; position: absolute; left: 100px; top: 0; }
    .se-pre-con {
    	position: fixed;
    	left: 0px;
    	top: 0px;
    	width: 100%;
    	height: 100%;
    	z-index: 9999;
    	background: url(images/preloader.gif) center no-repeat #fff;
    }

    </style>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <script>
      //paste this code under head tag or in a seperate js file.
      // Wait for window load
      $(window).on('load',function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
      });
    </script>
</head>
<body>
<div class="se-pre-con"></div>

@include('inc.navbar')

@yield('content')

<div class="footer">
  <h6 style="float:left;margin:1% 1% 1% 1%">FOLLOW US:&nbsp;&nbsp;<span><i class="fa fa-facebook-square" aria-hidden="true"></i></span>
  <span><i class="fa fa-twitter-square" aria-hidden="true"></i></span> </h6>
  <p style="float:right;margin:1% 1% 1% 1%">Powered by CP33</p>
</div>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.bundle.min.js"></script>
</html>
