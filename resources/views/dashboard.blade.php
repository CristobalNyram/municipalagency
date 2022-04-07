<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
    

<footer class="text-center text-white" style="background-color: #0a4275;">
  <div class="container p-6">
    <div class="">
      <p class="flex justify-center items-center">
        <span class="mr-4">Sistema de gestión de para San Sebastian De La Frontera.</span>
       
      </p>
    </div>
  </div>

  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-white" href="https://dvtecam.com/"> <strong>DvTecam</strong> </a>
  </div>
</footer>
</x-app-layout>
