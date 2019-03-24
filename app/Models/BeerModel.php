<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BeerModel extends Model {

    protected $fillable = [
        'nome',
        'marca',
        'preco',
        'quantidade'
    ];

    protected $table = 'beer';
    protected $primaryKey = 'id';
    protected $nome = 'nome';
    protected $marca = 'marca';
    protected $quantidade = 'quantidade';
    protected $preco = 'preco';
    public $timestamps = false;
    
}
