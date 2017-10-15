<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Horario extends Model
{
    use SoftDeletes;	

	protected $primaryKey = 'id_horario';
	protected $table = 'horarios';
 	protected $dates = ['deleted_at', 'created_at', 'updated_at'];	
 	protected $fillable = ['nombre','hora_inicio','hora_termino'];
 	protected $guarded = ['deleted_at'];
}

