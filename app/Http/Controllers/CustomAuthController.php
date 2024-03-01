<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class CustomAuthController extends Controller
{

    use AuthenticatesUsers;
  
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home';

    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }
    
    public function index()
    {
        if(!Auth::check()){
            return view('auth.login');
        } else {

            return redirect("company-registry")->withSuccess('You have signed-in');
        }
        
    } 

    public function iisLogin($username, $password, $id_number, $email , $token)
    {
        // http://127.0.0.1:8000/api/login/iis/ebcreencia/$2y$10$TWs46asy8HUoJWUeDyhcEODCIES96vmFSYRsYQRXCB0lDyWRaLw0a/EMBCO-202104667/eric.creencia25@gmail.com/466760e6a6104f0cf
        $check = DB::table('users')->where([
            ['email', $email],
            ['password', $password],
            ['iis_token', $token],
        ])->first();


        if(!empty($check))
        {
            Session::put('username', $username);
            Session::put('password', $password);
            Session::put('id_number', $id_number);
            Session::put('email', $email);
            Session::put('token', $token);

            return redirect('iis-login');

            // if(auth()->user()->type == 1) {
            //     return redirect('company-registry')
            //     ->withSuccess('Signed in');
            // } else if(auth()->user()->type == 2) {
            //     return redirect('/manager/dashboard')
            //     ->withSuccess('Signed in');
            // }
        } else {
            Session::put('username', $username);
            Session::put('password', $password);
            Session::put('id_number', $id_number);
            Session::put('email', $email);
            Session::put('token', $token);

            return redirect('iis-confirmation');
            // dd('Login details are not valid.');
            // return redirect()->route('login')->with('error','Login details are not valid.');
        }
    }


    public function loginIISaccount(Request $request)
    {
        $username = Session::get('username');
        $password = $request->password; 
        $id_number = Session::get('id_number');
        $email = Session::get('email');
        $iis_token = Session::get('token');

        if(auth()->attempt(array('email' => $email, 'password' => $password, 'iis_token' => $iis_token)))
        {
            $now = new \DateTime();

            $data = DB::table('users')
            ->where('id', auth()->user()->id)
            ->update([
                'last_seen' => $now->format('Y-m-d H:i:s')
            ]);


            if(auth()->user()->type == 1) {
                return redirect('company-registry')
                ->withSuccess('Signed in');
            } else if(auth()->user()->type == 2) {
                return redirect('/admin/dashboard')
                ->withSuccess('Signed in');
            } else if(auth()->user()->type == 3) {
                return redirect('/rd/dashboard')
                ->withSuccess('Signed in');
            }
        } else {
            Session::put('username', $username);
            Session::put('password', $password);
            Session::put('id_number', $id_number);
            Session::put('email', $email);
            Session::put('token', $token);

            return redirect('iis-confirmation');
        }
    }
      
    public function customLogin(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
   
        // $credentials = $request->only('email', 'password');

        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            $now = new \DateTime();

            $data = DB::table('users')
            ->where('id', auth()->user()->id)
            ->update([
                'last_seen' => $now->format('Y-m-d H:i:s')
            ]);

            if(auth()->user()->type == 1) {
                return redirect('company-registry')
                ->withSuccess('Signed in');
            } else if(auth()->user()->type == 2) {
                return redirect('/admin/dashboard')
                ->withSuccess('Signed in');
            } else if(auth()->user()->type == 3) {
                return redirect('/rd/dashboard')
                ->withSuccess('Signed in');
            }
        } else {
            return redirect()->route('login')->with('error','Login details are not valid.');
        }
  
        
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function createIISaccount(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        $id_number = $request->id_number;
        $email = $request->email;
        $remember_token = $request->iis_token;
        $now = new \DateTime();

        $data = DB::table('users')->insert([
            'id_number' => $id_number,
            'username' => $username,
            'password' => $password,
            'iis_token' => $remember_token,
            'email' => $email,
            'created_at' => $now->format('Y-m-d H:i:s'),
            'updated_at' => $now->format('Y-m-d H:i:s'),
        ]);


        return 'success';

    }
      
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("company-registry")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }

    public function editProfile(Request $request)
    {
        $middlename = isset($request->middlename) ? ' ' . $request->middlename . ' ' : ' ';
        $name = $request->firstname . $middlename . $request->lastname;
        
        $data = DB::table('users')->where('id_number', $request->id_number)
        ->update([
            'username' => $request->username,
            'first_name' => $request->firstname,
            'middle_name' => $request->middlename,
            'last_name' => $request->lastname,
            'email' => $request->email,
            'type' => $request->type,
            'name' => $name
        ]);

        if($data){
            return 'success';
        }
    }


    public function getUserList(Request $request) 
    {

        $data = DB::table('users')
            ->whereNot('id', auth()->user()->id)
            ->get();

        return DataTables::of($data)
            ->addColumn('name', function ($data) {
                $details = '<em><b><p class="text">' . $data->name . '</a></b></em>';
                return $details;
            })
            ->addColumn('user_type', function ($data) {
                if($data->type == 1) {
                    $type = 'user';
                } elseif($data->type == 2) {
                    $type = 'admin';
                } elseif($data->type == 3) {
                    $type = 'regional director';
                } else {
                    $type = 'unknown';
                }
                $details = $type;
                return $details;
            })
            ->addColumn('email', function ($data) {
                $details = $data->email;
                return $details;
            })
            ->addColumn('last_activity', function ($data) {
                $details = date("M d, Y h:i a", strtotime($data->last_seen));
                return $details;
            })
            ->addColumn('status', function ($data) {
                if($data->active == 1) {
                    $status = '<span class="badge badge-success">Active</span>';
                } else {
                    $status = '<span class="badge badge-danger">Deactive</span>';
                }
                
                return $status;
            })
            ->addColumn('action', function ($data) {
                $details = '<button type="button" class="btn btn-outline-secondary" onclick="editAccount('.$data->id.')"><i class="fa-solid fa-user"></i></button>';

                $details .= '<button type="button" class="btn btn-outline-secondary" onclick="resetPassword('.$data->id.')"><i class="fa-solid fa-key"></i></button>';

                return $details;
            })
            ->rawColumns(['name', 'user_type', 'email','action', 'status'])
            ->make(true);
    }


    public function getAcount(Request $request)
    {
        $data = DB::table('users')
        ->where('id', $request->id)
        ->first();

        return $data;
    }

    public function editUser(Request $request)
    {
        $now = new \DateTime();

        $middle_name = isset($request->middle_name) ? $request->middle_name . ' ' : '';
        $name = Str::ucfirst($request->first_name) . ' ' . Str::ucfirst($middle_name)  . Str::ucfirst($request->last_name);

        try {
            $data = DB::table('users')
                ->where('id', $request->user_id)
                ->update([
                    'first_name' => Str::ucfirst($request->first_name),
                    'middle_name' => Str::ucfirst($request->middle_name),
                    'last_name' => Str::ucfirst($request->last_name),
                    'name' => $name,
                    'type' => $request->user_type,
                    'email' => $request->email,
                    'id_number' => $request->emb_id,
                    'active' => $request->user_status,
                    'updated_at' => $now->format('Y-m-d H:i:s')
                ]);

                return 'success';

            } catch (\Throwable $e) {
                report($e);

                return false;
            }
    }
}