@extends('layouts.app')

@section('titulo')
    Regístrate en DevStagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-1/2 p-5">
            <img src="{{ asset('img/registrar.jpg') }}" alt="imagen de registro de usuarios">
        </div>

        <div class="md:w-1/3 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{ route('register') }}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">nombre</label>
                    <input 
                        type="text"
                        id="name"
                        name="name"    
                        placeholder="Tu nombre"
                        value="{{ old('name') }}"
                        class="border p-3 w-full rounded-lg 
                        @error('name')
                            border-red-500
                        @enderror "
                    >
                    @error('name')
                        <p class=" bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">username</label>
                    <input 
                        type="text"
                        id="username"
                        name="username"    
                        placeholder="Tu nombre de usuario"
                        class="border p-3 w-full rounded-lg 
                        @error('username')
                            border-red-500
                        @enderror "
                    >
                    @error('username')
                        <p class=" bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">email</label>
                    <input 
                        type="email"
                        id="email"
                        name="email"    
                        placeholder="Tu email de registro"
                        class="border p-3 w-full rounded-lg 
                        @error('email')
                            border-red-500
                        @enderror "
                    >
                    @error('email')
                        <p class=" bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">password</label>
                    <input 
                        type="password"
                        id="password"
                        name="password"    
                        placeholder="Tu password"
                        class="border p-3 w-full rounded-lg 
                        @error('password')
                            border-red-500
                        @enderror "
                    >
                    @error('password')
                        <p class=" bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">repetir password</label>
                    <input 
                        type="password"
                        id="password_confirmation"
                        name="password_confirmation"    
                        placeholder="Repite tu password"
                        class="border p-3 w-full rounded-lg"
                    >
                </div>

                <input type="submit" value="Crear Cuenta" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection