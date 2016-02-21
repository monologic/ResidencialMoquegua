<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\habtipo;

class ThabitacionController extends Controller
{
    
    public function index()
    {
    	$habtipos = habtipo::orderBy('id', 'ASC')->paginate(5);

        return view('admin.habtipos.index')->with('habtipos', $habtipos);

    }
    public function create()
    {
    	return view('admin.habtipos.create');
    }
    public function store(Request $request)
    {
    	if($request->file('foto'))
    	{
    		$file = $request -> file('foto');
	    	$name = 'foto_'. time() . '.' .$file->getClientOriginalExtension();
	    	$path=public_path() . "/imagen/habtipo/";
	    	$file -> move($path,$name);
    	}
    	$habtipo = new habtipo($request->all());
    	$habtipo->foto = $name;
    	$habtipo->save();
    	return redirect()->route('admin.habtipos.index');
    }

    public function destroy($id)
    {
        habtipo::destroy($id);
        return redirect()->route('admin.habtipos.index');
    }

    public function edit($id)
    {
        $habtipo = habtipo::find($id);

        return view('admin.habtipos.edit')->with('habtipo', $habtipo);
    }

    public function update(Request $request, $id)
    {

        $habtipo = habtipo::find($id);

        $habtipo->fill($request->all());

        if($request->file('foto'))
        {
            $file = $request -> file('foto');
            $name = 'foto_'.time() . '.' .$file->getClientOriginalExtension();
            $path=public_path() . "/imagen/habtipo/";
            $file -> move($path,$name);

            $habtipo->foto = $name;
        }

        
        
        
        $habtipo->save();

        return redirect()->route('admin.habtipos.index');
        
    }


}
