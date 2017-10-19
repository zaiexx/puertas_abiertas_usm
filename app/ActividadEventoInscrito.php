<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ActividadEventoInscrito extends Model
{
    use SoftDeletes;


	protected $table = 'actividades_eventos_inscritos';
 	protected $dates = ['deleted_at', 'created_at', 'updated_at'];	
 	protected $fillable = ['alumno_id, actividad_evento_id'];
 	protected $guarded = ['deleted_at'];


	protected $primaryKey = 'id_actividad_evento_inscrito';



	public function actividades_eventos () {

		return $this->belongsTo('App\ActividadEvento','actividad_evento_id');

	}

}
