<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>QBM: Gestion Des Matériels</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  
  <link href="img/home.ico" rel="icon">
  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="pub/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="pub/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="pub/lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="pub/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Regna
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
      
      <a href="{{url('welcome')}}"><img src="pub/img/Home.png" height="75px" width="220px" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
        @if (Route::has('login'))
         @if (Auth::check())
          <li class="menu-active"><a href="{{ url('/home') }}">Home</a></li>
          @else
          <li><a href="{{ url('/register') }}">S'inscrire</a></li>
          <li><a href="{{ url('/login') }}">Se Connecter</a></li>
         @endif
        @endif 
          
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <h1>Quality Bean Morocco</h1>
      <h2>Gestion D'attribution De Matériels</h2>
      <a href="{{ url('/login') }}" class="btn-get-started">Commencer</a>
    </div>
  </section><!-- #hero -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    </body>
    </html>