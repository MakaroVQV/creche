<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;

    protected $table='fichas_medica';
    protected $fillable = [
        'altura',
        'peso',
        'alergias',
        'medicamentos:',
        'aluno_id'
    ];

    public function ficha()
    {
        return $this->belongsTo(Aluno::class, 'aluno_id');
        
    }
}

