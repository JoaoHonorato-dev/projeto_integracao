<?php

namespace App\USUARIO;


use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "USUARIO";
    protected $primaryKey = 'cod_usuario';
    protected $fillable = ['nome','cod_endereco', 'cod_contato', 'data_cadastro', 'status'];

    public $timestamps = false;
}