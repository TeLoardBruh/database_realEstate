<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;

class InvoiceController extends Controller
{
    public function index(){

    }
    public function detail($id){
        $invoice = Invoice::where('id',$id)->first();
        return view('agent.invoice.invoice',compact('invoice'));
    }
    public function invoices(){
        $invoices = Invoice::all();
        return view('agent.invoice.index',compact('invoices'));
    }
}
