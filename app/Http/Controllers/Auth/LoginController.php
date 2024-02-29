<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function customLogin(Request $request)
    {   
        $input = $request->all();
     
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
     
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            $now = new \DateTime();

            $data = DB::table('users')
            ->where('id', auth()->user()->id)
            ->update([
                'last_seen' => $now->format('Y-m-d H:i:s')
            ]);

            
            if (auth()->user()->type == 'super-admin') {
                return redirect()->route('super.admin.dashboard');
            }else if (auth()->user()->type == 'manager') {
                return redirect()->route('manager.dashboard');
            }else{
                return redirect()->route('company-registry');
            }
        }else{
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }
          
    }
}