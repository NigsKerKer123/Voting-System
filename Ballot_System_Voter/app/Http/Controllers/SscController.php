<?php

namespace App\Http\Controllers;

use App\Models\candidate;
use App\Models\ssc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Exception;

class SscController extends Controller
{
    function index(Request $request){
        try {
            $user = $request->session()->get('user');
            $sbo_id = "ORG27083";
            $candidate = candidate::where('organization_id', $sbo_id)->get();
            
            return view('SSC_Vote.index', compact('candidate'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Server Error(500)');
        }
    }

    function vote(Request $request){
        try {
            $user = $request->session()->get('user');

            $validator = Validator::make($request->all(), [
                'president' => 'exists:candidates,student_id',
                'vicePresident' => 'exists:candidates,student_id',
                'senator.*' => 'exists:candidates,student_id',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('error', 'manghilabot pajud ka ha');
            }
            
            $checkSSC = ssc::where('student_id', $user->student_id)->first();

            if($checkSSC){
                $checkSSC->delete();
            }
            
            $ssc = new ssc();
            $ssc->student_id = $user->student_id;
            $ssc->name = $user->name;
            $ssc->president = $request->president;
            $ssc->vice_president = $request->vicePresident;
            $ssc->senators = json_encode($request->senator);
            $ssc->save();
            return redirect()->route('castOrEdit.index');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Server Error(500)');
        }
    }
}
