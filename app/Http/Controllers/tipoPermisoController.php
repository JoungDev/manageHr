<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipopermiso;

class tipoPermisoController extends Controller
{
    public function index(){
        $nacionalidad=Tipopermiso::all();
       
        $data=[
            "Nacionalidad" => $nacionalidad,
            "status" => 200
        ];
        return response()->json($data,200);
        //return "Obteniendo lista de Nacionalidads del contNacionalidadador";

    }

    public function store(Request $request){
        $data=[
            "mesaje " => "este modulo no permite crear, solo el administrador de base de datos lo puede hacer",
            "status" => 400
        ];
        return response()->json([$data],400);
        
    }
    public function show($id){
        $Nacionalidad=Tipopermiso::find($id);
        if(!$Nacionalidad){
            $data=[
                "mensage" => " No se encontro Nacionalidad",
                "status" => 201
            ];
            return response()->json([$data],201);
        }
        $data=[
            "Nacionalidad" => $Nacionalidad,
            "status" => 200
        ];
        return response()->json([$data],200);

    }
    public function destroy($id){
        $data=[
            "mesaje " => "este modulo no permite eliminar, solo el administrador de base de datos lo puede hacer",
            "status" => 400
        ];
        return response()->json([$data],400);
    }
    public function update(Request $request,$id){
        $data=[
            "mesaje " => "este modulo no permite Actualizar, solo el administrador de base de datos lo puede hacer",
            "status" => 400
        ];
        return response()->json([$data],400);
        
    }
    public function updatePartial(){
        $data=[
            "mesaje " => "este modulo no permite actualizar, solo el administrador de base de datos lo puede hacer",
            "status" => 400
        ];
        return response()->json([$data],400);
    }
}
