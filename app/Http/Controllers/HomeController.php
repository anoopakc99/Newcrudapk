<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class HomeController extends Controller
{
    public function ind()
    {
        $role = Auth::user()->role;
        if($role=='1')
        {
            return view('admin.dashboard');
           
        }
        else{
            return view('dashboard');
        }
    }
}
