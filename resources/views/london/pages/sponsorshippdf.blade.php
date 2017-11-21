@extends('london.main')
@section('maincontent')
<section class="demo">
        <a href="#"><span></span>Scroll</a>
</section>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g=" crossorigin="anonymous"></script>
<script type="text/javascript">
  $(document.body).scroll(function() {    
      var scroll = $(document.body).scrollTop();
	console.log(scroll);
      if (scroll >= 600) {
          $(".demo").addClass("hide");
      } else {
          $(".demo").removeClass("hide");
      }
  });
</script>
<style>
.demo a {
      position: absolute;
      bottom: 20px;
      left: 50%;
      padding-top: 60px;
      z-index: 2;
      display: inline-block;
      -webkit-transform: translate(0, -50%);
      transform: translate(0, -50%);
      color: #fff;
      font : normal 400 20px/1 'Josefin Sans', sans-serif;
      letter-spacing: .1em;
      text-decoration: none;
      transition: opacity .3s;
    }
    .demo a:hover {
      opacity: .5;
    }
.demo.hide{
  opacity: 0;
  visibility: hidden;
  transition: all 1s;
}

   .demo a span {
      position: absolute;
      top: 0;
      left: 50%;
      width: 30px;
      height: 50px;
      margin-left: -15px;
      border: 2px solid #fff;
      border-radius: 50px;
      box-sizing: border-box;
    }
    .demo a span::before {
      position: absolute;
      top: 10px;
      left: 50%;
      content: '';
      width: 6px;
      height: 6px;
      margin-left: -3px;
      background-color: #fff;
      border-radius: 100%;
      -webkit-animation: sdb10 2s infinite;
      animation: sdb10 2s infinite;
      box-sizing: border-box;
    }
    @-webkit-keyframes sdb10 {
      0% {
        -webkit-transform: translate(0, 0);
        opacity: 0;
      }
      40% {
        opacity: 1;
      }
      80% {
        -webkit-transform: translate(0, 20px);
        opacity: 0;
      }
      100% {
        opacity: 0;
      }
    }
    @keyframes sdb10 {
      0% {
        transform: translate(0, 0);
        opacity: 0;
      }
      40% {
        opacity: 1;
      }
      80% {
        transform: translate(0, 20px);
        opacity: 0;
      }
      100% {
        opacity: 0;
      }
    }
</style>
<p style="margin: 10% auto 15% auto; width: 640px; max-width: 100%">
This browser does not support inline PDFs. Please download the PDF to view it: <a href="http://www.hrn.io/BROCHURES/HRTechWorldLondon2018/HR_Tech_World_2018_London_Sponsorship.pdf">Download PDF</a>
</p>
@endsection

<!doctype html>
<html class="se-pre-con">
<head>
<meta charset="utf-8">
	<meta name="description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH London on 20-21 March 2018.">
 
         <!-- Open Graph data -->
        <meta property="og:site_name" content="UNLEASH - London"/>
        <meta property="og:title" content="UNLEASH - London"/>
        <meta property="og:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH London on 20-21 March 2018."/>
        <meta property="og:url" content="http://www.unleashgroup.io/london">
        <meta property="og:type" content="website"/>
        <meta property="og:image" content="{{ URL::asset('gfx/london/UNLEASH_metashare_london.png') }}" />
        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@hrtechworld">
        <meta name="twitter:creator" content="@hrneurope">
        <meta name="twitter:title" content="UNLEASH - London">
        <meta name="twitter:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH London on 20-21 March 2018." />
        <meta name="twitter:image" content="{{ URL::asset('gfx/london/UNLEASH_metashare_london.png') }}">
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta name="developer" content="Developed by: TesseracT - bottyan.tamas@web-developer.hu | Benedek Nagy - trialshock@gmail.com | Balazs Pentek - myrrdhinn@gmail.com">
<meta name="designer" content="Designed by: Adam Dragus - adam@hrn.io ">
<meta name="author" content="HRN - Human Resources Network | Unleash Your People!">
<meta name="keywords" content="HR Tech, HRN">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<title>UNLEASH 2018 London | Sponsorship Brochure</title>
<!-- Favicon -->
<link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
<link rel="manifest" href="img/favicon/manifest.json">
<meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
	<link rel="stylesheet" type="text/css" href="{{ mix('css/london/pdfs.css') }}">
</head>
<style type="text/css">
    .no-js #loader { display: none;  }
    .js #loader { display: block; position: absolute; left: 100px; top: 0; }
    .se-pre-con {
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background:url({{URL::asset('gfx/london/Preloader_green.gif')}} ) center no-repeat #fff;
    }

    body{
        opacity: 0;
    }
</style>
<body>
<script src='https://www.hrn.io/vendor/pdfobject/pdfobject.js'></script>
<script>
PDFObject.embed("http://www.hrn.io/BROCHURES/HRTechWorldLondon2018/HR_Tech_World_2018_London_Sponsorship.pdf", document.body);
</script>

 <!-- Crazy Egg -->
        <script type="text/javascript">
            setTimeout(function () {
                var a = document.createElement("script");
                var b = document.getElementsByTagName("script")[0];
                a.src = document.location.protocol + "//script.crazyegg.com/pages/scripts/0046/2666.js?" + Math.floor(new Date().getTime() / 3600000);
                a.async = true;
                a.type = "text/javascript";
                b.parentNode.insertBefore(a, b)
            }, 1);
        </script>
        <!-- END Crazy Egg -->
        <script type="text/javascript">
            setTimeout(function() {
                document.getElementsByTagName('body')[0].style.opacity = "1";
                document.getElementsByTagName('html')[0].style.background = "none";
            }, 10000);
        </script>
</body>
</html>
