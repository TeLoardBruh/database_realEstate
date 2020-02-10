<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index(){

    }
    public function detail($id){
        $invoice = Invoice::where('id',$id)->first();
        return view('agent.invoice.invoice',compact('invoice'));
    }
    public function invoices($bcontract_id){
        $invoice = Invoice::where('bccontract_id',$bcontract_id)->get();
        return view('agent.buying-contract.invoices',compact('invoices'));
    }
}
