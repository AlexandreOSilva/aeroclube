<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aviao extends Model
{
    use HasFactory;
    protected $fillable = ['n_litros','kmsrealizados','fornecedores','imagem','nome','total_poltronas' ];

}
