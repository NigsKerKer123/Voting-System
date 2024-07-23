<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;

class votesController extends Controller
{
    function ssc(Request $request){
        try{
            $user = $request->session()->get('user');
            return view('home.sscVotes', compact('user'));
        }catch(Exception $e){
            return redirect()->back()->with('error', 'Server Error(500)');
        }
    }

    function sbo(Request $request){
        try{
            $user = $request->session()->get('user');
            return view('home.sboVotes', compact('user'));
        }catch(Exception $e){
            return redirect()->back()->with('error', 'Server Error(500)');
        }
    }
}
