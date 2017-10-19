<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ActividadEvento extends Model
{

    use SoftDeletes;	

	protected $primaryKey = 'id_actividad_evento';
	protected $table = 'actividades_eventos';
 	protected $dates = ['deleted_at', 'created_at', 'updated_at'];	
 	protected $fillable = ['actividad_id','evento_id','cupos','sobre_cupos', 'hora_inicio_id', 'hora_termino_id'];
 	protected $guarded = ['deleted_at'];


	public function cuposTotales() {

 	    return $this->cupos - count($this->inscritos);
    }

	public function actividades() {

		return $this->belongsTo('App\Actividad','actividad_id');
    }


	public function eventos() {

		return $this->belongsTo('App\Evento','evento_id');
    }


	public function inscritos() {

        return $this->belongsToMany('App\Alumno','actividades_eventos_inscritos');

    }


	public function horario_inicio() {

        return $this->hasOne('App\Horario','id_horario','hora_inicio_id');

    }

	public function horario_termino() {

        return $this->hasOne('App\Horario','id_horario','hora_termino_id');

    }


}
