<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empresa extends Model
{
    protected $fillable = [
        'eNome', 'eResponsavel', 'eCNPJ', 'eTelefone1', 'eTelefone2', 'eEmail', 'eEndereco', 'ePontoRef', 'cMarkers', 'eFormaPagamento'
    ];
}
