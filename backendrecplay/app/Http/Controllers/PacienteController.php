<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Paciente::all();
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Paciente = Paciente::create($request->all());
        return $Paciente;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paciente  $Paciente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Paciente::find($id);
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paciente  $Paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $Paciente = Paciente::findOrFail($id);
        $Paciente->update($request->all());
        return $Paciente;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paciente  $Paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Paciente = Paciente::findOrFail($id);
        $Paciente->delete();

        return 204;
    }
}
