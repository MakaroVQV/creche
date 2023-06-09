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
    protected $fillable = [
        'aluno_id',

    ];


   /* public function medico(): hasOne
    {
        return $this->hasOne(Medico::class,'id','aluno_id');
    }*/

    public function responsavel()
    {
        return $this->belongsTo(User::class,'id', 'responsavel_id');
        
    }

    public function ficha(): HasOne
    {
        return $this->hasOne(Medico::class,'id','aluno_id');
    }
}
