@extends('layouts.app')

@include('layouts.header')

@section('content')
    <article>
        @include('partials._profile-header')

        @include('partials._timeline')
    </article>
@endsection
