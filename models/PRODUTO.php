<?php

namespace App\PRODUTO;


use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = "PRODUTO";
    protected $primaryKey = 'cod_produto';
    protected $fillable = ['nome','cod_categoria','estoque'];

    public $timestamps = false;
}