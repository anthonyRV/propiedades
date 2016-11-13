<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bienvenido | Curso Laravel</title>
    <link rel="stylesheet" href="{{URL::asset('assets/css/foundation.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('assets/css/footer.css')}}"/>
     <link rel="stylesheet" href="{{URL::asset('assets/css/header.css')}}"/>
    <script type="text/javascript" src="{{URL::asset('assets/js/vendor/modernizr.js')}}"></script>
</head>
<body>

    <header class="header">
  <h1 class="headline">Venta de Bienes Raices </h1>
  <ul class="header-subnav">
    <li><a href="#">Contact</a></li>
    <li><a href="#" class="is-active">Entrar</a></li>
    <li><a target="_blank" href="http://zurb.com/responsive">Propiedades</a></li>
  </ul>
</header>

    
@yield('content')

    
<footer class="footer">
  <div class="row">
    <div class="small-12 medium-6 large-5 columns">
      <p class="logo"><i class="fi-shield"></i> STARWARS</p> 
      <p class="footer-links">
        <a href="#">Home</a>
        <a href="#">Blog</a>
        <a href="#">Pricing</a>
        <a href="#">About</a>
        <a href="#">Faq</a>
        <a href="#">Contact</a>
      </p>
      <p class="copywrite">Copywrite not copywrite © 2015</p>
    </div>
    <div class="small-12 medium-6 large-4 columns">
      <ul class="contact">
        <li><p><i class="fi-marker"></i>1595 Spring Street New Britain, CT 06051</p></li>
        <li><p><i class="fi-telephone"></i>+1-656-453-9966</p></li>
        <li><p><i class="fi-mail"></i>contact@emperor.com</p></li>
      </ul>
    </div>
    <div class="small-12 medium-12 large-3 columns">
      <p class="about">About Star Wars</p>
      <p class="about subheader">Strike me down, and I will become more powerful than you could possibly imagine.</p>
      <ul class="inline-list social">
        <a href="#"><i class="fi-social-facebook"></i></a>
        <a href="#"><i class="fi-social-twitter"></i></a>
        <a href="#"><i class="fi-social-linkedin"></i></a>
        <a href="#"><i class="fi-social-github"></i></a>
      </ul>
    </div>
  </div>
    </footer>
    
<script type="text/javascript" src="{{URL::asset('assets/js/vendor/jquery.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/foundation.min.js')}}"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>