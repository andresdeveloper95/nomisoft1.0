<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
   public function dataTable()
   {
        $usuarios=User::all();
        return view('dataTable',compact("usuarios"));
   }

    public function index()
    {
        return view('principal'); 
    }

    
    public function create()
    {
        
    }

    public function store(Request $request)
    {
        if($request->ajax()){

            $portero = new User;
            $portero->cedula     =   $request->cedula;
            $portero->nombres    =   $request->nombres;
            $portero->apellidos  =   $request->apellidos;
            $portero->direccion  =   $request->direccion;
            $portero->telefono  =   $request->telefono;
            $portero->correo  =   $request->correo;
            $portero->rol = "P";
            $portero->password = "vigi";
            $portero->save();
            return redirect()->route('porteros.listar');
         }            
         
    }

    public function edit(User $user)
    {
        return view('editar',compact("user"));
    }

    public function update(Request $request, User $user)
    {
        $user->update([
            'nombres'=>request('nombres'),
            'apellidos'=>request('apellidos'),
            'direccion'=>request('direccion'),
            'telefono'=>request('telefono'),
            'correo'=>request('correo'),
        ]);
        
    }


    public function destroy(Request $request)
    {
        if($request->ajax()){
             $portero = User::find($request->id);
             $portero->delete();
        }
    }
}
