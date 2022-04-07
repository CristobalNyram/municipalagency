
@extends('adminlte::page')

@section('title', 'Perfil Configuración')

@section('content')
<x-app-layout>


    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
       

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-jet-section-border />
            @endif

       

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

      
        </div>
    </div>
</x-app-layout>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
