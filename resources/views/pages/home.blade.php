@extends('master')
@section('title', __('keywords.which_department'))
@section('content')
    <div class="min-h-[calc(100vh-8rem)] flex flex-col items-center justify-center">
        <h1 class="text-5xl md:text-7xl text-center text-white font-bold mb-32">
            {{ __('keywords.which_department') }}
        </h1>
        <div class="flex justify-center">
            @if (Auth::check())
                <a href="{{ route('vote.index', Auth::user()->slug) }}" class="bg-white mx-2 px-4 py-2 rounded-lg">
                    {{ __('keywords.votes') }}
                </a>
            @else
                <a href="{{ route('login') }}" class="bg-white mx-2 px-4 py-2 rounded-lg">
                    {{ __('Login') }}
                </a>
                <a href="{{ route('register') }}" class="bg-white mx-2 px-4 py-2 rounded-lg">
                    {{ __('Register') }}
                </a>
            @endif
        </div>
    </div>
@endsection
