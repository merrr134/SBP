@extends('layouts.app')

@section('hero')
    @include('partials.hero')  <!-- Menyertakan hero section -->
@endsection

@section('content')
    <!-- Menyertakan news list section -->
    @include('partials.about')
    @include('partials.news-list')
    @include('partials.gallery')
    {{-- @include('partials.partner') --}}
@endsection