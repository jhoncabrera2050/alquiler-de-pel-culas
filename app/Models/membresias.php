<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class membresias extends Model
{
    use HasFactory;

    protected $primarykey ='id_membresia';

    protected $fillable = ['fecha_expedicion', 'fecha_expiracion','usuario_id'];
}
