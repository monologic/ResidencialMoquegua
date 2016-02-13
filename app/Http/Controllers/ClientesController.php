<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cliente;

class ClientesController extends Controller
{
    public function index()
    {
        $clientes = Cliente::orderBy('id', 'ASC')->paginate(5);

        return view('admin.clientes.index')->with('clientes', $clientes);
    }

    public function create()
    {
    	return view('admin.clientes.create');

    }

    public function store(Request $request)
    {
    	$cliente = new Cliente($request->all());
    	$cliente->save();

        return redirect()->route('admin.clientes.index');
    }

    public function destroy($id)
    {
        Cliente::destroy($id);
        return redirect()->route('admin.clientes.index');
    }

    public function edit($id)
    {
        $cliente = Cliente::find($id);

        return view('admin.clientes.edit')->with('cliente', $cliente);
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        $cliente->fill($request->all());
        $cliente->save();

        return redirect()->route('admin.clientes.index');
    }
}
