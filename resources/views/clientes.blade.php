<?php define('TITULO', 'Clientes') ?>

@include('includes.header')
  
<div class="container mt-5">

	<a href="{{ route('novo_cliente') }}" class="btn btn-primary mb-3">Adicionar</a>

	{{ $clientes->links() }}

  <div class="table-responsive">
    <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
  
      <thead class="bg-dark">
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Email</th>
          <th>Endereço</th>
        </tr>
      </thead>
  
      <tbody>
  			@foreach($clientes as $cliente)
	        <tr>
	          <td>{{ $cliente->id }}</td>
	          <td>{{ $cliente->nome }}</td>
	          <td>{{ $cliente->email }}</td>
	          <td>{{ $cliente->endereco }}</td>
	        </tr>  			
  			@endforeach
  
      </tbody>
  
    </table>
  
  </div>
  		
</div>

@include('includes.footer')

		