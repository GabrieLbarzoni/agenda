<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/* Classe que representa um contato */
class Contato extends Model
{
    use HasFactory;
    /* Lista de atributos que podem ser preenchidos a partir da entrada do usuário */
    protected $fillable = ['nome', 'telefone', 'email', 'cep', 'rua', 'numero', 'complemento', 'bairro', 'cidade', 'estado', 'nota', 'user_id', 'updated_at', 'created_at'];

    /* Relacionamento com o usuário proprietário do contato */
    public function user() {
        return $this->belongsTo(User::class);
    }
};
