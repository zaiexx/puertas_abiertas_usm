<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventoInscrito extends Model
{
    use SoftDeletes;	

	protected $primaryKey = 'id_evento_inscrito';
	protected $table = 'eventos_inscritos';
 	protected $dates = ['deleted_at', 'created_at', 'updated_at'];	
 	protected $fillable = ['evento_id','alumno_id','delegacion'];
 	protected $guarded = ['deleted_at'];

}
