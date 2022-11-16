@extends('auth.layout.main')
@section('container')
<div class="session">
    <div class="left" autocomplete="off" class="registrasi">

    </div>

    <form method="POST" action="{{ route('register') }}">
        <img class="mb-4" src="{{asset('css/Logo SMAN 1 Bengalon.PNG')}}" alt="" width="150" height="150">
        <h3>Form Registrasi</h3>
        @csrf
        <div class="floating-label">
            <input placeholder="Name" type="text" name="name" id="name" autocomplete="off">
            <label for="name">Name:</label>
        </div>
        <div class="floating-label">
            <input placeholder="Email" type="email" name="email" id="email" autocomplete="off">
            <label for="email">Email:</label>
        </div>
        <div class="floating-label">
            <input placeholder="Password" type="password" name="password" id="password" autocomplete="off">
            <label for="password">Password:</label>
        </div>

        <div class="floating-label">
            <input placeholder="Confirm Password" type="password" name="password_confirmation" id="password_confirmation" autocomplete="off">
            <label for="password">Confirm Password:</label>
        </div>

        <div class="form-group">
            <input type="hidden" name="role" value="calon-siswa">
        </div>


        <button type="submit">Registrasi</button>
        <small class="d-block text-center mt-3">Sudah Memiliki akun? <a href="/">Login</a></small>
    </form>
</div>

@endsection
{{-- <div class="session">
    <div class="left" autocomplete="off" class="registrasi">

    </div>

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <img src="{{ asset('css/Logo SMAN 1 Bengalon.PNG') }}" alt="" width="200">
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
</div> --}}
