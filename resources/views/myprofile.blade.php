<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome back '.Auth::user()->name) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="font-bold text-xl text-gray-800 leading-tight">You're logged in as user hello person</h1> <br>
                    <h3 class="font-semibold text-xl text-gray-800 leading-tight">Id : {{Auth::user()->id}} </h3><br>
                    <h3 class="font-semibold text-xl text-gray-800 leading-tight">Name : {{Auth::user()->name}} </h3><br>
                    <h3 class="font-semibold text-xl text-gray-800 leading-tight">email : {{Auth::user()->email}}</h3> <br>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
