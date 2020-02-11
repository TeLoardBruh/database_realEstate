<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = "invoice";
    protected $primaryKey = 'null';
    public $incrementing = false;

    function bcontract(){
        return $this->belongsTo(BuyingContract::class,'bcontract_id');
    }
}
