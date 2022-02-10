<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Citizen Registration') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('register_citizen') }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-label for="name" :value="__('Name')" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                        </div>

                        <!-- Phone -->
                        <div>
                            <x-label for="phone" :value="__('Phone')" />

                            <x-input id="phone" class="block mt-2 w-full" type="number" name="phone" :value="old('phone')" required autofocus />
                        </div>

                        <!-- Gender -->
                        <div class="mt-4">
                            <x-label for="gender" :value="__('Gender')" />

                            <select name="gender" class="w-full">
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                            </select>
                        </div>

                        <!-- Address -->
                        <div class="mt-4">
                            <x-label for="address" :value="__('Address')" />
                            <textarea id="address" class="block mt-1 w-full" type="text" name="address" required > </textarea>
                        </div>

                        <!-- Ward -->
                        <div class="mt-4">
                            <x-label for="ward" :value="__('Ward')" />
                            <select name="ward_id" class="w-full">
                                @foreach ($wards as $ward)    
                                    <option value="{{$ward->id}}">{{$ward->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Register Citizen') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>