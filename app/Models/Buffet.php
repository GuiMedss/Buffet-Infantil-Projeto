<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Storage;

class Buffet extends Model
{
    use HasFactory;

    protected $table = 'buffets';
    protected $fillable = [
        "titulo",
        "comidas",
        "bebidas",
        "valor",
        'img1',
        'img2',
        'img3'
    ];

    public function getImg1UrlAttribute()
    {
        return $this->img1 ? asset('storage/' . $this->img1) : null;
    }

    public function getImg2UrlAttribute()
    {
        return $this->img2 ? asset('storage/' . $this->img2) : null;
    }

    public function getImg3UrlAttribute()
    {
        return $this->img3 ? asset('storage/' . $this->img3) : null;
    }
}
