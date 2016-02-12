<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cliente;

class ClientesController extends Controller
{
    public function create()
    {
    	return view('admin.clientes.create');
    }

    public function store(Request $request)
    {
    	dd($request->all());
    	$cliente=new cliente($request->all());
    	//$cliente->save();
    	dd('Usuario creado');

    }
}
