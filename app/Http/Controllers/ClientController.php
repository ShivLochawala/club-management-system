<?php

namespace App\Http\Controllers;

use App\Charts\UserChart;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function home(){
        if(session()->has('client')){
            $clients = Client::all();
            $clientCount = Client::all()->count();
            return view('client.dashboard',compact('clients','clientCount'));
        }else{
            $invalid = '';
            return redirect('/');
        }
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
