<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(){

        return view('login.index');
    }

    public function verify(Request $req){

        $user = DB::table('user_table')
                    ->where('password', $req->password)
                    ->where('username', $req->username)
                    ->get();

        if($req->username == "" || $req->password == ""){
           $req->session()->flash('msg', 'null username or password...');
           return redirect('/login');

        }elseif(count($user) > 0 ){

             $req->session()->put('username', $req->username);
            //  $role = $user->role;
            //  if(role == "admin"){
            //     return redirect('/admin');
            //  }
            //  else{
            //      return redirect('/customer');
            //  }
            return redirect('/system/sales');   
        }else{

            $req->session()->flash('msg', 'Invalid username or password...');
            return redirect('/login');
        }
    }
}
