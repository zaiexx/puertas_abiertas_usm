<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Actividad extends Model
{
  
	use SoftDeletes;	

	protected $primaryKey = 'id_actividad';
	protected $table = 'actividades';
 	protected $dates = ['deleted_at', 'created_at', 'updated_at'];	
 	protected $fillable = ['nombre_actividad','descripcion','hora_inicio_id','hora_termino_id','cupos','sobre_cupos'];
 	protected $guarded = ['deleted_at'];
 	
 	public function cuposTotales() {

 	    return 1;
    }
    



	public function horario_inicio() {

        return $this->hasOne('App\Horario','horario_inicio_id');

    }


	public function horario_termino() {

        return $this->hasMany('App\Horario','horario_termino_id');

    }


	public function inscritos() {

        return $this->belongsToMany('App\Alumno','actividades_inscritos');

    }


}
