<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Citizen Report') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <h5 style="margin-top: 0.2em;">Filter</h5>
                <div>
                    <form method="POST" action="{{ route('citizen_report') }}">
                        @csrf
                        <label>State:</label>
                        
                        <select name="state" id="state">
                            @foreach ($states as $state)    
                                <option value="{{$state->id}}" {{ (old('state') == $state->id) ? 'selected' : ''}} >{{$state->name . old('state')}}</option>
                            @endforeach
                        </select>

                        <label>LGA:</label>
                        <select name="lga"> 
                            @foreach ($lgas as $lga)    
                                <option value="{{$lga->id}}">{{$lga->name}}</option>
                            @endforeach
                        </select>

                        <label>Ward:</label>
                        <select name="ward"> 
                            @foreach ($wards as $ward)    
                                <option value="{{$ward->id}}">{{$ward->name}}</option>
                            @endforeach
                        </select>
                        <button class="bg-primary hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" style="background-color: blue; opacity: 0.6" type="submit">Search</button>

                    </form>
                </div>
            </div>
            <div style="margin-top: 2em;" class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>Total number of citizens in the country: {{$numberOfCitizens}}</p>
                    <p>Number of citizens in the state : {{$numberOfFilteredCitizensForState}}</p>
                    <p>Number of citizens in the LGA : {{$numberOfFilteredCitizensForLga}}</p>
                    <p>Number of citizens in the Ward : {{$numberOfFilteredCitizensForWard}}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
