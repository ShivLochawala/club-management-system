<?php

namespace App\Http\Controllers;

use App\Charts\UserChart;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\ClientLog;
use App\Models\Manager;
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
    public function profileGet(){
        $clientId = Session::get('client')['id'];
        $client = Client::find($clientId);
        $msgsucc = '';
        return view('client.profile',['client'=>$client,'msgsucc'=>$msgsucc]);
    }
    public function profileChangePassword(Request $request){
        $validatedData = $request->validate([
            'current_password'    => 'required',
            'new_password'        => 'required|min:6',
            'confirm_password'    => 'required_with:new_password|same:new_password',
        ]);
        $client = Client::where(['id'=>$request->id])->first();
        if(!$client || !Hash::check($request->current_password, $client->password)){
            $invalid = "Invalid Current password";
            $clientId = Session::get('client')['id'];
            $client = Client::find($clientId);
            return view('client.profile',['client'=>$client,'msgsucc'=>$invalid]);
        }else{
            $client->password = Hash::make($request->confirm_password);
            $client->save();
            $clientLog = new ClientLog;
            $clientLog->client_id = $request->id;
            $clientLog->date = date('Y-m-d');
            $clientLog->activity = "Change Password";
            $clientLog->save();
            return redirect('/logout');
        }
    }
    public function managerGet(){
        $clientId = Session::get('client')['id'];
        $managers = Manager::all(); 
        $msgsucc = '';
        return view('client.manager',['clientId'=>$clientId,'managers'=>$managers,'msgsucc'=>$msgsucc]);
    }
    public function managerPost(Request $request){
        $validatedData = $request->validate([
            'name'     => 'required',
            'email'    => 'required|email',
            'mobile'   => 'required|min:10|max:10',
            'password' => 'required|min:6'
        ],[
            'email.required'=> 'Email ID is required',
            'password.required' => 'Password is required'
        ]);
        $manager = new Manager;
        $manager->client_id = $request->id;
        $manager->name = $request->name;
        $manager->email = $request->email;
        $manager->mobile = $request->mobile;
        $manager->password = Hash::make($request->password);
        $manager->status = 1;
        $manager->save();
        $msgsucc = 'Add Manager Successfully';
        $managers = Manager::all(); 
        $clientId = Session::get('client')['id'];
        
        $clientLog = new ClientLog;
        $clientLog->client_id = $clientId;
        $clientLog->date = date('Y-m-d');
        $clientLog->activity = "Add Manager";
        $clientLog->save();
        return view('client.manager',['clientId'=>$clientId,'managers'=>$managers,'msgsucc'=>$msgsucc]);
    }
    public function managerEditGet($id){
        $clientId = Session::get('client')['id'];
        $manager = Manager::find($id); 
        $msgsucc = '';
        return view('client.managerEdit',['manager'=>$manager,'msgsucc'=>$msgsucc]);
    }
    public function managerEditPost(Request $request){
        $validatedData = $request->validate([
            'name'     => 'required',
            'email'    => 'required|email',
            'mobile'   => 'required|min:10|max:10'
        ],[
            'email.required'=> 'Email ID is required',
        ]);
        $manager = Manager::where(['id'=>$request->id])->first(); 
        $manager->name = $request->name;
        $manager->email = $request->email;
        $manager->mobile = $request->mobile;
        $manager->status = $request->status;
        $manager->save();

        $msgsucc = 'Edit Manager Successfully';
        $managers = Manager::find($request->id); 
        $clientId = Session::get('client')['id'];
        
        $clientLog = new ClientLog;
        $clientLog->client_id = $clientId;
        $clientLog->date = date('Y-m-d');
        $clientLog->activity = "Edit Manager";
        $clientLog->save();
        return view('client.managerEdit',['manager'=>$managers,'msgsucc'=>$msgsucc]);
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
