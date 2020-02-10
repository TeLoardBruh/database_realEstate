<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;

class AgentController extends Controller
{
    public function index(){
        return view('agent.dashboard');
    }
    
}
