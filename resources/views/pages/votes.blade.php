@extends('master')
@section('title', __('keywords.votes') . ' - ' . $user->name)
@section('content')
    <div class="min-h-[calc(100vh-8rem)] flex flex-col justify-center">
        <h1 class="text-5xl md:text-7xl text-center text-white font-bold mb-16">
            {{ __('keywords.which_department') }}
        </h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-6">
            <!-- IT Card -->
            <form method="POST" action="{{ route('vote.store', $user->slug) }}" class="relative">
                @csrf
                <button type="submit" name="choice" value="it"
                    class="w-full h-40 rounded-2xl bg-yellow-400 hover:bg-yellow-500 text-white text-6xl font-bold shadow-lg transition duration-300 relative overflow-hidden">
                    IT
                    <span
                        class="absolute bottom-2 right-3 text-6xl text-yellow-200 opacity-50 font-black">{{ $it }}</span>
                </button>
            </form>

            <!-- CS Card -->
            <form method="POST" action="{{ route('vote.store', $user->slug) }}" class="relative">
                @csrf
                <button type="submit" name="choice" value="cs"
                    class="w-full h-40 rounded-2xl bg-red-500 hover:bg-red-600 text-white text-6xl font-bold shadow-lg transition duration-300 relative overflow-hidden">
                    CS
                    <span
                        class="absolute bottom-2 right-3 text-6xl text-red-300 opacity-30 font-black">{{ $cs }}</span>
                </button>
            </form>

            <!-- AI Card -->
            <form method="POST" action="{{ route('vote.store', $user->slug) }}" class="relative">
                @csrf
                <button type="submit" name="choice" value="ai"
                    class="w-full h-40 rounded-2xl bg-blue-500 hover:bg-blue-600 text-white text-6xl font-bold shadow-lg transition duration-300 relative overflow-hidden">
                    AI
                    <span
                        class="absolute bottom-2 right-3 text-6xl text-blue-300 opacity-30 font-black">{{ $ai }}</span>
                </button>
            </form>
        </div>
    </div>

@endsection
