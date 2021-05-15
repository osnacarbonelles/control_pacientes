<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\database\Eloquent\Model;

class Paciente extends Model
{
   protected $table = "pacientes";
   protected $fillable = [
      'nombre', 'apellido', 'eps', 'direccion', 'nombre_acompañante', 'telefono_acompañante', 'antecedente', 'motivo', 'diagnostico'
   ];

   public $timestamps = false; //Para evitar errores de insercion y actualizacion
}