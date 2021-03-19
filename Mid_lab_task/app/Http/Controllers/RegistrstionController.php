<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use App\Models\Admin;
use App\Models\Customer;
use App\Models\Accoutant;
use App\Models\Vendor;
use App\Models\SalesMarketingPerson;

class RegistrstionController extends Controller
{
    public function index(){
        return view('registration.index');
    }

    public function store(RegistrationRequest $req){
        if($req->password == $req->Cpassword){
            if($req->role == 'customer'){
                $user = new Customer();
                $user->username     = $req->username;
                $user->fullname     = $req->fullname;
                $user->password     = $req->password;
                $user->address      = $req->address;
                $user->email         = $req->email;
                $user->phone         = $req->phone;
                $user->company_name  = $req->company;
                $user->city          = $req->city;
                $user->country       = $req->country;
                $user->role       = $req->role;
                $user->save();
                $req->session()->flash('msg', 'Registered Successfully');
                return redirect()->route('registration');
            }
            elseif($req->role == 'accoutant'){
                $user = new Accoutant();
                $user->username     = $req->username;
                $user->fullname     = $req->fullname;
                $user->password     = $req->password;
                $user->address      = $req->address;
                $user->email         = $req->email;
                $user->phone         = $req->phone;
                $user->company_name  = $req->company;
                $user->city          = $req->city;
                $user->country       = $req->country;
                $user->role       = $req->role;
                $user->save();
                $req->session()->flash('msg', 'Registered Successfully');
                return redirect()->route('registration');
            }
            elseif($req->role == 'sales & marketing'){
                $user = new SalesMarketingPerson();
                $user->username     = $req->username;
                $user->fullname     = $req->fullname;
                $user->password     = $req->password;
                $user->address      = $req->address;
                $user->email         = $req->email;
                $user->phone         = $req->phone;
                $user->company_name  = $req->company;
                $user->city          = $req->city;
                $user->country       = $req->country;
                $user->role       = $req->role;
                $user->save();
                $req->session()->flash('msg', 'Registered Successfully');
                return redirect()->route('registration');
            }
            else{
                return redirect('/login');
            }
        }
        else{
            $req->session()->flash('msg', 'password and confirm password do not match');
            return redirect()->route('registration');
        }


    }
}
