<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class BuyingContract extends Model
{
    protected $table = 'buying_contracts';

    function detail(){
        $detail = DB::table('buying_detail')->where('bcontract_id','=',$this->id)->first();
        return $detail;
    }
    function property(){
        return $this->belongsTo(Property::class);
    }
    function invoices(){
        return $this->hasMany(Invoice::class,'bcontract_id');
    }
}
