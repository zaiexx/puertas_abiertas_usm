<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Locacion extends Model 
{

	use SoftDeletes;	

	protected $primaryKey = 'id_locacion';
	protected $table = 'locaciones';
 	protected $dates = ['deleted_at', 'created_at', 'updated_at'];	
 	protected $fillable = ['nombre_locacion','region','comuna','tipo_locacion'];
 	protected $guarded = ['deleted_at'];
 	
}
 