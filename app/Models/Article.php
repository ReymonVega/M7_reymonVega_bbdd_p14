<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{   
    use HasFactory;
    protected $table = 'articles';
    protected $fillable = [
        'marcaZapatilla',
        'informacion',
        'color',
        'preu_salida',
        'preu_reventa',
        'numero_modelo',
        'estado'

    ];
    protected $hidden = [];
    // use HasFactory;
}

