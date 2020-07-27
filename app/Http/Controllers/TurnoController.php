<?php

namespace App\Http\Controllers;

use App\Turno;
use Illuminate\Http\Request;

class TurnoController extends Controller
{
    
    public function dataTable()
    {
         $turnos=Turno::all();
         return view('dataTableTurno',compact("turnos"));
    }
 
     public function index()
     {
         return view('principal1'); 
     }
 

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        if($request->ajax()){

            $turno = new Turno;
            $turno->codigo     =   $request->codigo;
            $turno->horaInicio    =   $request->horaInicio;
            $turno->horaFin  =   $request->horaFin;
            $turno->save();
            return redirect()->route('turnos.listar');
         }        
    }

    public function show(Turno $turno)
    {
        
    }
 
    public function edit(Turno $turno)
    {
        return view('editar',compact("turno"));
    }
   
    public function update(Request $request, Turno $turno)
    {
        $turno->update([
            'HoraInicio'=>request('horaInicio'),
            'HoraFin'=>request('horaFin'),        
        ]);
    }
 
    public function destroy(Request $request)
    {
        if($request->ajax()){
            $turno = Turno::find($request->id);
            $turno->delete();
       } 
    }
}
