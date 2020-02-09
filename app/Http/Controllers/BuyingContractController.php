<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BuyingContract;
use App\BuyingContractDetail;
use App\Property;
use App\Client;
use App\Revenue;
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

        return view('agent.property.index');
    }
    public function detail($bcontract_id){
        $bcontract = BuyingContract::where('bcontract_id',$bcontract_id)->with(['invoices','client','owner'])->first();
        return view('agent.buying-contract.detail',compact('bcontract'));
    }
    public function invoices($bcontract_id){
        $invoices = BuyingContract::where('bcontract_id',$bcontract_id)->first()->invoices()->get();
        return view('agent.buying-contract.invoices',compact('invoices'));
    }
    public function addInvoice($bcontract_id){
        return view('agent.buying-contract.addInvoice',compact('bcontract_id'));
    }
    public function saveInvoice(Request $request){
         // $agent_id = Auth::guard('agent')->user()->id;
        $agent_id = 1;
        $bcontract_id = $request->get('bcontract_id');
        $amount = $request->get('amount');
        
        $invoice = new Invoice;
        $invoice->bcontract_id = $bcontract_id;
        $invoice->amount = $amount;
        $invoice->save();

        $revenue = Revenue::where('agent_id',$agent_id);
        $revenue->amount = $revenue->amount + ($amount*0.1);
        $revenue->update();

        $invoices = BuyingContract::where('bcontract_id',$bcontract_id)->first()->invoices()->get();
        return view('agent.buying-contract.invoices',compact('invoices'));
    }
}
