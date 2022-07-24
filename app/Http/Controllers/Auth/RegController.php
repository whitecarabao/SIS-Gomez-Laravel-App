<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class RegController extends Controller
{
    public function registration(){
        return view('auth.registration');
    }

    public function index(){
        return view('auth.login');
    }

    public function postLogin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();
            return redirect()->intended('studentList');
                       
        }
  
        return redirect()->to(url('login'))->withErrors('Oops! You have entered invalid credentials');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => $data['password'] //note: no hashing is needed. Laravel does it automatically., 
      ]);

      
    }
    
    public function register(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $reqMkr = $request->all();
        $chk = $this->create($reqMkr);

        return redirect('studentList')->withSuccess('Your account was successfully registered!');
    }

    
    public function studentDash(){
        if(Auth::check()){
            return redirect('students/all');
        }
        else{
            return redirect('login')->withErrors('You must be logged in to view this page!');
        }
    }

    public function logout(){
        Session::flush();
        Auth::logout();
    

        return redirect('login')->withSuccess('You have been logged out!');
    }
}
