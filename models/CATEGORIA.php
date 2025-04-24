<?php

namespace App\CATEGORIA;


use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = "CATEGORIA";
    protected $primaryKey = 'cod_categoria';
    protected $fillable = ['nome_categoria'];

    public $timestamps = false;
}