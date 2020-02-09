<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyingContractController extends Controller
{
    public function add($pid){
        return view('agent.buying-contract.add',compact('pid'));
    }
    public function save(Request $request){
        

        return view('agent.buying-contract.index');
    }
}
