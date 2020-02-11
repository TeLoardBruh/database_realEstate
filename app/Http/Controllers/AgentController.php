<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;
use App\Revenue;

class AgentController extends Controller
{
    public function index(){
        return view('agent.dashboard');
    }
    public function revenue(Request $request){
        if(request()->ajax()){
            $agent_id = $request->get('agent_id');
            $revenue = Revenue::where('agent_id',$agent_id)->first();
            return response()->json([
                'data' => $revenue->amount
            ]);
        }
    }
    
}
