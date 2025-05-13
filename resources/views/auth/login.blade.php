@extends('master')
@section('title', __('keywords.login'))
@section('content')
    <section dir="rtl">
        <div class="min-h-[calc(100vh-8rem)] flex flex-col justify-center items-center px-6 py-8 mx-auto lg:py-0">
            <div class="w-full rounded-lg shadow dark:border sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-100 md:text-2xl dark:text-white">
                        {{ __('keywords.login') }}
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-100 dark:text-white">{{ __('keywords.your_email') }}</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                class="bg-gray-700 border border-gray-600 text-gray-100 rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500"
                                placeholder="{{ __('keywords.name_placeholder') }}" required>
                            @error('email')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-100 dark:text-white">{{ __('keywords.your_password') }}</label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class="bg-gray-700 border border-gray-600 text-gray-100 rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500"
                                required>
                            @error('password')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit"
                            class="w-full text-gray-900 border hover:border-gray-500 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:hover:border-gray-500 dark:focus:ring-gray-800 dark:text-white">
                            {{ __('keywords.sign_in') }}
                        </button>
                        <p class="text-sm font-light text-gray-400 dark:text-gray-400">
                            {{ __('keywords.no_account') }}
                            <a href="{{ route('register') }}"
                                class="font-medium text-gray-500 hover:underline dark:text-gray-300">{{ __('keywords.sign_up') }}</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
