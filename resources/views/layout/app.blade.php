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
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet -->    
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link href="css/estilos.css" rel='stylesheet' type='text/css'>
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

    <div class="col s12 m12 l4 black lighten-1">
        <h4 class="white-text center">Lo mas buscado</h4>
        @for ($i = 0; $i < 8; $i++)
          <div class="col s12 m12 l10 margin-card">
          <div class="card red darken-3">
            <div class="card-image">
              <img src="img/piezas-para-vehículos-dañados.jpg">
            </div>
            <div class="card-content">
              <p>Bujia</p>
            </div>
            <div class="card-action" style="text-align: right;">
              <a class="waves-effect waves-light btn modal-trigger black-text yellow darken-1" href="#modal1">Comprar</a>
            </div>
          </div>
        </div>
        @endfor
    </div>

    </div>

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

            $(".slick-carrusel-lateral").slick({
              dots: false,
              arrows: true,
              infinite: true,
              slidesToShow: 6,
              slidesToScroll: 1,
              rows: 3,
              prevArrow: $('.secundario-prev'),
              nextArrow: $('.secundario-next'),
            });

            $('.card-secundaria').mouseover(function(){
               var arreglo_id = this.id.split('-');
               $('#card-secundaria-accion-'+arreglo_id[2]).show();
            });

            $('.card-secundaria').mouseout(function(){
               var arreglo_id = this.id.split('-');
               $('#card-secundaria-accion-'+arreglo_id[2]).hide();
            });
        });
    </script>
</body>
</html>