<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $table = 'reservas';
    protected $fillable = [
        'user_id',
        'buffet_id',
        'data',
        'qtd_convidados',
        'aniversariante',
        'idade',
        'status'
    ];

    const SOLICITADO = 1,
	AGENDADO = 2,
	CANCELADO = 3,
	STATUS_LABELS = [
		self::SOLICITADO => "Aguardando Confirmação",
		self::AGENDADO => "Reservado",
		self::CANCELADO => "Cancelado",
	];

    public function Buffet(){
		return $this->belongsTo('App\Models\Buffet')->withDefault();
	}

    public function Convidados(){
        return $this->hasMany('App\Models\Convidado');
    }
}
