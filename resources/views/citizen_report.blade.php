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
                    <form method="POST" action="{{ route('filter_citizen') }}">
                        @csrf
                        <select name="state"> 
                            @foreach ($states as $state)    
                                <option value="{{$state->id}}">{{$state->name}}</option>
                            @endforeach
                        </select>
                        <select name="lga"> 
                            @foreach ($wards as $ward)    
                                <option value="{{$ward->id}}">{{$ward->name}}</option>
                            @endforeach
                        </select>
                        <select name="ward"> 
                            <option>Ward 1</option>
                        </select>
                        <button class="bg-primary hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" style="background-color: blue; opacity: 0.6" type="submit">Search</button>

                    </form>
                </div>
            </div>
            <div style="margin-top: 2em;" class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>Total number of citizens: {{$numberOfCitizens}}</p>
                    <p>Number of citizens from filter: {{$numberOfFilteredCitizens}}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
