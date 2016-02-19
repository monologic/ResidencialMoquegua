<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Servicio;

class ServiciosController extends Controller
{
    public function index()
    {
        $servicios = Servicio::orderBy('id', 'ASC')->paginate(5);

        return view('admin.servicios.index')->with('servicios', $servicios);
    }

    public function create()
    {
    	return view('admin.servicios.create');

    }

    public function store(Request $request)
    {
    	$servicio = new Servicio($request->all());
    	$servicio->save();

        return redirect()->route('admin.servicios.index');
    }

    public function destroy($id)
    {
        Servicio::destroy($id);
        return redirect()->route('admin.servicios.index');
    }

    public function edit($id)
    {
        $servicio = Servicio::find($id);

        return view('admin.servicios.edit')->with('servicio', $servicio);
    }

    public function update(Request $request, $id)
    {
        $servicio = Servicio::find($id);
        $servicio->fill($request->all());
        $servicio->save();

        return redirect()->route('admin.servicios.index');
    }
}
