<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citizen;
use App\Models\State;
use App\Models\Ward;
use App\Models\Lga;

class CitizenReportController extends Controller
{
    public function index() {
        $numberOfCitizens = count(Citizen::all());
        $states = State::all();
        $lgas = Lga::all();
        $wards = Ward::all();
        return view("citizen_report")->with(["numberOfCitizens" => $numberOfCitizens, "numberOfFilteredCitizens" => 0, "states" => $states, "wards" => $wards, "lgas" => $lgas]);
    }
    
    public function filter(Request $request) {
        $numberOfCitizens = count(Citizen::all());
        $states = State::all();
        $lgas = Lga::all();
        $wards = Ward::all();
        

        $numberOfFilteredCitizens = 0;
        return view("citizen_report")->with(["numberOfCitizens" => $numberOfCitizens, "numberOfFilteredCitizens" => $numberOfFilteredCitizens, "states" => $states, "wards" => $wards, "lgas" => $lgas]);

        
    }
}
