<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\DB; //Trabajar con base de datos utilizando procedimientos almacenados
use Illuminate\Http\Request; //Recuperar datos de la vista
use DataTables;

class DoctorController extends Controller
{
    public function index(Request $request){

      if($request->ajax()){
        $doctores = DB::select('CALL ver_doctores()');
        return DataTables::of($doctores)
                ->addColumn('action', function($doctores){
                    $acciones = '<a href="" class="btn btn-info btn-sm"> Editar </a>';
                    $acciones .= '$nbsp;$nbsp;<button type="button" name="delete" id="" class="btn btn-danger btn-sm"> Eliminar </button>';
                    return $acciones;
                })
                ->rawColumns(['action'])
                ->make(true);
      }

      return view('doctor.vistadoctor');
    }
}