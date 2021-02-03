@extends('layouts.app')

@include('layouts.header')

@section('content')
    @include('partials._publish-tweet-panel')

    @include('partials._timeline')
@endsection
