<?php

namespace App\Models;

use App\Models\Imagem;
use App\Models\Servico;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Servico extends Model
{
    use HasFactory;
    protected $table="servico";
    protected $fillable = ['mais_info','descricao' ];

    public function imagens(){
        return $this->hasMany(Imagem::class,'servicos_id','id');

        }
}

//foreach($servico->imagens() as $imagem){
// <img src="{{asset('storage/img_servicos/'.$imagem)}}" alt="Serv img">

//}


