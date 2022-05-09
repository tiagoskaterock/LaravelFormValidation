<?php define('TITULO', 'Novo Cliente') ?>

@include('includes.header')
  
<main role="main" class="container mt-5">
  
	<form method="post" action="#">



		<div class="form-group">
	    <label for="nome">Nome</label>
	    <input type="text" class="form-control" id="nome" name="nome" aria-describedby="nome" placeholder="Nome completo">
	  </div>


		

	  <div class="form-group">
	    <label for="email">Email</label>
	    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Seu melhor email">
	  </div>






	  <div class="form-group">
	    <label for="endereco">Endereço</label>
	    <input type="text" class="form-control" id="endereco" name="endereco" aria-describedby="Endereço" placeholder="Endereço, rua, número, bairro, apto...">
	  </div>



	  <button type="submit" class="btn btn-primary">Enviar</button>
	  
	</form>
			

</main>

@include('includes.footer')
		