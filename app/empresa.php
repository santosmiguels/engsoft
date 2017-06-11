<?php

namespace App;

use Illuminate\Notifications\Notifiable;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class empresa extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    use Notifiable;
    protected $fillable = [
        'name', 'email', 'password', 'eResponsavel', 'eCNPJ', 'eTelefone1', 'eTelefone2', 'eEndereco', 'ePontoRef', 'eMarkers', 'eFormaPagamento', 'eFoto' ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}