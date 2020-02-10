<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class BuyingContract extends Model
{
    protected $table = 'buying_contracts';

    public function detail(){
        $detail = DB::table('buying_detail')->where('bcontract_id','=',$this->id)->first();
        return $detail;
    }
    public function property(){
        return $this->belongsTo(Property::class);
    }
    public function invoices(){
        return $this->hasMany(Invoice::class,'bcontract_id');
    }
    public function owner(){
        return $this->belongsTo(Client::class,'owners_id');
    }
    public function client(){
        return $this->belongsTo(Client::class,'client_id');
    }
}
 