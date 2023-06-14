<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Financa extends Model
{
    use HasFactory;

    protected $table = 'financas';


    protected $fillable = [
        'responsavel_id',
        'vencimento',
        'valor',
        'valor_id:',
        'status'
    ];


    public function financas()
    {
        return $this->belongsTo(User::class,'responsavel_id', 'id',);    
    }

}
