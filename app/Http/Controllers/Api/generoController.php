<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genero;
use Illuminate\Support\Facades\Validator;

class generoController extends Controller
{
    public function index(){
        $generos=Genero::all();
        $data=[
            "rol" => $generos,
            "status" => 200
        ];
        return response()->json($data,200);
    }
    public function store(Request $request){
        $validator=Validator::make($request->all(),[
            "nombreGenero" => "required|min:3|max:30",
            "abreviacionGenero" => "required|max:2"
        ]);
        if($validator->fails()){
            $data=[
                "mesaje " => "Error en la validacion de generos",
                "errors" => $validator->errors(),
                "status" => 400
            ];
            return response()->json([$data],400);
        }
        try {
            $genero = Genero::create([
                "nombreGenero" => $request->nombreGenero,
                "abreviacionGenero" => $request->abreviacionGenero
            ]);
    
            return response()->json([
                "mensaje" => "Genero creado correctamente",
                "rol" => $genero,
                "status" => 201
            ], 201);
            return response()->json([$data],201);
        } catch (\Exception $e) {
            return response()->json([
                "mensaje" => "Error al crear el genero",
                "error" => $e->getMessage(),
                "status" => 500
            ], 500);
            return response()->json([$data],500);
        }
        
    }
    public function show($id){
        $genero=Genero::find($id);
        if(!$genero){
            $data=[
                "mensage" => " No se encontro genero",
                "status" => 201
            ];
            return response()->json([$data],201);
        }
        $data=[
            "rol" => $genero,
            "status" => 200
        ];
        return response()->json([$data],200);

    }
    public function destroy($id){
        $genero=Genero::find($id);
        if(!$genero){
            $data=[
                "mensage" => " No se encontro genero",
                "status" => 404
            ];
            return response()->json([$data],404);
        }
        $genero->delete();
        $data=[
            "rol" => 'Genero eliminado',
            "status" => 200
        ];
        return response()->json([$data],200);
    }
    public function update(Request $request,$id){
        $genero=Genero::find($id);
        if(!$genero){
            $data=[
                "mensage" => " No se encontro Genero",
                "status" => 404
            ];
            return response()->json([$data],404);
        }
        $validator = Validator::make($request->all(),[
            "nombreGenero" => "required|min:3|max:30",
            "abreviacionGenero" => "required|max:2"
        ]);
        if($validator->fails()){
            $data=[ 
                "errors" => $validator->errors(),
                "status" => 400
            ];
            return response()->json([$data],400);
        }
        $genero->nombreGenero=$request->nombreGenero;
        $genero->abreviacionGenero=$request->abreviacionGenero;
        try{
            $genero->save();
            $data=[
                "rol" => $genero,
                 "status" => 200
            ];
            return response()->json([$data],200);
        } catch (\Exception $e) {
            return response()->json([
                "mensaje" => "Error al modificar el rol",
                "error" => $e->getMessage(),
                "status" => 500
            ], 500);
            return response()->json([$data],500);
        }
        
    }
    public function updatePartial(Request $request,$id){
        $genero=Genero::find($id);
        if(!$genero){
            $data=[
                "mensage" => " No se encontro rol",
                "status" => 404
            ];
            return response()->json([$data],404);
        }
        $validator = Validator::make($request->all(),[
            "nombreGenero" => "min:3|max:30",
            "abreviacionGenero" => "max:2"
        ]);
        if($validator->fails()){
            $data=[
                "mesaje " => "Error al validar rol",
                "errors" => $validator->errors(),
                "status" => 400
            ];
            return response()->json([$data],400);
        }
        if($request->has("idGenero")){
            $genero->idGenero = $request->idGenero;
        }
        if($request->has("nombreGenero")){
            $genero->nombreGenero = $request->nombreGenero;
        }
        if($request->has("abreviacionGenero")){
            $genero->abreviacionGenero = $request->abreviacionGenero;
        }
        $genero->save();
        $data=[
            "rol" => $genero,
            "status" => 200
        ];
        return response()->json([$data],200);
    }
}
