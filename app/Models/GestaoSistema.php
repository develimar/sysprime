<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GestaoSistema extends Model
{
    use HasFactory;

    protected $fillable = ['descricao', 'link', 'usuario', 'senha'];

}
