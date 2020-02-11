<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuyingContractDetail extends Model
{
    protected $table = "buying_detail";

    public function bcontract(){
        return $this->belongsTo(BuyingContract::class,'bcontract_id','bcontract_id');
    }
}
