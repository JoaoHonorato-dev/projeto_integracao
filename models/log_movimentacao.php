<?php

namespace App\log_movimentacao;


use Illuminate\Database\Eloquent\Model;

class LogMovimentacao extends Model
{
    protected $table = "log_movimentacao";
    protected $primaryKey = 'id';
    protected $fillable = ["usuario" ,"data_acao","id_produto","nome_acao"];

    public $timestamps = false;
}