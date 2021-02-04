@extends('layouts.app')

@include('layouts.header')

@section('content')
    <article>
        <form method="POST" action="{{ $user->path() }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="mb-6">
                <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Name
                </label>

                <input type="text" class="border border-gray-400 p-2 w-full"
                    name="name" value="{{ $user->name }}">

                @error('name')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Username
                </label>

                <input type="text" class="border border-gray-400 p-2 w-full"
                    name="username" value="{{ $user->username }}">

                @error('username')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="avatar" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Avatar
                </label>

                <div class="flex">
                    <input type="file" class="border border-gray-400 p-2 w-full"
                        name="avatar" value="{{ $user->avatar }}">

                    @error('avatar')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                    @if($user->avatar)
                        <img class="ml-8" src="{{ $user->avatar }}" alt="" width="60" height="60">
                    @endif
                </div>

            </div>

            <div class="mb-6">
                <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    E-mail
                </label>

                <input type="email" class="border border-gray-400 p-2 w-full"
                    name="email" value="{{ $user->email }}">

                @error('email')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Password
                </label>

                <input type="password" class="border border-gray-400 p-2 w-full" name="password">

                @error('password')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password_confirmation" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Password Confirm
                </label>

                <input type="password" class="border border-gray-400 p-2 w-full" name="password_confirmation">

                @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                    Submit
                </button>
            </div>
        </form>
    </article>
@endsection
