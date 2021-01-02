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
}
