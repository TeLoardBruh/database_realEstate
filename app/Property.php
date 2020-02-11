<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'properties';
    protected $primaryKey = 'property_id';
    function detail(){
        $detail = DB::table('properties_detail')->where('property_id','=',$this->id)->first();
        return $detail;
    }
    function bcontract(){
        return $this->hasOne(BuyingContract::class);
    }
}
