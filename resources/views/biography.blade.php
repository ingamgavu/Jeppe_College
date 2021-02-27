      <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                
              </div>

              <div class="col-span-6 sm:col-span-3">
              
              </div>
            </div>
</div>


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
                    <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                 <x-label for="role_id" value="{{ __('Are you a South African Citizen in possession of a valid SA ID/Birth Certicate:') }}" />
                            <select name="role_id" class="block mt-1 w-half border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="first_name" class="block text-sm font-medium text-gray-700">ID Number</label>
                <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>
            </div>
                        </div>
            
                </div>
        </div>
           <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{ __('Personal Information') }}
                    {{-- Gender Information --}}
        <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <x-label for="role_id" value="{{ __('Gender:') }}" />
                            <select name="role_id" class="block mt-1 w-half border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
              </div>
            </div>
               </div>
                           {{-- Date of Birth --}}
                                 <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                 <x-label for="name" :value="__('Please Enter Date of Birth')" />
                  <input type="date" class="mt-1 block w-fill rounded-md border-gray-300 shadow-sm focus:border-indigo-300
                  focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="date">
              </div>
            </div>
               </div>
               {{-- Initials --}}
                     <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <x-label for="role_id" value="{{ __('Title:') }}" />
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
            </div>
                  </div>
                                
             <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="first_name" class="block text-sm font-medium text-gray-700">First name</label>
                <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="last_name" class="block text-sm font-medium text-gray-700">Last name</label>
                <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>
            </div>
                        </div>
                 {{-- Marital status --}}
             <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                   <x-label for="role_id" value="{{ __('Marital Status:') }}" />
                 <select name="role_id" class="block mt-1 w-half border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option value="mr">Single</option>
                                <option value="female">married</option>
                                <option value="female">divorced</option>
                                <option value="female">widow</option>
                            </select>
              </div>
            </div>
             </div>
                        {{-- language --}}
                            <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                    <x-label for="role_id" value="{{ __('Please select Home Language:') }}" />
                       <select name="role_id" class="block mt-1 w-half border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option value="mr">English</option>
                                <option value="female">IsiXhosa</option>
                                <option value="female">Afrikaans</option>
                                <option value="female">isiNdebele</option>
                                <option value="female">Sotho(North)</option>
                                <option value="female">Sotho(South)</option>
                                <option value="female">isiSwati</option>
                                <option value="female">Tsonga</option>
                                <option value="female">Tswana</option>
                                <option value="female">venda</option>
                                <option value="female">sign language</option>
                            </select>
              </div>
            </div>
             </div>
                
                               {{-- Race--}}
                 <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                  <x-label for="role_id" value="{{ __('Race:') }}" />
                            <select name="role_id" class="block mt-1 w-half border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option value="mr">Black</option>
                                <option value="female">white</option>
                                <option value="female">coloured</option>
                                <option value="female">Asian</option>
                               <option value="female">Other</option>
                            </select>
              </div>
                          </div>
                         </div>
                         {{-- disability --}}
                              <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                  <x-label for="role_id" value="{{ __('Disability:') }}" />
                            <select name="role_id" class="block mt-1 w-half border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            
              </div>
                          </div>
                         </div>
           <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                  <x-label for="name" :value="__('Please enter description of disability')" />
                     <textarea class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" rows="3" spellcheck="false"></textarea>       
                    
              </div>
              {{-- now to include certified copy of ID --}}
        
                         
                </div>
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700">
               Please Insert Certified Copy of ID or Passport
              </label>
              <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                <div class="space-y-1 text-center">
                  <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <div class="flex text-sm text-gray-600">
                    <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                      <span>Upload a file</span>
                      <input id="file-upload" name="file-upload" type="file" class="sr-only">
                    </label>
                    <p class="pl-1">or drag and drop</p>
                  </div>
                  <p class="text-xs text-gray-500">
                    PNG, JPG, GIF up to 10MB
                  </p>
                </div>
              </div>
            </div>
          </div>
       
        </div>
        </div>
        </div>
        {{-- now to insert residential --}}
          <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{ __('Residential Information') }}
                    
                           {{-- Street Address--}}




                           {{-- isdhg --}}
                 <x-label for="name" :value="__('Street Address Line 1(e.g. Street Name):')" />
                 <x-input id="name" class="block mt-1 w-full" type="text" name="idnumber" :value="old('idnumber')" required autofocus />
                          {{-- Street Address--}}
                 <x-label for="name" :value="__('Street Address Line 2(e.g. Suburb Name)')" />
                 <x-input id="name" class="block mt-1 w-full" type="text" name="idnumber" :value="old('idnumber')" required autofocus />
                          {{-- Street Address--}}
                 <x-label for="name" :value="__('Street Address Line 3(e.g. Town Name)')" />
                 <x-input id="name" class="block mt-1 w-full" type="text" name="idnumber" :value="old('idnumber')" required autofocus />
                          {{-- Street Address--}}
                 <x-label for="name" :value="__('Street Address Line 4(e.g. Province Name)')" />
                 <x-input id="name" class="block mt-1 w-full" type="text" name="idnumber" :value="old('idnumber')" required autofocus />
                        {{-- Street Address--}}
                 <x-label for="name" :value="__('Postal Code')" />
                 <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="first_name" class="block text-sm font-medium text-gray-700">City</label>
                <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="last_name" class="block text-sm font-medium text-gray-700">State/Province</label>
                <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>
              <div class="col-span-6 sm:col-span-3">
                <label for="last_name" class="block text-sm font-medium text-gray-700">ZIP/Postal</label>
                <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>
            </div>
                </div>
                </div>
            </div>
        </div>
            <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{ __('Residential Information') }}
                           {{-- Street Address--}}
                </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>