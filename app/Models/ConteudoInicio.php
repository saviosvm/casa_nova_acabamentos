<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConteudoInicio extends Model
{
    use HasFactory;
    protected $fillable = ['titulo', 'conteudo'];
}
