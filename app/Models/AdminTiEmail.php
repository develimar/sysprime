<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminTiEmail extends Model
{
    use HasFactory;
    protected $fillable = ['email','domain','senha','pop','pop_port','smtp','smtp_port','setor','status','assin',];
}
