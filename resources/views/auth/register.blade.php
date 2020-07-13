@extends('layouts.app', [
    'title' => 'Register',
    'footer' => true,
    'navbar' => true,
])

@section('content')
    <div class="block bg-gray-200 font-sans text-gray-700">
        <div class="container flex mx-auto items-center lg:p-20 p-8">
            <div class="max-w-md w-full mx-auto">
                <div class="bg-white rounded-lg overflow-hidden shadow-2xl">
                    <div class="font-semibold text-gray-700 pt-4 px-6 mb-0 text-xl">
                        Register
                    </div>
                    <div class="p-8">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- name -->
                            <div class="mb-5">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-600">Name</label>
                                <input value="{{ old('name') }}" type="text" name="name" class="block w-full p-3 rounded bg-gray-200 border-transparent focus:outline-none hover:bg-gray-300 focus:bg-gray-300 @error('name') border-4 border-red-300 @enderror" required autocomplete="name" autofocus>
                            </div>

                            @error('name')
                            <p class="text-red-500 text-xs italic my-4">
                                {{ $message }}
                            </p>                                
                            @enderror


                            <!-- email -->
                            <div class="mb-5">
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-600">Email</label>
                                <input value="{{ old('email') }}" type="email" name="email" class="block w-full p-3 rounded bg-gray-200 border-transparent focus:outline-none hover:bg-gray-300 focus:bg-gray-300 @error('email') border-4 border-red-300 @enderror" required autocomplete="email" autofocus>
                            </div>

                            @error('email')
                            <p class="text-red-500 text-xs italic my-4">
                                {{ $message }}
                            </p>                                
                            @enderror
                    
                            <!-- password -->
                            <div class="mb-5">
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-600">Password</label>
                                <input type="password" name="password" class="block w-full p-3 rounded bg-gray-200 border-transparent focus:outline-none hover:bg-gray-300 focus:bg-gray-300 @error('password') border-4 border-red-300 @enderror" required autocomplete="new-password">
                            </div>

                            @error('password')
                            <p class="text-red-500 text-xs italic my-4">
                                {{ $message }}
                            </p>                                
                            @enderror

                            <!-- password:confirm -->
                            <div class="mb-5">
                                <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-600">Confirmation Password</label>
                                <input type="password" name="password_confirmation" class="block w-full p-3 rounded bg-gray-200 border-transparent focus:outline-none hover:bg-gray-300 focus:bg-gray-300 @error('password_confirmation') border-4 border-red-300 @enderror" required autocomplete="new-password">
                            </div>
    
                            <button class="block text-center w-full p-3 mt-4 bg-indigo-500 text-white rounded shadow hover:bg-indigo-600">Register</button>
                            
                        </form>
                    </div>
                    
                    <div class="flex p-8 text-sm border-t border-gray-300 bg-gray-100 justify-center">
                        <a href="{{ route('login') }}" class="font-medium text-indigo-500">Sudah punya akun?, Login!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop