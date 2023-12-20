<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
    use HasFactory;

    protected $table = "prueba";
    protected $primaryKey = "id";
    protected $guarded = ["denbora"];
    protected $hidden = ['id'];

    public function partida()
    {
        return $this->belongsTo(Partida::class);
    }
}
