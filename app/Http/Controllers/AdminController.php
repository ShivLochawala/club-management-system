<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Client;
use App\Models\ClientPayment;
use App\Models\ClientSetting;
use App\Models\ClientLog;
use App\Models\ClientSupport;
use App\Models\AdminSetting;
use Illuminate\Support\Str;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Session;

class AdminController extends Controller
{
    public function login(){
        if(session()->has('admin')){
            return redirect('/dashboard');
        }else{
            $invalid = '';
            return view('login',['invalid'=>$invalid]);
        }
    }
    public function loginAdmin(Request $request){
        $validatedData = $request->validate([
            'email'    => 'required|email',
            'password' => 'required|min:6'
        ],[
            'email.required'=> 'Email ID is required',
            'password.required' => 'Password is required'
        ]);
        $admin = Admin::where(['email'=>$request->email])->first();
        if(!$admin || !Hash::check($request->password, $admin->password)){
            $invalid = "Invalid Email id or password";
            return view('login',['invalid'=>$invalid]);
        }else{
            $request->session()->put('admin',$admin);
            return redirect('/dashboard');
        }
    }
    public function home(){
        if(session()->has('admin')){
            $clients = Client::all();
            $numberOfClients = Client::all()->count();
            $numberOfActiveClients = Client::where('status','1')->count();
            return view('dashboard',compact('clients','numberOfClients','numberOfActiveClients'));
            //return view('dashboard');
        }else{
            $invalid = '';
            return redirect('/superadmin');
        }
    }
    public function logout(){
        Session::flush();
        Session::forget('admin');
        return redirect('/superadmin');
    }
    public function clientAddGet(){
        $msgsucc = '';
        return view('clientAdd',['msgsucc'=>$msgsucc]);
    }
    public function clientAddPost(Request $request){
        $validatedData = $request->validate([
            'company_name'    => 'required',
            'first_name'      => 'required',
            'last_name'       => 'required',
            'address'         => 'required',
            'country'         => 'required',
            'state'           => 'required',
            'city'            => 'required',
            'postal_code'     => 'required|min:6|max:6',
            'email'           => 'required|email',
            'phone'           => 'required',
            'mobile'          => 'required|min:10|max:10',
            'date'            => 'required',
            'password'        => 'required|min:6',
        ]);
        $id = IdGenerator::generate(['table' => 'clients', 'length' => 6, 'prefix' =>'CL-']);
        $clients = new Client;
        $clients->id = $id;
        $clients->company_name = $request->company_name;
        $clients->first_name = $request->first_name;
        $clients->last_name = $request->last_name;
        $clients->address = $request->address;
        $clients->country = $request->country;
        $clients->state = $request->state;
        $clients->city = $request->city;
        $clients->postal_code = $request->postal_code;
        $clients->email = $request->email;
        $clients->phone = $request->phone;
        $clients->mobile = $request->mobile;
        $clients->slug = Str::slug($request->company_name);
        $clients->status = 1;
        $clients->password = Hash::make($request->password);
        $clients->renewal_date = $request->date;
        $clients->save();
        return view('clientAdd',['msgsucc'=>"Add Client Successfully"]);
    }
    public function clientDetails(){
        $clients = Client::all();
        return view('clientDetails',compact('clients'));
    }
    public function clientView($slug){
        $clients = Client::where(['slug'=>$slug])->first();
        $expired_date = $clients->expiring_date;
        $current_date = date('Y-m-d');
        $diff = strtotime($expired_date) - strtotime($current_date);
        $days = abs(round($diff / 86400));  
        return view('clientView',['clients'=>$clients,'days'=>$days]);
    }
    public function clientEdit($slug){
        $clients = Client::where(['slug'=>$slug])->first();
        $msgsucc = '';
        return view('clientEdit',['clients'=>$clients,'msgsucc'=>$msgsucc]);
    }
    public function clientEditing(Request $request){
        $validatedData = $request->validate([
            'company_name'    => 'required',
            'first_name'    => 'required',
            'last_name'    => 'required',
            'address'    => 'required',
            'country'    => 'required',
            'state'    => 'required',
            'city'    => 'required',
            'postal_code'    => 'required|min:6|max:6',
            'email'    => 'required|email',
            'phone'    => 'required',
            'mobile'    => 'required|min:10|max:10',
            'status'    => 'required',
        ]);
        $clients = Client::where(['id'=>$request->id])->first();
        $clients->company_name = $request->company_name;
        $clients->first_name = $request->first_name;
        $clients->last_name = $request->last_name;
        $clients->address = $request->address;
        $clients->country = $request->country;
        $clients->state = $request->state;
        $clients->city = $request->city;
        $clients->postal_code = $request->postal_code;
        $clients->email = $request->email;
        $clients->phone = $request->phone;
        $clients->mobile = $request->mobile;
        $clients->status = $request->status;
        $clients->slug = Str::slug($request->company_name);
        $clients->save();
        return view('clientEdit',['clients'=>$clients,'msgsucc'=>'Edit Details Successfully']);
    }
    public function clientExtentValidity(Request $request){
        $clients = Client::find($request->client_id); 
        $date = $clients->renewal_date;
        $days = $clients->days + $request->days;
        $expiring_date = date('Y-m-d', strtotime($date. ' + '.$days.' days'));
        $client = Client::find($request->client_id);
        $client->renewal_date = $date;
        $client->days = $days;
        $client->expiring_date = $expiring_date;
        $client->save();
        return back();
    }
    public function clientLog(){
        $clients = Client::all();
        $client_log = ClientLog::all();
        return view('clientLog',['clients'=>$clients,'client_logs'=>$client_log]);
    }
    public function clientPayment(){
        $clients = Client::all();
        $client_payment = ClientPayment::all();
        $msgsucc = '';
        return view('clientPayment',['clients'=>$clients,'client_payments'=>$client_payment, 'msgsucc'=>$msgsucc]);
    }
    public function clientPaymenting(Request $request){
        $validatedData = $request->validate([
            'client_id'            => 'required',
            'payment_method'       => 'required',
            'invoice_amount'       => 'required',
            'confirm_amount'       => 'required_with:invoice_amount|same:invoice_amount',
            'payment_ref_number'   => 'required',
            'renewal_duration'    => 'required',
            'date'                 => 'required',
        ],[
            'client_id.required' => "The Company Name field is required",
        ]);
        $date = $request->date;
        $days = $request->renewal_duration;
        $expiring_date = date('Y-m-d', strtotime($date. ' + '.$days.' days'));
        $client = Client::find($request->client_id);
        $client->renewal_date = $date;
        $client->days = $days;
        $client->expiring_date = $expiring_date;
        $client->save();
        $client_payment = new ClientPayment;
        $client_payment->client_id = $request->client_id;
        $client_payment->payment_method = $request->payment_method;
        $client_payment->invoice_amount = $request->invoice_amount;
        $client_payment->payment_ref_number = $request->payment_ref_number;
        $client_payment->renewal_duration = $request->renewal_duration;
        $client_payment->date = $request->date;
        $client_payment->save();
        $clients = Client::all();
        $client_payment = ClientPayment::all();
        return view('clientPayment',['clients'=>$clients,'client_payments'=>$client_payment,'msgsucc'=>'Payment Details Add Successfully']);
    }
    public function clientSetting(){
        $clients = Client::all();
        $client_settings = ClientSetting::all();
        $msgsucc = '';
        return view('clientSetting',['clients'=>$clients, 'client_settings'=>$client_settings,'msgsucc'=>$msgsucc]);
    }
    public function clientSettinging(Request $request){
        $validatedData = $request->validate([
            'client_id'       => 'required',
            'system_name'     => 'required',
            'logo_light'      => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'logo_dark'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'fav_icon'        => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ],[
            'client_id.required' => "The Company Name field is required",
        ]);
        $logolightName = time().'.'.$request->logo_light->extension();  
        $request->logo_light->storeAs('public/logo_light', $logolightName);

        $logodarkName = time().'.'.$request->logo_dark->extension();  
        $request->logo_dark->storeAs('public/logo_dark', $logodarkName);

        $faviconName = time().'.'.$request->fav_icon->extension();  
        $request->fav_icon->storeAs('public/fav_icon', $faviconName);

        $client_setting = new ClientSetting;
        $client_setting->client_id = $request->client_id;
        $client_setting->system_name = $request->system_name;
        $client_setting->logo_light = $logolightName;
        $client_setting->logo_dark = $logodarkName;
        $client_setting->fav_icon = $faviconName;
        $client_setting->smtp_details = $request->smtp_details;
        $client_setting->save();

        if($request->slug != ""){
            $client = Client::where(['id'=>$request->client_id])->first();
            $client->slug = Str::slug($request->slug);
            $client->save();
        }
        $clients = Client::all();
        $client_settings = ClientSetting::all();
        return view('clientSetting',['clients'=>$clients, 'client_settings'=>$client_settings,'msgsucc'=>'Client Setting Details Add Successfully']);
    }
    public function supportView(){
        $clients = Client::all();
        $client_supports = ClientSupport::all();
        return view('support',['clients'=>$clients,'client_supports'=>$client_supports]);
    }
    public function supportViewing($id){
        $clients = Client::all();
        $client_supports = ClientSupport::find($id);
        $msgsucc = '';
        return view('supportView',['clients'=>$clients,'client_supports'=>$client_supports, 'msgsucc'=>$msgsucc]);
    }
    public function supportReply(Request $request){
        $validatedData = $request->validate([
            'admin_subject'       => 'required',
            'admin_description'     => 'required',
        ],[
            'admin_subject.required' => "The Subject field is required",
            'admin_description.required' => "The Description field is required",
        ]);
        $client_supports = ClientSupport::find($request->id);
        $client_supports->admin_subject = $request->admin_subject;
        $client_supports->admin_description = $request->admin_description;
        $client_supports->status = 1;
        $client_supports->save();
        $clients = Client::all();
        return view('supportView',['clients'=>$clients,'client_supports'=>$client_supports, 'msgsucc'=>'Reply Successfully']);
    }
    public function profileView(){
        $adminId = Session::get('admin')['id'];
        $admin = Admin::find($adminId)->first();
        $msgsucc = '';
        return view('profile',['admin'=>$admin,'msgsucc'=>$msgsucc]);
    }
    public function profileChangePassword(Request $request){
        $validatedData = $request->validate([
            'current_password'    => 'required',
            'new_password'        => 'required|min:6',
            'confirm_password'    => 'required_with:new_password|same:new_password',
        ]);
        $admin = Admin::where(['id'=>$request->id])->first();
        if(!$admin || !Hash::check($request->current_password, $admin->password)){
            $invalid = "Invalid Current password";
            $adminId = Session::get('admin')['id'];
            $admins = Admin::find($adminId)->first();
            return view('profile',['admin'=>$admins,'msgsucc'=>$invalid]);
        }else{
            $admin->password = Hash::make($request->confirm_password);
            $admin->save();
            return redirect('/logout');
        }
    }
    public function settings(){
        $adminId = Session::get('admin')['id'];
        $admin_setting = (AdminSetting::where(['admin_id'=>$adminId])->first())?AdminSetting::find($adminId)->first():"Not";
        $msgsucc = '';
        return view('setting',['admin_setting'=>$admin_setting,'msgsucc'=>$msgsucc]);
    }
    public function settingsPost(Request $request){
        $validatedData = $request->validate([
            'system_name'     => 'required',
            'title'           => 'required',
            'description'     => 'required',
            'footer'          => 'required',
            'logo_light'      => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'logo_dark'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'fav_icon'        => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ]);
        $logolightName = time().'.'.$request->logo_light->extension();  
        $request->logo_light->storeAs('public/logo_light', $logolightName);

        $logodarkName = time().'.'.$request->logo_dark->extension();  
        $request->logo_dark->storeAs('public/logo_dark', $logodarkName);

        $faviconName = time().'.'.$request->fav_icon->extension();  
        $request->fav_icon->storeAs('public/fav_icon', $faviconName);
        
        $adminId = Session::get('admin')['id'];
        $admin_setting = new AdminSetting;
        $admin_setting->admin_id = $adminId;
        $admin_setting->system_name = $request->system_name;
        $admin_setting->title = $request->title;
        $admin_setting->description = $request->description;
        $admin_setting->footer = $request->footer;
        $admin_setting->logo_light = $logolightName;
        $admin_setting->logo_dark = $logodarkName;
        $admin_setting->fav_icon = $faviconName;
        $admin_setting->smtp_details = $request->smtp_details;
        $admin_setting->save();

        $adminId = Session::get('admin')['id'];
        $admin_setting = AdminSetting::find($adminId)->first();
        return view('setting',['admin_setting'=>$admin_setting,'msgsucc'=>'Admin Setting Details Add Successfully']);
    }
    public function settingEdit($id){
        $adminId = $id;
        $admin_setting = (AdminSetting::where(['admin_id'=>$adminId])->first())?AdminSetting::find($adminId)->first():"Not";
        $msgsucc = '';
        return view('settingEdit',['admin_setting'=>$admin_setting,'msgsucc'=>$msgsucc]);
    }
    public function settingEditing(Request $request){
        $validatedData = $request->validate([
            'system_name'     => 'required',
            'title'           => 'required',
            'description'     => 'required',
            'footer'          => 'required',
        ]);
        $adminSettings = AdminSetting::where(['admin_id'=>$request->id])->first();
        if($request->logo_light != ""){
            $logolightName = time().'.'.$request->logo_light->extension();  
            $request->logo_light->storeAs('public/logo_light', $logolightName);
        }else{
            $logolightName = $adminSettings->logo_light;
        }

        if($request->logo_dark != ""){
            $logodarkName = time().'.'.$request->logo_dark->extension();  
            $request->logo_dark->storeAs('public/logo_dark', $logodarkName);
        }else{
            $logodarkName = $adminSettings->logo_dark;
        }

        if($request->fav_icon != ""){
            $faviconName = time().'.'.$request->fav_icon->extension();  
            $request->fav_icon->storeAs('public/fav_icon', $faviconName);
        }else{
            $faviconName = $adminSettings->fav_icon;
        }
        $adminId = Session::get('admin')['id'];
        $admin_setting = AdminSetting::where(['admin_id'=>$request->id])->first();
        $admin_setting->system_name = $request->system_name;
        $admin_setting->title = $request->title;
        $admin_setting->description = $request->description;
        $admin_setting->footer = $request->footer;
        $admin_setting->logo_light = $logolightName;
        $admin_setting->logo_dark = $logodarkName;
        $admin_setting->fav_icon = $faviconName;
        $admin_setting->smtp_details = $request->smtp_details;
        $admin_setting->save();

        $adminId = Session::get('admin')['id'];
        $admin_setting = AdminSetting::find($adminId)->first();
        return view('settingEdit',['admin_setting'=>$admin_setting,'msgsucc'=>'Admin Setting Details Edited Successfully']);
    }
}   
