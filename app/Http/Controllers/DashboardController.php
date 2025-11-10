<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        if($user->role === 'admin') {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('kasir.dashboard');
        }
    }

    public function admin()
    {
        return view('dashboard.admin');
    }

    public function kasir()
    {
        return view('dashboard.kasir');
    }




}
