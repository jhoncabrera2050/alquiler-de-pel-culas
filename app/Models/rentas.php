<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rentas extends Model
{
    use HasFactory;
    protected $primaryKey='cod';
    protected $fillable=['cod','ide','fecharegistro','Fechadevolucion','user_id'];


}
