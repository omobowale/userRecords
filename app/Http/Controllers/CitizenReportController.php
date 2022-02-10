<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Input;
use App\Models\Citizen;
use App\Models\State;
use App\Models\Ward;
use App\Models\Lga;

class CitizenReportController extends Controller
{
    public function index(Request $request) {
        $numberOfCitizens = count(Citizen::all());
        $states = State::all();
        $lgas = Lga::all();
        $wards = Ward::all();
        $numberOfCitizenInState = 0;
        $numberOfCitizenInLga = 0;
        $numberOfCitizenInWard = 0;
        $stateNum = 0;
        $lgaNum = 0;
        $wardNum = 0;

        // $x = Lga::find(1)->wards;
        // return count($x[0]->citizens);

        if($request->has('state')){
            $numberOfCitizenInState = State::find($request->input('state'));
            $numInState = $numberOfCitizenInState->lgas;
            foreach($numInState as $l) {
                foreach($l->wards as $w){
                    $stateNum += count($w->citizens);
                }
               
            }
        }

        if($request->has('lga')){
            $numberOfCitizenInLga = Lga::find($request->input('lga'));
            foreach($numberOfCitizenInLga->wards as $w){
                $lgaNum += count($w->citizens);
            } 

        }

        if($request->has('ward')){
            $numberOfCitizenInWard = Ward::find($request->input('ward'));
            $wardNum = count($numberOfCitizenInWard->citizens);       
        }
    

        return view("citizen_report")->with(["numberOfCitizens" => $numberOfCitizens, "numberOfFilteredCitizensForState" => $stateNum, "numberOfFilteredCitizensForLga" => $lgaNum, "numberOfFilteredCitizensForWard" => $wardNum, "states" => $states, "wards" => $wards, "lgas" => $lgas]);
    }
    
}
