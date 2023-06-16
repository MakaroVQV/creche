<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cardapio extends Model
{
    use HasFactory;

    protected $table = 'cardapios';


    protected $fillable = [
        'colocao',
        'lanche_manha',
        'almoco',
        'lanche_tarde',
    ];

    public function medico()
    {
        return $this->belongsTo(Cardapio::class, 'cardapio_id');
    }
}
