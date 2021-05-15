<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\database\Eloquent\Model;

class Doctor extends Model
{
   protected $table = "doctores";
   protected $fillable = [
      'nombre', 'apellido', 'direccion', 'telefono', 'tipo_sangre', 'fecha_nacimiento', 'anos_experiencia' 
   ];

   public $timestamps = false; //Para evitar errores de insercion y actualizacion
}
