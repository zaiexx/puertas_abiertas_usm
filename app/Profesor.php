<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profesor extends Model
{
    use SoftDeletes;	

	protected $primaryKey = 'id_profesor';
	protected $table = 'profesores';
 	protected $dates = ['deleted_at', 'created_at', 'updated_at'];	
 	protected $fillable = ['nombre','cargo','email','telefono'];
 	protected $guarded = ['deleted_at'];

}

