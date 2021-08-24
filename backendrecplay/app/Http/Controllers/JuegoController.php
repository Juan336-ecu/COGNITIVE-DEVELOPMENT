<?php

namespace App\Http\Controllers;

use App\Models\Juego;
use Illuminate\Http\Request;

class JuegoController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Juego::all();
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Juego = Juego::create($request->all());
        return $Juego;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Juego  $Juego
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Juego::find($id);
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Juego  $Juego
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $Juego = Juego::findOrFail($id);
        $Juego->update($request->all());
        return $Juego;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Juego  $Juego
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Juego = Juego::findOrFail($id);
        $Juego->delete();

        return 204;
    }
}
