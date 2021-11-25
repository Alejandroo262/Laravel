<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlumnoController extends Controller
{
    public function obtenerTodos(Request $request){
        return response()->json([
            'obtener' => DB::table('alumno')->get()
        ]);
    }

    public function borrarAlumno(Request $request, $id){
        $user = DB::table('alumno')->where('id', $id)->first();
        if ($user == null){
            return response()->json([
            ], 404);
        }
        DB::table('alumno')->where('id', $id)->delete();
    }

    public function obtenerAlumno(Request $request , $id){
        if (ctype_digit($id)){
            return response()->json([
                'obteneralumno' => DB::table('alumno')->where('id', $id)->first()
            ]);
        }
    }

    public function insertarAlumno(Request $request){
        $datos = $request->only(['nombre','telefono','edad','password','email','sexo']);
        $request->validate([
            'nombre'=>'max:32',
            'telefono'=>'max:30|nullable',
            'edad'=>'max:21|nullable',
            'password'=>'max:64',
            'email'=>'max:26|unique:alumno',
            'sexo'=>'max:6'
        ]);

        try{
            DB::table('alumno')->insert($datos);
        }catch(\Exception $e){
            return "error $e";
        }
    }
    public function modificarAlumno(Request $request, $id)
    {
        $datos = $request->only(['nombre', 'telefono', 'edad', 'password', 'email', 'sexo']);
        $request->validate([
            'nombre' => 'max:32',
            'telefono' => 'max:30|nullable',
            'edad' => 'max:21|nullable',
            'password' => 'max:64',
            'email' => 'max:26|unique:alumno',
            'sexo' => 'max:6'
        ]);

        try {
            DB::table('alumno')->where('id',$id)->update($datos);
        } catch (\Exception $error) {
            return "error $error";
        }
    }
}
