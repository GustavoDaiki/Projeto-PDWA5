<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clube_Futebol extends Model
{
    use HasFactory;
    protected $fillable = ['tecnico', 'criacao','titulos','torcida','patrocinio'];
}
