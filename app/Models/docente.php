<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class docente extends Model
{
    protected $fillable = ['nombre','apellidos','foto','titulo','CursoAsociado'];
    use HasFactory;
}
