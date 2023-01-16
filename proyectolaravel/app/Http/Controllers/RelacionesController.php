<?php

namespace App\Http\Controllers;

use App\Models\relaciones;
use Illuminate\Http\Request;

class RelacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['relacionmenus'] = relaciones::paginate(5);
        //var_dump($datos['usuarios']);
        return view('relacionmenus.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('relacionmenus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosrelacionmenu = request()->except('_token');
        relaciones::insert($datosrelacionmenu);
        return redirect('relacion')->with('mensaje', 'Registro Ingresado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\relaciones  $relaciones
     * @return \Illuminate\Http\Response
     */
    public function show(relaciones $relaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\relaciones  $relaciones
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $relacionmenus = relaciones::findOrFail($id);
        return view('relacionmenus.edit', compact('relacionmenus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\relaciones  $relaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosrelacionmenu = request()->except('_token', '_method');
        relaciones::where('id', '=', $id)->update($datosrelacionmenu);
        
        $relacionmenus = relaciones::findOrFail($id);
        return view('relacionmenus.edit', compact('relacionmenus'));
    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\relaciones  $relaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        relaciones::destroy($id);
        return redirect('relacion')->with('mens', 'Registro Eliminado');
    }
}
