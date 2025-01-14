<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Colaborador extends Model
{
    use HasFactory;


    protected $table = 'colaborador';

    protected $fillable = [
        'nome_completo',
        'apelido',
        'nome_pai',            
        'nome_mae',
        'cpf',
        'data_nascimento',
        'cargo',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime', 
    ];
}
