<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\ClientLog;
use App\Models\ClientPubTable;
use App\Models\ClientPubStatus;
use App\Models\Manager;
use App\Models\Waiter;
use Session;

class ClientController extends Controller
{
    //public function login($slug){
    public function login(){
        //$clients = Client::where(['slug'=>$slug])->first();
        //if($clients != Null){
            if(session()->has('client')){
                return redirect('/client/dashboard');
            }else{
                $invalid = '';
                return view('client.clientLogin',['invalid'=>$invalid]);
                //return view('client.clientLogin',['client_slug'=>$clients->slug,'invalid'=>$invalid]);
            }
        /*}else{
            $msgsucc = 'Invalid Slug';
            return view('home',['msgsucc'=>$msgsucc]);
        }*/
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
            //return view('client.clientLogin',['client_slug'=>$client->slug,'invalid'=>$invalid]);
        }else{
            $request->session()->put('client',$client);
            if(ClientPubStatus::where(['client_id'=>$client->id])->first()){
                $pub_status = ClientPubStatus::where(['client_id'=>$client->id])->first();
                $client_pub_status = $pub_status->status;
            }else{
                $client_pub_status = 0;
            }
            $request->session()->put('clientStatus',$client_pub_status);
            return redirect('/client/dashboard');
        }
    }
    public function clientStatus($status){
        $clientId = Session::get('client')['id'];
        Session::forget('clientStatus');
        if(ClientPubStatus::where(['client_id'=>$clientId])->first()){
            $client_pub_status = ClientPubStatus::where(['client_id'=>$clientId])->first();
            $client_pub_status->status = $status;
            $client_pub_status->save();
            $client_pub_statuss = ClientPubStatus::where(['client_id'=>$clientId])->first();
            Session::put('clientStatus',$client_pub_statuss->status);
        }else{
            $client_pub_status = new ClientPubStatus;
            $client_pub_status->client_id = $clientId;
            $client_pub_status->status = $status;
            $client_pub_status->save();
            $client_pub_statuss = ClientPubStatus::where(['client_id'=>$clientId])->first();
            Session::put('clientStatus',$client_pub_statuss->status);
        }
        return back();
    }
    public function home(){
        if(session()->has('client')){
            $clientId = Session::get('client')['id'];
            $clients = Client::where(['id'=>$clientId])->first();
            $expired_date = $clients->expiring_date;
            $current_date = date('Y-m-d');
            $diff = strtotime($expired_date) - strtotime($current_date);
            $days = abs(round($diff / 86400));
            $expired_date = date("d-m-Y", strtotime($expired_date));
            return view('client.dashboard',compact('clients','days','expired_date'));
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
        $managers = Manager::where(['client_id'=>$clientId])->get(); 
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
        $clientId = Session::get('client')['id'];
        $managers = Manager::where(['client_id'=>$clientId])->get();
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
    public function waiterGet(){
        $clientId = Session::get('client')['id'];
        $waiters = Waiter::where(['client_id'=>$clientId])->get(); 
        $msgsucc = '';
        return view('client.waiter',['clientId'=>$clientId,'waiters'=>$waiters,'msgsucc'=>$msgsucc]);
    }
    public function waiterPost(Request $request){
        $validatedData = $request->validate([
            'name'     => 'required',
            'email'    => 'required|email',
            'mobile'   => 'required|min:10|max:10',
            'password' => 'required|min:6'
        ],[
            'email.required'=> 'Email ID is required',
            'password.required' => 'Password is required'
        ]);
        $waiter = new Waiter;
        $waiter->client_id = $request->id;
        $waiter->name = $request->name;
        $waiter->email = $request->email;
        $waiter->mobile = $request->mobile;
        $waiter->password = Hash::make($request->password);
        $waiter->status = 1;
        $waiter->save();
        $msgsucc = 'Add Waiter Successfully';
        $clientId = Session::get('client')['id'];
        $waiters = Waiter::where(['client_id'=>$clientId])->get();
        $clientLog = new ClientLog;
        $clientLog->client_id = $clientId;
        $clientLog->date = date('Y-m-d');
        $clientLog->activity = "Add Waiter";
        $clientLog->save();
        return view('client.waiter',['clientId'=>$clientId,'waiters'=>$waiters,'msgsucc'=>$msgsucc]);
    }
    public function waiterEditGet($id){
        $clientId = Session::get('client')['id'];
        $waiter = Waiter::find($id); 
        $msgsucc = '';
        return view('client.waiterEdit',['waiter'=>$waiter,'msgsucc'=>$msgsucc]);
    }
    public function waiterEditPost(Request $request){
        $validatedData = $request->validate([
            'name'     => 'required',
            'email'    => 'required|email',
            'mobile'   => 'required|min:10|max:10'
        ],[
            'email.required'=> 'Email ID is required',
        ]);
        $waiter = Waiter::where(['id'=>$request->id])->first(); 
        $waiter->name = $request->name;
        $waiter->email = $request->email;
        $waiter->mobile = $request->mobile;
        $waiter->status = $request->status;
        $waiter->save();

        $msgsucc = 'Edit Waiter Successfully';
        $waiters = Waiter::find($request->id); 
        $clientId = Session::get('client')['id'];
        
        $clientLog = new ClientLog;
        $clientLog->client_id = $clientId;
        $clientLog->date = date('Y-m-d');
        $clientLog->activity = "Edit Waiter";
        $clientLog->save();
        return view('client.waiterEdit',['waiter'=>$waiters,'msgsucc'=>$msgsucc]);
    }
    public function tableGet(){
        $clientId = Session::get('client')['id'];
        $client_pub_table = ClientPubTable::where(['client_id'=>$clientId])->get();
        $msgsucc = '';
        return view('client.table',['client_pub_tables'=>$client_pub_table,'msgsucc'=>$msgsucc]);
    }
    public function tablePost(Request $request){
        $validatedData = $request->validate([
            'section_name'        => 'required',
            'number_of_table'     => 'required'
        ]);
        $clientId = Session::get('client')['id'];
        $pub_table = new ClientPubTable;
        $pub_table->client_id = $clientId;
        $pub_table->section_name = $request->section_name;
        $pub_table->status = 1;
        $pub_table->number_of_tables = $request->number_of_table;
        $pub_table->save();

        $clientLog = new ClientLog;
        $clientLog->client_id = $clientId;
        $clientLog->date = date('Y-m-d');
        $clientLog->activity = "Add Section and Number of tables";
        $clientLog->save();
        
        $client_pub_table = ClientPubTable::where(['client_id'=>$clientId])->get();
        $msgsucc = 'Section and number of tables added successfully';
        return view('client.table',['client_pub_tables'=>$client_pub_table,'msgsucc'=>$msgsucc]);
    }
    public function tableEdit(Request $request){
        $validatedData = $request->validate([
            'section_name'        => 'required',
            'number_of_table'     => 'required'
        ]);
        $clientId = Session::get('client')['id'];
        $pub_table = ClientPubTable::find($request->id);
        $pub_table->section_name = $request->section_name;
        $pub_table->status = $request->status;
        $pub_table->number_of_tables = $request->number_of_table;
        $pub_table->save();

        $clientLog = new ClientLog;
        $clientLog->client_id = $clientId;
        $clientLog->date = date('Y-m-d');
        $clientLog->activity = "Edit Section and Number of tables";
        $clientLog->save();
        
        $client_pub_table = ClientPubTable::where(['client_id'=>$clientId])->get();
        $msgsucc = 'Section and number of tables Edited successfully';
        return view('client.table',['client_pub_tables'=>$client_pub_table,'msgsucc'=>$msgsucc]);
    }
    public function tableDelete(Request $request){
        $pub_table = ClientPubTable::find($request->id);
        $pub_table->delete();

        $clientId = Session::get('client')['id'];
        $clientLog = new ClientLog;
        $clientLog->client_id = $clientId;
        $clientLog->date = date('Y-m-d');
        $clientLog->activity = "Delete Section and Number of tables";
        $clientLog->save();
        
        $client_pub_table = ClientPubTable::where(['client_id'=>$clientId])->get();
        $msgsucc = 'Section and number of tables Deleted successfully';
        return view('client.table',['client_pub_tables'=>$client_pub_table,'msgsucc'=>$msgsucc]);
    }
    public function productGet(){
        return view('client.productAdd');
    }
    public function productDetails(){
        return view('client.productDetails');
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
