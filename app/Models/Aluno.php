<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Aluno extends Model
{
    use HasFactory;
    protected $table = 'alunos';   

    public function ficha_medica(): HasOne
    {
        return $this->hasOne(FichaMedica::class, 'aluno_id', 'id');
    }
}
