<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index()
    {
        return view('manager.table_agent_list');
    }
    public function createAgent()
    {
        return view('manager.register_agent');
    }
    public function approve()
    {
        return view('manager.approve');
    } 
    public function weekly()
    {
        return view('manager.weekly');
    }
    public function monthly()
    {
        return view('manager.monthly');
    }
    public function yearly()
    {
        return view('manager.yearly');
    } 
}
