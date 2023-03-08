@extends('layouts.base')

@section('body')
    <div class="flex flex-col justify-center w-full">
        <div class="flex w-full gap-4 p-4 text-white bg-blue-900 justify-left">
            <a href="/">{{__('Home') }} </a>
            <a href="/">{{__('Settings') }} </a>
            <a href="/login">{{__('Login') }} </a>
            <a href="/logout">{{__('Logout') }} </a>
        </div>
        <div class="w-full">
            @yield('content')
            
            @isset($slot)
                {{ $slot }}
            @endisset
        <div>
    </div>
@endsection
