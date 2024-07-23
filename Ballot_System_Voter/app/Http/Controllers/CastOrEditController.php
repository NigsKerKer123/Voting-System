<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sbo;
use App\Models\ssc;
use App\Models\cast;
use App\Models\candidate;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Exception;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendCast;
use Illuminate\Support\Facades\Validator;

class CastOrEditController extends Controller
{
    function index(Request $request){
        try {
            $user = $request->session()->get('user');
            $sbo = sbo::where("student_id", $user->student_id)->first();
            $ssc = ssc::where("student_id", $user->student_id)->first();

            if(!$sbo){
                return redirect()->route('sbo.index')->with('error', 'please vote your SBO first');
            }
            if(!$ssc){
                return redirect()->route('ssc.index')->with('error', 'please vote your SSC first');
            }

            $governor = candidate::where("student_id", $sbo->governor)->first();
            $vice_governor = candidate::where("student_id", $sbo->vice_governor)->first();
            $secretary = candidate::where("student_id", $sbo->secretary)->first();
            $associate_secretary = candidate::where("student_id", $sbo->associate_secretary)->first();
            $treasurer = candidate::where("student_id", $sbo->treasurer)->first();
            $associate_treasurer = candidate::where("student_id", $sbo->associate_treasurer)->first();
            $auditor = candidate::where("student_id", $sbo->auditor)->first();
            $public_relation_officer = candidate::where("student_id", $sbo->public_relation_officer)->first();
            $second_rep = candidate::where("student_id", $sbo->{'2nd_year_rep'})->first();
            $third_rep = candidate::where("student_id", $sbo->{'3rd_year_rep'})->first();
            $fourth_rep = candidate::where("student_id", $sbo->{'4th_year_rep'})->first();

            $pres = candidate::where("student_id", $ssc->president)->first();
            $vice_pres = candidate::where("student_id", $ssc->vice_president)->first();
            
            $senators = [];

            if ($ssc->senators) {
                $senators_id = json_decode($ssc->senators);

                if ($senators_id) {
                    $senators = candidate::whereIn("student_id", $senators_id)->get();
                }
            }

            return view("castOrEdit", compact('user', 'ssc', 'governor', 'vice_governor', 'secretary', 'associate_secretary', 'treasurer', 'associate_treasurer', 'auditor', 'public_relation_officer', 'second_rep' ,'fourth_rep', 'third_rep', 'pres', 'vice_pres', 'senators'));

        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Server Error(500)');
        }
    }

    function cast(Request $request){
        try {
            $user = $request->session()->get('user');

            $checkCast = User::where('student_id', $user->student_id)->first();

            if($checkCast->cast == true){
                Auth::logout();
                Session::flush();
                return redirect()->route('goodbye')->with('error', 'You already Casted your Vote! Please check your email inbox or spam for your casted vote receipt!');
            }
            
            $sbo = sbo::where("student_id", $user->student_id)->first();
            $ssc = ssc::where("student_id", $user->student_id)->first();

            if (!$sbo || !$ssc) {
                return redirect()->back()->with('error', 'Data not found');
            }

            $governor = $sbo->governor ? candidate::where("student_id", $sbo->governor)->first() : null;
            $vice_governor = $sbo->vice_governor ? candidate::where("student_id", $sbo->vice_governor)->first() : null;
            $secretary = $sbo->secretary ? candidate::where("student_id", $sbo->secretary)->first() : null;
            $associate_secretary = $sbo->associate_secretary ? candidate::where("student_id", $sbo->associate_secretary)->first() : null;
            $treasurer = $sbo->treasurer ? candidate::where("student_id", $sbo->treasurer)->first() : null;
            $associate_treasurer = $sbo->associate_treasurer ? candidate::where("student_id", $sbo->associate_treasurer)->first() : null;
            $auditor = $sbo->auditor ? candidate::where("student_id", $sbo->auditor)->first() : null;
            $public_relation_officer = $sbo->public_relation_officer ? candidate::where("student_id", $sbo->public_relation_officer)->first() : null;
            $second_rep = $sbo->{'2nd_year_rep'} ? candidate::where("student_id", $sbo->{'2nd_year_rep'})->first() : null;
            $third_rep = $sbo->{'3rd_year_rep'} ? candidate::where("student_id", $sbo->{'3rd_year_rep'})->first() : null;
            $fourth_rep = $sbo->{'4th_year_rep'} ? candidate::where("student_id", $sbo->{'4th_year_rep'})->first() : null;

            $pres = $ssc->president ? candidate::where("student_id", $ssc->president)->first() : null;
            $vice_pres = $ssc->vice_president ? candidate::where("student_id", $ssc->vice_president)->first() : null;

            $senatorsFind = [];
            $senators = [];

            if ($ssc->senators) {
                $senators_id = json_decode($ssc->senators);

                if ($senators_id) {
                    $senatorsFind = candidate::whereIn("student_id", $senators_id)->get();
                }
            }
            
            foreach($senatorsFind as $senatorsFind){
                $senators[] = $senatorsFind->student_id;
            }

            $cast = new cast();

            // para dili mag pareha nag ref key
            do {
                $refkey = Str::random(16);
            } while ($cast::where('reference_key', $refkey)->exists());

            $cast->reference_key = $refkey;

            $cast->governor = $governor ? $governor->student_id : null;
            $cast->vice_governor = $vice_governor ? $vice_governor->student_id : null;
            $cast->secretary = $secretary ? $secretary->student_id : null;
            $cast->associate_secretary = $associate_secretary ? $associate_secretary->student_id : null;
            $cast->treasurer = $treasurer ? $treasurer->student_id : null;
            $cast->associate_treasurer = $associate_treasurer ? $associate_treasurer->student_id : null;
            $cast->auditor = $auditor ? $auditor->student_id : null;
            $cast->public_relation_officer = $public_relation_officer ? $public_relation_officer->student_id : null;
            $cast->{'2nd_year_rep'} = $second_rep ? $second_rep->student_id : null;
            $cast->{'3rd_year_rep'} = $third_rep ? $third_rep->student_id : null;
            $cast->{'4th_year_rep'} = $fourth_rep ? $fourth_rep->student_id : null;

            $cast->president = $pres ? $pres->student_id : null;
            $cast->vice_president = $vice_pres ? $vice_pres->student_id : null;
            $cast->senators = json_encode($senators);

            $decodedSenator = json_decode($cast->senators);

            try {
                $this->sendCast($user->college, $user->email, $cast->reference_key, $cast->governor, $cast->vice_governor, $cast->secretary, $cast->associate_secretary, $cast->treasurer, $cast->associate_treasurer, $cast->auditor, $cast->public_relation_officer, $cast->{'2nd_year_rep'}, $cast->{'3rd_year_rep'}, $cast->{'4th_year_rep'}, $cast->president, $cast->vice_president, $decodedSenator);
            } catch (Exception $e) {
                return redirect()->back()->with('error', "Unable to send vote receipt. Vote not cast! Please check your internet connection.");
            }
            
            $checkCast->cast = true;
            $cast->save();
            $checkCast->save();

            return redirect()->route("Auth.logout");
        } catch ( Exception $e) {
            return redirect()->back()->with('error', 'Server Error(500)');
        }
    }

