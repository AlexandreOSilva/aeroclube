<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagem extends Model
{
    use HasFactory;
    protected $table= "imagens";
    protected $fillable = ['nome','servicos_id' ];

    public function servico(){
        return $this->belongsTo(Servico::class,'servicos_id','id');

        }
}
