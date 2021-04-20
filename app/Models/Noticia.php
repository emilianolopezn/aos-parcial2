<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;
    //Laravel busca por default una tabla que se llame igual, pero en minusculas
    //Y con una 's' al final

    //O podemos decirle que tabla queremos
    protected $table = "noticias";
}
