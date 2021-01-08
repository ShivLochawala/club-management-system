<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\ClientLog;
use App\Models\ClientPubTable;
use App\Models\ClientPubStatus;
use App\Models\Manager;
use App\Models\TableInfo;
use Session;

class ManagerController extends Controller
{
    public function login(){
        if(session()->has('manager')){
            return redirect('/manager/dashboard');
        }else{
            $invalid = '';
            return view('manager.managerLogin',['invalid'=>$invalid]);
        }
    }
    public function loginManager(Request $request){
        $validatedData = $request->validate([
            'email'    => 'required|email',
            'password' => 'required|min:6'
        ],[
            'email.required'=> 'Email ID is required',
            'password.required' => 'Password is required'
        ]);
        $manager = Manager::where(['email'=>$request->email])->first();
        if(!$manager || !Hash::check($request->password, $manager->password)){
            $invalid = "Invalid Email id or password";
            return view('manager.managerLogin',['invalid'=>$invalid]);
        }else{
            $pub_status = (ClientPubStatus::where(['client_id'=>$manager->client_id])->first())?ClientPubStatus::where(['client_id'=>$manager->client_id])->first():"Not";
            if($pub_status == "Not"){
                $invalid = "Your admin hasn\'t open or start System";
                return view('manager.managerLogin',['invalid'=>$invalid]);
            }else if($pub_status->status == 1){
                $request->session()->put('manager',$manager);
                return redirect('/manager/dashboard');
            }else{
                $invalid = "Your admin hasn\'t open or start System";
                return view('manager.managerLogin',['invalid'=>$invalid]);
            }
        }
    }
    public function home(){
        if(session()->has('manager')){
            $clientId = Session::get('manager')['client_id'];
            $client_pub_tables = ClientPubTable::where(['client_id'=>$clientId])->first();
            $table_info = TableInfo::where(['client_id'=>$clientId])->get();
            return view('manager.dashboard',compact('client_pub_tables','table_info'));
        }else{
            $invalid = '';
            return redirect('/manager');
        }
        return view('manager.dashboard');
    }
    public function logout(){
        Session::flush();
        Session::forget('manager');
        return redirect('/manager');
    }
    public function orderTake(){
        return view('manager.orderTake');
    }
    public function orderInfo(){
        return view('manager.orderInfo');
    }
    public function billing(){
        return view('manager.billing');
    }
}
