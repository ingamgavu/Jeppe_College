<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
{
    //
    function index(){
        if(Auth::user()->hasRole('user')){
            return view('userdash');
        }elseif(Auth::user()->hasRole('Admin')){
            return view('admindash');
        }elseif(Auth::user()->hasRole('superadministrator')){
            return view('dashboard');
        }
    }
}
