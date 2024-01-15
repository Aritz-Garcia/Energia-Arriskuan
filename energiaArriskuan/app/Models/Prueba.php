<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
    use HasFactory;

    protected $table = "pruebas";
    protected $primaryKey = "id";
    protected $guarded = ["denbora"];

    public function partida()
    {
        return $this->belongsTo(Partida::class, 'id_partida');
    }
}
