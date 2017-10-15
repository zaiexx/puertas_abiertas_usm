<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sede extends Model
{
    
	use SoftDeletes;	

	protected $primaryKey = 'id_sede';
	protected $table = 'sedes';
 	protected $dates = ['deleted_at', 'created_at', 'updated_at'];	
 	protected $fillable = ['nombre_sede', 'direccion','email','telefono'];
 	protected $guarded = ['deleted_at'];




	public function eventos() {

        return $this->hasMany('App\Evento', 'id_evento', 'evento_id');

    }

}