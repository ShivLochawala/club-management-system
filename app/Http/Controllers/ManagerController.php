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
use App\Models\TableInfo;
use Session;

class ManagerController extends Controller
{
    public function login(){
        if(session()->has('manager')){
            $clientSlug = Session::get('client-slug');
            return redirect('/'.$clientSlug.'/manager/dashboard');
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
        $client = Client::where(['id'=>$manager->client_id])->first();
        $request->session()->put('client-slug',$client->slug);
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
                $clientSlug = Session::get('client-slug');
                return redirect('/'.$clientSlug.'/manager/dashboard');
            }else{
                $invalid = "Your admin hasn\'t open or start System";
                return view('manager.managerLogin',['invalid'=>$invalid]);
            }
        }
    }
    public function home($slug){
        $clientSlug = Session::get('client-slug');
        if($slug != $clientSlug){
            return view("error");
        }
        if(session()->has('manager')){
            $clientId = Session::get('manager')['client_id'];
            $client_pub_tables = ClientPubTable::where(['client_id'=>$clientId,'status'=>1])->get();
            $table_info = TableInfo::where(['client_id'=>$clientId])->get();
            $waiters = Waiter::where(['client_id'=>$clientId])->get();
            return view('manager.dashboard',compact('client_pub_tables','waiters','table_info'));
        }else{
            $invalid = '';
            return redirect('/manager');
        }
        return view('manager.dashboard');
    }
    public function logout(){
        Session::flush();
        Session::forget('manager');
        Session::forget('client-slug');
        return redirect('/manager');
    }
    public function profileGet($slug){
        $clientSlug = Session::get('client-slug');
        if($slug != $clientSlug){
            return view("error");
        }
        $managerId = Session::get('manager')['id'];
        $manager = Manager::find($managerId);
        $msgsucc = '';
        return view('manager.profile',['manager'=>$manager,'msgsucc'=>$msgsucc]);
    }
    public function profileChangePassword(Request $request){
        $validatedData = $request->validate([
            'current_password'    => 'required',
            'new_password'        => 'required|min:6',
            'confirm_password'    => 'required_with:new_password|same:new_password',
        ]);
        $manager = Manager::where(['id'=>$request->id])->first();
        if(!$manager || !Hash::check($request->current_password, $manager->password)){
            $invalid = "Invalid Current password";
            $managerId = Session::get('manager')['id'];
            $managers = Manager::find($managerId);
            return view('manager.profile',['manager'=>$clients,'msgsucc'=>$invalid]);
        }else{
            $manager->password = Hash::make($request->confirm_password);
            $manager->save();
            
            $clientLog = new ClientLog;
            $clientLog->client_id = $manager->client_id;
            $clientLog->date = date('Y-m-d');
            $clientLog->activity = "Manager Change Password";
            $clientLog->save();
            return redirect('/manager-logout');
        }
    }
    public function tableCount(Request $request){
        $client_pub_tables = ClientPubTable::where(['id'=>$request->id,'status'=>1])->first();
        return view('manager.tableCount',compact('client_pub_tables'));
    }
    public function orderTake($slug){
        $clientSlug = Session::get('client-slug');
        if($slug != $clientSlug){
            return view("error");
        }
        return view('manager.orderTake');
    }
    public function orderInfo($slug){
        $clientSlug = Session::get('client-slug');
        if($slug != $clientSlug){
            return view("error");
        }
        return view('manager.orderInfo');
    }
    public function billing($slug){
        $clientSlug = Session::get('client-slug');
        if($slug != $clientSlug){
            return view("error");
        }
        return view('manager.billing');
    }
}
