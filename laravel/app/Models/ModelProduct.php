<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelProduct extends Model
{
    protected $table = 'TbProduto';
    protected $fillable = ['nmProduto', 'marca', 'qtd', 'preco', 'comissao', 'foto'];
}
