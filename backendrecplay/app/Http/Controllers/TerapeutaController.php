<?php

namespace App\Http\Controllers;

use App\Models\Terapeuta;
use Illuminate\Http\Request;

class TerapeutaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Terapeuta::all();
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Terapeuta = Terapeuta::create($request->all());
        return $Terapeuta;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Terapeuta  $Terapeuta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Terapeuta::find($id);
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Terapeuta  $Terapeuta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $Terapeuta = Terapeuta::findOrFail($id);
        $Terapeuta->update($request->all());
        return $Terapeuta;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Terapeuta  $Terapeuta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Terapeuta = Terapeuta::findOrFail($id);
        $Terapeuta->delete();

        return 204;
    }
}
