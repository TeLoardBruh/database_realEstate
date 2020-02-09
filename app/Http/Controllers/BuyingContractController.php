<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BuyingContract;
use App\BuyingContractDetail;
use App\Property;
use App\Client;
use Auth;


class BuyingContractController extends Controller
{
    public function add($pid){
        return view('agent.buying-contract.add',compact('pid'));
    }
    public function save(Request $request){
        // $agent_id = Auth::guard('agent')->user()->id;
        $agent_id = 1;
        $pid = $request->get('property_id');
        $bname = $request->get('name');
        $bgender = $request->get('gender');
        $bphone_number = $request->get('phone_number');
        $bsec_phone_number = $request->get('sec_phone_number');
        $bemail = $request->get('email');
        $bdob = $request->get('dob');
        $bgov_id = $request->get('gov_id');

        $client = new Client;
        $client->fullname = $bname;
        $client->gender = $bgender;
        $client->phone_number = $bphone_number;
        $client->sec_phone_number = $bphone_number;
        $client->email = $bemail;
        $client->dob = $bdob;
        $client->gov_id = $bgov_id;
        $client->save();

        $property = Property::where('property_id',$pid)->first();

        $bc = new BuyingContract;
        $bc->agent_id= $agent_id;
        $bc->property_id = $pid;
        $bc->client_id = $client->id;
        $bc->owners_id = $property->owner_id;
        $bc->save();

        $bd = new BuyingContractDetail;
        $bd->bcontract_id = $bc->id;
        $bd->save();

        return view('agent.buying-contract.index');
    }
}
