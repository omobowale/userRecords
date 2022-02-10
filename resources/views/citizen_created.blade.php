<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Citizen Created') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if($citizen) 
                        <p><strong>Name: </strong> {{$citizen->name}} </p>
                        <p><strong>Gender: </strong> {{$citizen->gender}} </p>
                        <p><strong>Address: </strong> {{$citizen->address}} </p>
                        <p><strong>Phone: </strong> {{$citizen->phone}} </p>
                        <p><strong>State: </strong> {{$citizen->ward->lga->state->name}} </p>
                        <p><strong>Lga: </strong> {{$citizen->ward->lga->name}} </p>
                        <p><strong>Ward: </strong> {{$citizen->ward->name}} </p>
                    @endif
                </div>
            </div>
        </div>
        <p style="text-align: center; color: blue; margin-top: 1em"><a href="{{route('citizen_report')}}">View Report</a></p>
    </div>
</x-app-layout>
