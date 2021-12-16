<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Missao extends Model
{
    use HasFactory;
    /*protected $table='faqs';*/
    protected $fillable = ['texto', 'prof', 'dedi', 'cora', 'esf', 'perf', 'fam'];

}
