<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteControlador extends Controller
{





    public function index()
    {
        $clientes = Cliente::paginate(100);
        return view('clientes', compact('clientes'));
    }







    public function create()
    {
        return view('novo_cliente');
    }







    public function store(Request $request)
    {
        $cliente = new Cliente();

        $cliente->nome = $request['nome'];
        $cliente->email = $request['email'];
        $cliente->endereco = $request['endereco'];

        $cliente->save();

        return redirect(route('inicio'));
    }







    public function show($id)
    {
        //
    }







    public function edit($id)
    {
        //
    }







    public function update(Request $request, $id)
    {
        //
    }






    public function destroy($id)
    {
        //
    }
}
