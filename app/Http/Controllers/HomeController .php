<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('user.home');
    }

    public function managerDashboard()
    {
        return view('manager.manager_dashboard');
    }

    public function superAdminDashboard()
    {
        return view('super_admin.super_admin_dashboard');
    }
}