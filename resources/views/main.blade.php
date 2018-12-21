@extends('layout.app')
@section('content')
<!-- Page Layout here -->
    <div class="row">

      <div class="col s12 m12 l9 center">
        <!-- Grey navigation panel -->
        <!-- <div class="container">-->
		  	<h3 class="card red darken-3 white-text center">Lo mas vendido</h3>
		  	<div align="center">
		  	<div class="slick-carrusel" style="width: 90%" align="center">
		    		@for ($i = 0; $i < 8; $i++)
				        <div class="card">
				        	<div>
						        <h3>Bujia</h3>
						        <h5>Detalle</h5>
					    	</div>
					    	<div>
					    		<img src="img/piezas-para-vehículos-dañados.jpg">
					    	</div>
				    	</div>
					@endfor
			</div>
		</div>
		<!-- </div> -->
      </div>

      <div class="col s12 m12 l3 black lighten-1">
      		<h4 class="white-text center">Lo mas buscado</h4>
      		@for ($i = 0; $i < 3; $i++)
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
@endsection