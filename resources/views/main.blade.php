@extends('layout.app')
@section('content')
<!-- Page Layout here -->
    <div class="row">

	  
      <div class="col s12 m12 l8">
        <!-- Grey navigation panel -->
		<h3 class="card red darken-3 white-text center">Lo mas vendido</h3>
		<div class="contenedor-carrusel-principal">	
			<a class="principal-prev btn red darken-3"><i class="large material-icons">keyboard_arrow_left</i></a>
		  	<div class="slick-carrusel-principal carrusel-principal">
		    		@for ($i = 0; $i < 8; $i++)
				        <div class="card center">
				        	<div class="card-image">
				              <img src="img/piezas-para-vehículos-dañados.jpg">
				            </div>
				            <div class="card-content">
				              <p>Bujia</p>
				              <p>Detalle</p>
				            </div>
				            <div class="card-action" style="text-align: right;">
				              <a class="waves-effect waves-light btn modal-trigger black-text yellow darken-1" href="#modal1">Comprar</a>
				            </div>
				    	</div>
					@endfor
			</div>
			<a class="principal-next btn red darken-3"><i class="large material-icons">keyboard_arrow_right</i></a>
	  	</div>
	  	<div class="contenedor-carrusel-secundario">	
			<a class="secundario-prev btn-floating btn-large waves-effect red darken-3"><i class="large material-icons">keyboard_arrow_left</i></a>
		  	<div class="slick-carrusel-secundario carrusel-secundario">
		    		@for ($i = 0; $i < 20; $i++)
				        <div class="card center card-secundaria" id="card-secundaria-{{$i}}" style="height: 180px">
				        	<div class="card-image">
				              <img src="img/piezas-para-vehículos-dañados.jpg">
				            </div>
				            <div class="card-content">
				              Bujia
				              <a class="card-secundaria-accion waves-effect waves-light modal-trigger" id="card-secundaria-accion-{{$i}}" href="#modal1">
				              	<i class="small material-icons">
								add_shopping_cart
								</i>
							  </a>
				            </div>
				    	</div>
					@endfor
			</div>
			<a class="secundario-next btn-floating btn-large waves-effect red darken-3"><i class="large material-icons">keyboard_arrow_right</i></a>
	  	</div>
      </div>
@endsection