<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ActividadInscrito extends Model
{

use SoftDeletes;


	protected $table = 'actividades_inscritos';
 	protected $dates = ['deleted_at', 'created_at', 'updated_at'];	
 	protected $fillable = ['alumno_id, actividad_id'];
 	protected $guarded = ['deleted_at'];


	protected $primaryKey = 'id_actividad_inscrito';
}



