<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Exception;

class adminController extends Controller
{
    function login(Request $request){
       
        try {
            $user = User::where('email', $request->email)->first();
    
            if(!$user){
                return redirect()->back()->with('error', 'Admin not found!');
            }
    
            if(Hash::check($request->password, $user->password)){
                Auth::login($user);
                $request->session()->put('user', $user);
                return redirect()->route('dashboard.index');
            } else {
                return redirect()->back()->with('error', 'Invalid password');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Server Error(500)');
        }
    }

    function logout(){
        try {
            Auth::logout();
            Session::flush();
            return redirect()->route('login');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Server Error(500)');
        }
    }

    function dashboard(Request $request){
        try {
            $user = $request->session()->get('user');
            return view('home.dashboard', compact('user'));
        } catch (Exception $e) {
            return $e;
        }
    }

    //* pang create og admin
    function register(){
        $user = new User();

        $user->student_id = "2101103309";
        $user->name = "KHYLE IVAN KHIM V. AMACNA";
        $user->email = "AMACNA.KHYLE@gmail.com";
        $user->password = Hash::make("Labkoxena");
        $user->save();
    }
}
