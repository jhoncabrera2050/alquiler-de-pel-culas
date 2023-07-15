<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peliculas extends Model
{
    use HasFactory;
    protected $primaryKey='ide';
    protected $fillable=['nombre','genero','año','director','artista','descripcion','foto','precio' ];

}
