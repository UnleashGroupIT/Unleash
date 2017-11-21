@extends('lasvegas.main')
@section('maincontent')
<p style="margin: 10% auto 15% auto; width: 640px">
This browser does not support inline PDFs. Please download the PDF to view it: <a href="http://www.hrn.io/BROCHURES/HRTechWorldLasVegas2018/HR_Tech_World_2018_LasVegas_Sponsorship.pdf">Download PDF</a>
</p>
@endsection

<!doctype html>
<html class="se-pre-con">
<head>
<meta charset="utf-8">
<meta name="description" content="HRN">
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta name="developer" content="Developed by: TesseracT - bottyan.tamas@web-developer.hu | Benedek Nagy - trialshock@gmail.com | Balazs Pentek - myrrdhinn@gmail.com">
<meta name="designer" content="Designed by: Adam Dragus - adam@hrn.io ">
<meta name="author" content="HRN - Human Resources Network | Unleash Your People!">
<meta name="keywords" content="HR Tech, HRN">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<title>UNLEASH America 2018| Sponsorship Brochure</title>
	<meta name="description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH America on 15-16 May 2018.">
 
         <!-- Open Graph data -->
        <meta property="og:site_name" content="UNLEASH - America"/>
        <meta property="og:title" content="UNLEASH - America"/>
        <meta property="og:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH America on 15-16 May 2018."/>
        <meta property="og:url" content="http://www.unleashgroup.io/america">
        <meta property="og:type" content="website"/>
        <meta property="og:image" content="{{ URL::asset('gfx/lasvegas/UNLEASH_metashare_america.png') }}" />
        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@hrtechworld">
        <meta name="twitter:creator" content="@hrneurope">
        <meta name="twitter:title" content="UNLEASH - America">
        <meta name="twitter:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH America on 15-16 May 2018." />
        <meta name="twitter:image" content="{{ URL::asset('gfx/lasvegas/UNLEASH_metashare_america.png') }}"><!-- Favicon -->
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
	<link rel="stylesheet" type="text/css" href="{{ mix('css/lasvegas/pdfs.css') }}">
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
        background:url({{URL::asset('gfx/lasvegas/Preloader_red.gif')}} ) center no-repeat #fff;
    }
    body{
        opacity: 0;
    }
</style>
<body>
<script src='https://www.hrn.io/vendor/pdfobject/pdfobject.js'></script>
<script>
PDFObject.embed("http://www.hrn.io/BROCHURES/HRTechWorldLasVegas2018/HR_Tech_World_2018_LasVegas_Sponsorship.pdf", document.body);
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
