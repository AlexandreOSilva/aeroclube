<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;
    protected $fillable = ['mais_info','descricao' ];

    public function imagens(){
        return $this->hasMany(Imagem::class,'servicos_id','id');

        }
}

