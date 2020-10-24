<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $table = 'veiculos';
    protected $fillable = [
        'marca',
        'nome',
        'categoria'
    ];
}
