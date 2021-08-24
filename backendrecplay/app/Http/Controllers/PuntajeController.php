<?php

namespace App\Http\Controllers;

use App\Models\Puntaje;
use Illuminate\Http\Request;

class PuntajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Puntaje::all();
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Puntaje = Puntaje::create($request->all());
        return $Puntaje;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Puntaje  $Puntaje
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Puntaje::find($id);
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Puntaje  $Puntaje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $Puntaje = Puntaje::findOrFail($id);
        $Puntaje->update($request->all());
        return $Puntaje;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Puntaje  $Puntaje
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Puntaje = Puntaje::findOrFail($id);
        $Puntaje->delete();

        return 204;
    }
}
