<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Evento extends Model
{
   
	use SoftDeletes;	

	protected $primaryKey = 'id_evento';
	protected $table = 'eventos';
 	protected $dates = ['deleted_at', 'created_at', 'updated_at'];	
 	protected $fillable = ['nombre_evento'];
 	protected $guarded = ['deleted_at'];


	
	public function sedes () {

    	return $this->belongsTo('App\Sede','sede_id');
    }

    public function actividades () {

    	return $this->hasMany('App\ActividadEvento');
    }


}

