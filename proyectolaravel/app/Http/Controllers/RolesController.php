<?php

namespace App\Http\Controllers;

use App\Models\roles;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['roles'] = roles::paginate(5);
        return view('roles.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('roles.create');
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
        $datosRol = request()->except('_token');
        roles::insert($datosRol);
        return redirect('roles')->with('mensaje', 'Registro Ingresado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\roles  $rol
     * @return \Illuminate\Http\Response
     */
    public function show(roles $rol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\roles  $rol
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $roles = roles::findOrFail($id);
        return view('roles.edit', compact('roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\roles  $rol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosRol = request()->except('_token', '_method');
        roles::where('id', '=', $id)->update($datosRol);

        $roles = roles::findOrFail($id);
        return view('roles.edit', compact('roles'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\roles  $rol
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        roles::destroy($id);
        return redirect('roles')->with('mens', 'Registro Eliminado');
    }
}
