<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
    use HasFactory;

    protected $table = "partidas";
    protected $primaryKey = "id";
    protected $guarded = ["denbora"];
    protected $hidden = ['id'];

    public function erabiltzailea()
    {
        return $this->belongsTo(User::class, 'id_erabiltzailea');
    }

    public function pruebas()
    {
        return $this->hasMany(Prueba::class);
    }
}
