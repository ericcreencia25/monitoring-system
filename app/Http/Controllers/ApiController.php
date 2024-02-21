<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class ApiController extends Controller
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

    public function unknownType()
    {
        return view('no_user_type.home');
    }

    
}