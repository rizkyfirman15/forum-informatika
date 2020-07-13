@extends('layouts.app', [
    'title' => 'Login',
    'footer' => true,
    'navbar' => true,
])

@section('content')
    <div class="block bg-gray-200 font-sans text-gray-700" style="min-height: 90vh;">
        <div class="flex items-center lg:p-20 w-full">

            <div class="lg:w-8/12 md:w-full hidden pr-20 md:block text-center">
                <img src="{{ asset('assets/images/logo_mi.png') }}" alt="">
                <p class="mt-4 leading-relaxed mb-4 text-center">
                    <b>{{ env('APP_NAME', 'Forum Informatika') }}</b> Merupakan situs forum yang
                    bisa mebantu mahasiswa <strong>Manajemen Informatika</strong> dalam bertanya, berdiskusi bersama di seputar teknologi
                    Pemrograman IT.
                </p>
                <a href="{{ route('discussion.index') }}" class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded inline-flex items-center">
                    <span>Diskusi</span>
                </a>
            </div>

            <div class="lg:w-4/12 w-full p-4 lg:p-0">    
                <div class="bg-white rounded-lg overflow-hidden shadow-2xl">
                    <div class="font-semibold text-gray-700 pt-4 px-6 mb-0 text-xl">
                        Login
                    </div>
                    <div class="p-8">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            
                            <div class="mb-5">
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-600">Email</label>
                                <input type="email" name="email" class="block w-full p-3 rounded bg-gray-200 border-transparent focus:outline-none hover:bg-gray-300 focus:bg-gray-300 @error('email') border-4 border-red-300 @enderror" required autocomplete="email" autofocus>
                            </div>

                            @error('email')
                            <p class="text-red-500 text-xs italic my-4">
                                {{ $message }}
                            </p>                                
                            @enderror
                    
                            <div class="mb-5">
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-600">Password</label>
                                <input type="password" name="password" class="block w-full p-3 rounded bg-gray-200 border-transparent focus:outline-none hover:bg-gray-300 focus:bg-gray-300 @error('password') border-4 border-red-300 @enderror" required autocomplete="password">
                            </div>

                            @error('password')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>                                
                            @enderror
    
                            <button type="submit" class="block text-center w-full p-3 mt-4 bg-indigo-500 text-white rounded shadow hover:bg-indigo-600">Login</button>
                        </form>
                    </div>
                    
                    <div class="flex justify-between p-8 text-sm border-t border-gray-300 bg-gray-100">
                        <a href="{{ route('register') }}" class="font-medium text-indigo-500">Buat akun!</a>
                        <a href="{{ route('password.request') }}" class="text-gray-600">Lupa password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop