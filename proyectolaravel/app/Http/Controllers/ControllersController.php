<?php

namespace App\Http\Controllers;

use App\Models\controllers;
use Illuminate\Http\Request;

class ControllersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['controllers'] = controllers::paginate(5);
        return view('controllers.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('controllers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosController = request()->except('_token');
        controllers::insert($datosController);
        return redirect('controllers')->with('mensaje', 'Registro Ingresado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\controllers  $controllers
     * @return \Illuminate\Http\Response
     */
    public function show(controllers $controllers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\controllers  $controllers
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $controllers = controllers::findOrFail($id);
        return view('controllers.edit', compact('controller'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\controllers  $controllers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosController = request()->except('_token', '_method');
        controllers::where('id', '=', $id);

        $controllers = controllers::findOrFail($id);
        return view('controllers.edit', compact('controllers'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\controllers  $controllers
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        controllers::destroy($id);
        return redirect('controllers')->with('mens', 'Registro Eliminado');
    }
}
