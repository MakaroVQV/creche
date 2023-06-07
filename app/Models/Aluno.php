<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Aluno extends Model
{
    use HasFactory;
    protected $table = 'alunos';   

    public function ficha_medica(): Hasmany
    {
        return $this->hasMany(FichaMedica::class, 'aluno_id', 'id');
    }
}
