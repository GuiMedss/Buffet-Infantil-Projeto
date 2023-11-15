<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
	protected $table = 'administradores';
    protected $fillable = [
    	'user_id'
    ];

    public function usuario(){
        return $this->belongsTo('App\User','user_id');
    }
}
