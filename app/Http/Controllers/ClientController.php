<?php

namespace App\Http\Controllers;

use App\Charts\UserChart;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Client;
use Session;

class ClientController extends Controller
{
    public function login(){
        if(session()->has('client')){
            return redirect('/client/dashboard');
        }else{
            $invalid = '';
            return view('client.clientLogin',['invalid'=>$invalid]);
        }
    }
    public function loginClient(Request $request){
        $validatedData = $request->validate([
            'email'    => 'required|email',
            'password' => 'required|min:6'
        ],[
            'email.required'=> 'Email ID is required',
            'password.required' => 'Password is required'
        ]);
        $client = Client::where(['email'=>$request->email])->first();
        if(!$client || !Hash::check($request->password, $client->password)){
            $invalid = "Invalid Email id or password";
            return view('client.clientLogin',['invalid'=>$invalid]);
        }else{
            $request->session()->put('client',$client);
            return redirect('/client/dashboard');
        }
    }
    public function home(){
        if(session()->has('client')){
            $clients = Client::all();
            $clientCount = Client::all()->count();
            return view('client.dashboard',compact('clients','clientCount'));
        }else{
            $invalid = '';
            return redirect('/admin');
        }
    }
    public function logout(){
        Session::flush();
        Session::forget('client');
        return redirect('/admin');
    }
    public function productGet(){
        return view('client.productAdd');
    }
    public function billingGet(){
        return view('client.billing');
    }
    public function stockReportGet(){
        return view('client.stockReport');
    }
    public function dailyReportGet(){
        return view('client.dailyReport');
    }
    public function stockStatementGet(){
        return view('client.stockStatement');
    }
    public function stockVerificationGet(){
        return view('client.stockVerification');
    }
}
