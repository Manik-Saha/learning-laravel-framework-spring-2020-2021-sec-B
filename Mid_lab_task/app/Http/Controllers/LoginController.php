<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller{
    public function index(){

        return view('login.index');
    }

    public function verify(UserRequest $req){

        $admin = DB::table('admin')
                ->where('password', $req->password)
                ->where('email', $req->email)
                ->get();
        $customer = DB::table('customers')
                           ->where('password', $req->password)
                           ->where('email', $req->email)
                           ->get();
       $vendor = DB::table('vendor')
                           ->where('password', $req->password)
                           ->where('email', $req->email)
                           ->get();
        $accoutant = DB::table('accoutant')
                                      ->where('password', $req->password)
                                      ->where('email', $req->email)
                                      ->get();

        if($req->email == "" || $req->password == ""){
           $req->session()->flash('msg', 'null username or password...');
           return redirect('/login');

        }
        elseif(count($customer) > 0 ){
            $req->session()->put('email', $req->email);
            return redirect()->route('customers.dashboard');
               
        }
        elseif(count($admin) > 0 ){
            $req->session()->put('email', $req->email);
            return redirect()->route('admin.dashboard');

        }
        elseif(count($vendor) > 0 ){
            $req->session()->put('email', $req->email);
            return redirect()->route('vendor.dashboard');
               
        }
        elseif(count($accoutant) > 0 ){
            $req->session()->put('email', $req->email);
            return redirect()->route('accoutant.dashboard');

        }
        else{
            $req->session()->flash('msg', 'Invalid username or password...');
            return redirect('/login');
        }
    }
}