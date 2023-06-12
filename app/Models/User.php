<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'profile',
        'telefone'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $table='users';

/**
     * Check if user is an admin.
     *
     * @return bool
     */
    public function isAdmin()
    {
        return $this->profile === 'admin';
    }


    public function getTelefoneFormatadoAttribute()
    {
        $telefone = $this->telefone;

        // Formate o telefone conforme necessário
        $parte1 = substr($telefone, 0, 2);
        $parte2 = substr($telefone, 2, 5);
        $parte3 = substr($telefone, 7, 4);

        $telefoneFormatado = "($parte1) $parte2-$parte3";

        return $telefoneFormatado;
    }



    public function responsavel(): HasMany
    {
        return $this->hasMany(Aluno::class,'id','responsavel_id');
    }

    public function financas(): HasMany
    {
        return $this->hasMany(Financa::class,'id','responsavel_id');
        
    }
}
