<div class="w-full max-w-[1140px] mx-auto px-4">
    <div class="shadow">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between py-4">
                <a href="{{ route('home') }}" class="text-2xl font-bold text-white">
                    {{ __('keywords.choose_for_me') }}
                </a>

                <div class=" flex items-center">
                    @if (Auth::check())
                        <a href="#" class="text-white text-sm font-semibold hover:text-gray-600 ml-4">
                            {{ __('keywords.votes') }}
                        </a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="text-white text-sm font-semibold hover:text-gray-600 ml-4">
                                {{ __('Logout') }}
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}"
                            class="text-white text-sm font-semibold hover:text-gray-600 ml-4">{{ __('Login') }}</a>
                        <a href="{{ route('register') }}"
                            class="text-white text-sm font-semibold border px-4 py-2 rounded-lg hover:text-gray-600 hover:border-gray-600">{{ __('Register') }}</a>
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>
