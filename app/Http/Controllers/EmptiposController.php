<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Emptipo;

class EmptiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emptipos = Emptipo::orderBy('id', 'ASC')->paginate(5);

        return view('admin.emptipos.index')->with('emptipos', $emptipos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.emptipos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $emptipo = new Emptipo($request->all());
        $emptipo->save();

        return redirect()->route('admin.empleadoTipos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $emptipo = Emptipo::find($id);

        return view('admin.emptipos.edit')->with('emptipo', $emptipo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $emptipo = Emptipo::find($id);
        $emptipo->fill($request->all());
        $emptipo->save();

        return redirect()->route('admin.empleadoTipos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Emptipo::destroy($id);
        return redirect()->route('admin.empleadoTipos.index');
    }
}
