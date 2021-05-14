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
    public function index(){
      return view('doctor.vistadoctor');
    }
}