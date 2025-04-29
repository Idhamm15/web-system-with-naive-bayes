<?php

namespace App\Http\Controllers\Auth;

// use App\Http\Controllers\Controller\Auth\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $input = $request->all();
        // dd($request->all());
        $this->validate($request,[
            'username'=>'required|string',
            'password'=>'required'
        ]);
        if(auth()->attempt(['username'=>$input['username'], 'password'=>$input['password']]))
        {
            if(auth()->user()->role == 'ADMIN' || auth()->user()->role == 'SUPER ADMIN')
            {
                return redirect('/');
            }
            else
            {
                return redirect('/');
            }
        }
        else
        {
            return redirect()->back()->with('login_error', 'Username atau Password Anda salah!');
        }
    }
}
