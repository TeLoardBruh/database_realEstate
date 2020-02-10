<?php

namespace App\Http\Controllers;

use App\User;
use App\Admin;
use App\Agent;
use App\Agent_detail;
use App\Revenue;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
        /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */



    // here create agent in admin
    // === === === === === === === === === === === === === === === ===
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }
    public function index()
    {
        $agents = Agent_detail::all();
        return view('manager.table_agent_list',compact('agents'));
    }
    public function createAgent_inter()
    {
        return view('manager.register_agent');
    }
        /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function createAgent(Request $request)
    {
        $this->validator($request->all())->validate();
        $agent = Agent::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $detail = new Agent_detail;
        $detail -> fullname = $request->get('name');
        $detail -> email = $request->get('email');
        $detail -> gov_id = $request->get('gov_id');
        $detail -> phone_number = $request->get('phone_number');
        $detail -> sec_phone_number = $request->get('sec_phone_number');
        $detail -> password = $request->get('password');
        $detail -> dob = $request->get('dob');
        $detail -> agent_id = $agent->id;
        $detail -> gender = $request->get('gender');

        $detail -> save();
        $revenue = new Revenue;
        $revenue -> agent_id = $agent->id;
        $revenue -> save();

        return redirect()->intended('login/agent');
    }
    //end create agent in admin === === === === === === === === === === === === === === === ===


    public function aboutUs(){
        return view('interface/about_us');
    }

    public function contactUs(){
        return view('interface/contactUs');
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
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
