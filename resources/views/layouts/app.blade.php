@extends('layouts.base')

@section('body')
    <div class="flex flex-col justify-center w-full">
        <x-navigation />
        <div class="w-full">
            @yield('content')
            
            @isset($slot)
                {{ $slot }}
            @endisset
        <div>
    </div>
@endsection