    //send cast here!!
    function sendCast($college, $email, $refkey, $governor_id, $vice_governor_id, $secretary_id, $associate_secretary_id, $treasurer_id, $associate_treasurer_id, $auditor_id, $public_relation_officer_id, $second_rep_id, $third_rep_id, $fourth_rep_id, $president_id, $vice_president_id, $senators_id){
            $gov = candidate::where("student_id", $governor_id)->first();
            $vice_gov = candidate::where("student_id", $vice_governor_id)->first();
            $sec = candidate::where("student_id", $secretary_id)->first();
            $ass_sec = candidate::where("student_id", $associate_secretary_id)->first();
            $tres = candidate::where("student_id", $treasurer_id)->first();
            $ass_tres = candidate::where("student_id", $associate_treasurer_id)->first();
            $audit = candidate::where("student_id", $auditor_id)->first();
            $pub_rel = candidate::where("student_id", $public_relation_officer_id)->first();
            $second = candidate::where("student_id", $second_rep_id)->first();
            $third = candidate::where("student_id", $third_rep_id)->first();
            $fourth = candidate::where("student_id", $fourth_rep_id)->first();

            $pres = candidate::where("student_id", $president_id)->first();
            $vice_pres = candidate::where("student_id", $vice_president_id)->first();
            $senators = candidate::whereIn("student_id", $senators_id)->get();

            $senatorsArray = [];

            foreach($senators as $senatorsData){
                $senatorsArray[] = $senatorsData->name;
            }
            
            $govName = optional($gov)->name ?? 'No candidate selected';
            $viceGovName = optional($vice_gov)->name ?? 'No candidate selected';
            $secName = optional($sec)->name ?? 'No candidate selected';
            $assSecName = optional($ass_sec)->name ?? 'No candidate selected';
            $tresName = optional($tres)->name ?? 'No candidate selected';
            $assTresName = optional($ass_tres)->name ?? 'No candidate selected';
            $auditName = optional($audit)->name ?? 'No candidate selected';
            $pubRelName = optional($pub_rel)->name ?? 'No candidate selected';
            $secondName = optional($second)->name ?? 'No candidate selected';
            $thirdName = optional($third)->name ?? 'No candidate selected';
            $fourthName = optional($fourth)->name ?? 'No candidate selected';
            $presName = optional($pres)->name ?? 'No candidate selected';
            $vicePresName = optional($vice_pres)->name ?? 'No candidate selected';

            Mail::to($email)->send(new sendCast(
                $college,
                $refkey,
                $govName,
                $viceGovName,
                $secName,
                $assSecName,
                $tresName,
                $assTresName,
                $auditName,
                $pubRelName,
                $secondName,
                $thirdName,
                $fourthName,
                $presName,
                $vicePresName,
                $senatorsArray));
    }
}
