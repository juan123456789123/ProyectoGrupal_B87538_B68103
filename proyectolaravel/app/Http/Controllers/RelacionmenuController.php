<?php

namespace App\Http\Controllers;

use App\Models\relacionmenu;
use Illuminate\Http\Request;

class RelacionmenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['relacionmenu'] = relacionmenu::paginate(5);
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
        relacionmenu::insert($datosrelacionmenu);
        return redirect('relacionmenus')->with('mensaje', 'Registro Ingresado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\relacionmenu  $relacionmenu
     * @return \Illuminate\Http\Response
     */
    public function show(relacionmenu $relacionmenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\relacionmenu  $relacionmenu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $relacionmenus = relacionmenu::findOrFail($id);
        return view('usuarios.edit', compact('relacionmenus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\relacionmenu  $relacionmenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosrelacionmenu = request()->except('_token', '_method');
        relacionmenu::where('id', '=', $id)->update($datosrelacionmenu);
        
        $relacionmenus = relacionmenu::findOrFail($id);
        return view('relacionmenus.edit', compact('relacionmenus'));
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\relacionmenu  $relacionmenu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        relacionmenu::destroy($id);
        return redirect('relacionmenus')->with('mensaje', 'Registro Eliminado');
    }
}
