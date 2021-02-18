<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Learner Declaration') }}
        </h2>
    </x-slot>
    
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   By Aggreing with the following disclaimer you aggree to the terms and conditions of Jeppe College
                   also make sure at the end to include a non-refundable registration fee
                </div>
            </div>
        </div>
    </div>

       <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                        <p>I declare to the best of my knowledge, the information I have provided is correct and 
                        I understand that any incorrect of misleading information will invalidate my application for
                         registration of admission. I also understand that, if admitted I will abide by and fully conform 
                         to the rules and regulations as led out by the Jeppe College council. I also hereby declare that
                          I understand the details of the course that I have chosen to enrol for at Jeppe 
                        College and that I fully understand the SAQA ID and NQF level of this course. * </p><br>
                        <br><br>
                        <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">I agree to the terms and conditions</label>
                      </div>  
                </div>
            </div>
        </div>
            <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                         {{ __('Accademic Application process') }}
                   </h2>
                   <ul>
                      <li><i class="fa fa-check" aria-hidden="true"></i>This page will guide you on to proceed with your application</li>
                      <li><i class="fa fa-check" aria-hidden="true"></i>Please download the Faculty Brochure for qualification requirements and procedures</li>
                      <li><i class="fa fa-check" aria-hidden="true"></i>If you already have a student just log into the portal an update the information required or wait for our response.</li>
                      <li><i class="fa fa-check" aria-hidden="true"></i>If you are a new applicant please continue with our application </li>
                   </ul>
                   <div class="mt-6">
                            <x-label for="role_id" value="{{ __('Have you previuosly enrolled at Jeppe College?') }}" />
                            <select name="role_id" class="block mt-1 w-half border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    
</x-app-layout>