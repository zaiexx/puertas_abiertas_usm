<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Carrera extends Model
{
	use SoftDeletes;	

	protected $primaryKey = 'id_carrera';
	protected $table = 'carreras';
 	protected $dates = ['deleted_at', 'created_at', 'updated_at'];	
 	protected $fillable = ['nombre_carrera','sede_id'];
 	protected $guarded = ['deleted_at'];

	
	public function sedes () {
		
    	return $this->belongsTo('App\Sede','sede_id');
    }


}
