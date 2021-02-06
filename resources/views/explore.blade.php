@extends('layouts.app')

@include('layouts.header')

@section('content')
    <div>
        @foreach ($users as $user)
            <article>
                <a href="{{ $user->path() }}" class="flex item-center mb-5">
                    <img src="{{ $user->avatar }}" alt="{{ $user->username }}'s avatar"
                        width="60" height="60" class="mr-4 rounded-lg border border-gray-200">

                    <h2 class="font-bold">{{ '@'. $user->username }}</h2>
                </a>
            </article>
        @endforeach

        {{ $users->links() }}
    </div>
@endsection
