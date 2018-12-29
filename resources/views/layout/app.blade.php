<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Repuestos JR</title>

<!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Carousel Slick CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" rel="stylesheet" />
    
    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet -->    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
            .fa-btn {
                margin-right: 6px;
            }
            .margin-card {
                margin-top: 20px
            }
            h4 {
                text-shadow: 2px 2px #ab47bc;
            }

            body {
              background-color: gainsboro;
              font-family: "Open Sans", sans-serif;
              padding: 0px 0px;
              font-size: 18px;
              margin: 0;
              color: #444;
            }

            h1 {
              font-family: "Merriweather", serif;
              font-size: 32px;
            }

            .texto-menu {
              margin-left: 40px;
              font-weight: bold;
              margin-right: 40px;
              font-size: 21px;
            }

            .sidenav {
              background-color: gainsboro;
            }

            .titulos-medios {
              padding: 5px;
            }

            .texto-tarjeta {
              font-size: 16px;
            }

            .trans--grow{
              -webkit-transition: width 1s ease-out; /* For Safari 3.1 to 6.0 */
              transition: width 1s  ease-out;
              width : 0%;
            }

            .grow{
              width:100%;
            }

            .principal-prev{
                  float: left;
                  left: 0px;
                  top: 170px;
                  z-index: 10;
                  position: absolute;
            }

            .principal-next{
                  float: left;
                  left: 95%;
                  top: 170px;
                  z-index: 10;
                  position: absolute;
            }

            .secundario-prev{
                  float: left;
                  left: 6%;
                  top: 43%;
                  z-index: 20;
                  position: absolute;
            }

            .secundario-next{
                  float: left;
                  left: 90%;
                  top: 43%;
                  z-index: 10;
                  position: absolute;
            }

            .carrusel-principal{
                  width: 100%;
                  float: left; 
            }

            .carrusel-secundario{
                  width: 80%;
                  left: 10%;
                  float: left; 
            }


            .contenedor-carrusel-principal{
                  width: 100%;
                  float: left;
                  position: relative;
            }
            .contenedor-carrusel-secundario{
                  width: 100%;
                  float: left;
                  position: relative;
            }

    </style>
</head>
<body id="app-layout">
    <header>
       Encabezado  
    </header>
        <!-- Navbar goes here -->
    <nav>
        <div class="nav-wrapper black">
            <a href="#" class="brand-logo right">Logo</a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="sass.html">Sass</a></li>
                <li><a href="badges.html">Components</a></li>
                <li><a href="collapsible.html">JavaScript</a></li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

    <script type="text/javascript"> 
        $(document).ready(function() {
            $(".slick-carrusel-principal").slick({
              dots: false,
              arrows: true,
              infinite: true,
              slidesToShow: 3,
              slidesToScroll: 1,
              prevArrow: $('.principal-prev'),
              nextArrow: $('.principal-next'),
            });

            $(".slick-carrusel-secundario").slick({
              dots: false,
              arrows: true,
              infinite: true,
              slidesToShow: 6,
              slidesToScroll: 1,
              rows: 2,
              prevArrow: $('.secundario-prev'),
              nextArrow: $('.secundario-next'),
            });
        });
    </script>
</body>
</html>