<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <i class="fa fa-exclamation" aria-hidden="true"></i>{{ __('This section requires you to enter your biography information') }} <br>
           <i class="fa fa-exclamation" aria-hidden="true"></i> {{ __('Please make sure to enter the correct information') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                       <div class="mt-4">
                            <x-label for="role_id" value="{{ __('Are you a South African Citizen in possession of a valid SA ID/Birth Certicate:') }}" />
                            <select name="role_id" class="block mt-1 w-half border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                           {{-- Name --}}
                 <x-label for="name" :value="__('ID Number')" />
                 <x-input id="name" class="block mt-1 w-full" type="text" name="idnumber" :value="old('idnumber')" required autofocus />
                </div>
                </div>
            </div>
        </div>
           <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{ __('Personal Information') }}
                       <div class="mt-4">
                            <x-label for="role_id" value="{{ __('Gender:') }}" />
                            <select name="role_id" class="block mt-1 w-half border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                           {{-- Date of Birth --}}
                 <x-label for="name" :value="__('Please Enter Date of Birth')" />
                 <x-input id="name" class="block mt-1 w-half" type="text" name="dob" :value="old('dob')" required autofocus /><i class="fa fa-calendar" aria-hidden="true"></i>
                 {{--Title--}}
                  <div class="mt-4">
                            <x-label for="role_id" value="{{ __('Gender:') }}" />
                            <select name="role_id" class="block mt-1 w-half border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option value="mr">MR</option>
                                <option value="female">MISS</option>
                                <option value="female">MRS</option>
                                <option value="female">MS</option>
                                <option value="female">DR</option>
                                <option value="female">ADVOCATE</option>
                                <option value="female">PROF</option>
                                <option value="other">REVEREND</option>
                            </select>
                        </div>
                        {{-- initials --}}
                 <x-label for="name" :value="__('Please insert initials')" />
                 <x-input id="name" class="block mt-1 w-half" type="text" name="initials" :value="old('initials')" required autofocus />
                 {{--surname --}}
                 <x-label for="name" :value="__('Please insert your Surname')" />
                 <x-input id="name" class="block mt-1 w-half" type="text" name="initials" :value="old('initials')" required autofocus />
                 {{-- First Name --}}
                 <x-label for="name" :value="__('Please insert First Name')" />
                 <x-input id="name" class="block mt-1 w-half" type="text" name="initials" :value="old('initials')" required autofocus />
                 {{-- Marital status --}}
                
                </div>
            </div>
        </div>
        </div>
    </div>
</x-app-layout>