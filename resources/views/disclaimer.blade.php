<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Learner Declaration') }}
        </h2>
    </x-slot>
    <br>
    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-7xl">
  <div class="md:flex">
    <div class="md:flex-shrink-0">
        
      <img class="h-48 w-full object-cover md:w-48" src="public/img/logo.jpg" alt="Jeppe College logo">
    </div>
    <div class="p-8">
      <div class="uppercase tracking-wide text-sm text-indigo-500 font-bold">Learner Declaration</div>
      <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black "> By Aggreing with the following disclaimer you aggree to the terms and conditions of Jeppe College
                   also make sure at the end to include a non-refundable registration fee</a>
      <p class="mt-2 text-gray-500">I declare to the best of my knowledge, the information I have provided is correct and 
                        I understand that any incorrect of misleading information will invalidate my application for
                         registration of admission. I also understand that, if admitted I will abide by and fully conform 
                         to the rules and regulations as led out by the Jeppe College council. I also hereby declare that
                          I understand the details of the course that I have chosen to enrol for at Jeppe 
                        College and that I fully understand the SAQA ID and NQF level of this course. *</p>
                        <br><br>
        <input type="checkbox" class="rounded text-pink-500" name="disclaimer" /> I agree to the terms and condition
    </div>
  </div>
</div>

       <div class="py-6">
     
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
                 
                </div>
            </div>
        </div>
    </div>
    </div>
    
</x-app-layout>