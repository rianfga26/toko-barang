<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function invoices(){
        return view('admin.invoices');
    }

    public function catalog(){
        return view('admin.catalog');
    }

    public function customer(){
        return view('admin.customer');
    }
}
