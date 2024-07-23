<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Mail\sendPasskey;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    function index(){
        return view('Auth.login');
    }

    function forgotPasskey(Request $request){
        return view('Auth.passkey');
    }

    function login(Request $request){
        try {
            $user = User::where('student_id', $request->student_id)->first();

            if(!$user){
                return redirect()->back()->with('error', 'Voter not found!');
            }

            if($user->cast){
                return redirect()->route('Auth.index')->with('error', 'You already cast your vote!');
            }
    
            $hashedPasskey = Hash::make($request->passkey);
    
            if(Hash::check($request->passkey, $user->passkey)){
                Auth::login($user);
                $request->session()->put('user', $user);
                return view('welcome', compact('user'));
            } else {
                return redirect()->back()->with('error', 'Invalid passkey');
            }
        } catch (Exception $e) {
            return $e;
            return redirect()->back()->with('error', 'Server Error(500)');
        }
    }

    function welcome(Request $request){
        try {
            $user = $request->session()->get('user');
        
            if($user){
                $student_id = $user->student_id;
        
                return view('welcome', ['user' => $user]);
            } else {
                return redirect()->route('Auth.index')->with('error', 'Voter not found');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Server Error(500)');
        }
    }

    function logout(){
        try {
            Auth::logout();
            Session::flush();
            return redirect()->route('goodbye');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Server Error(500)');
        }
    }

    function sendPasskey(Request $request){
        try {
            $user = User::where('student_id', $request->student_id)->first();

            if(!$user){
                return redirect()->back()->with('error', 'student ID not found!');
            }

            if($user->cast == true){
                return redirect()->back()->with('error', 'You already casted your vote!');
            }

            $name = $user->name;
            $student_id = $user->student_id;

            do{
                $passkey = $user->college . Str::random(6);
            }while($user::where('passkey', $passkey)->exists());

            Mail::to($user->email)->send(new sendPasskey($student_id, $name ,$passkey));

            $user->passkey = Hash::make($passkey);
            $user->save();
            return redirect()->back()->with('success', 'Email sent to ' . $user->email . " and also please check your spam mails");
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Unable to sent Mail!');
        }
    }
}
