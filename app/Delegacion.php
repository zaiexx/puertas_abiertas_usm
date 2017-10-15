<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Delegacion extends Model
{
    
	use SoftDeletes;	

	protected $primaryKey = 'id_delegacion';
	protected $table = 'delegaciones';
 	protected $dates = ['deleted_at', 'created_at', 'updated_at'];	
 	protected $fillable = ['nombre','cargo','mail','telefono','profesor_id'];
 	protected $guarded = ['deleted_at'];

}

