<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Alumno extends Model
{
    use SoftDeletes;	

	protected $primaryKey = 'id_alumno';
	protected $table = 'alumnos';
 	protected $dates = ['deleted_at', 'created_at', 'updated_at','fecha_nacimiento'];	
 	protected $fillable = ['rut','dv_rut','nombres','apellido_paterno','apellido_materno','sexo','fecha_nacimiento','region',
 						  'comuna','direccion','email','celular','telefono'];
 	protected $guarded = ['deleted_at'];



	public function actividades() {

        return $this->belongsToMany('App\ActividadEvento','actividades_eventos_inscritos')->withPivot('id_actividad_evento_inscrito');

    }


}
