<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;
use App\Models\User;

class RegistrstionController extends Controller
{
    public function index(){
        return view('registration.index');
    }

    public function store(Request $req){
        $user = new User();
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
        return redirect('/login');
    }
}
