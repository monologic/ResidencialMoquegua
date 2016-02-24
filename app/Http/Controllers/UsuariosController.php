<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Usuario;
use App\Empleado;
use Illuminate\Contracts\Encryption\DecryptException;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::orderBy('id', 'ASC')->paginate(5);
        $usuarios->each(function($usuarios){
            $usuarios->empleado;
        });

        return view('admin.usuarios.index')->with('usuarios', $usuarios);
    }

    public function create()
    {
    	$empleados = Empleado::orderBy('nombres', 'ASC')->lists('nombres','id'); 
        return view('admin.usuarios.create')->with('empleados', $empleados);
    }

    public function store(Request $request)
    {
    	$usuario = new Usuario($request->all());
        $usuario ->password = bcrypt($request->password);
        $usuario->save();
        
        return redirect()->route('admin.usuarios.index');
    }

    public function destroy($id)
    {
        Usuario::destroy($id);
        return redirect()->route('admin.usuarios.index');
    }

    public function edit($id)
    {
        $usuario = Usuario::find($id);
      

        $usuario->empleado;

        $empleados = Empleado::orderBy('nombres', 'ASC')->lists('nombres','id');

        return view('admin.usuarios.edit')
                ->with('usuario', $usuario)
                ->with('empleados', $empleados);
    
    }

    public function update(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        $usuario->fill($request->all());
        $usuario ->password = bcrypt($request->password);

        
        $usuario->save();

        return redirect()->route('admin.usuarios.index');
    }
}
