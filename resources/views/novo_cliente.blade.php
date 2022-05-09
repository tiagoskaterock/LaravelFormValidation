<?php define('TITULO', 'Novo Cliente') ?>

@include('includes.header')
  
<main role="main" class="container mt-5">

	<a href="{{ route('inicio') }}" class="btn btn-primary mb-3">Voltar</a>
  
	<form method="post" action="{{ route('armazena_novo_cliente') }}">

		@csrf


		<div class="form-group">
	    <label for="nome">Nome</label>
	    <input type="text" class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}" id="nome" name="nome" aria-describedby="nome" placeholder="Nome completo" value="{{ old('nome') }}">
	    @if($errors->has('nome'))
	    	<div class="invalid-feedback">
	    		{{ $errors->first('nome') }}
	    	</div>
	    @endif
	  </div>


		

	  <div class="form-group">
	    <label for="email">Email</label>
	    <input type="text" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" name="email" aria-describedby="emailHelp" placeholder="Seu melhor email" value="{{ old('email') }}">

	    @if($errors->has('email'))
	    	<div class="invalid-feedback">
	    		{{ $errors->first('email') }}
	    	</div>
	    @endif
	  </div>






	  <div class="form-group">
	    <label for="endereco">Endereço</label>
	    <input type="text" class="form-control {{ $errors->has('endereco') ? 'is-invalid' : '' }}" id="endereco" name="endereco" aria-describedby="Endereço" placeholder="Endereço, rua, número, bairro, apto..." value="{{ old('endereco') }}">

	    @if($errors->has('endereco'))
	    	<div class="invalid-feedback">
	    		{{ $errors->first('endereco') }}
	    	</div>
	    @endif
	  </div>



	  <button type="submit" class="btn btn-primary">Enviar</button>


	  	

	  
	  @if(count($errors) > 0)

		  <div class="mt-3">

		  	@foreach($errors->all() as $error)
			  	<div class="alert alert-warning alert-dismissible fade show" role="alert">
					  <strong>{{ $error }}</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>

		  	@endforeach

		  </div>

	  @endif

	</form>
			

</main>

@include('includes.footer')
		