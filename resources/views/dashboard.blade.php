<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div> --}}

    @extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('leads.index') }}" class="btn btn-primary">Manage Leads</a>
    </div>
@endsection

</x-app-layout>
