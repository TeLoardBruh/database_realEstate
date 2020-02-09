<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = "invoices";

    function bcontract(){
        return $this->belongsTo(BuyingContract::class,'bcontract_id');
    }
}
