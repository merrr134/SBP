@extends('layouts.app')

@section('hero')
    @include('partials.hero')  <!-- Menyertakan hero section -->
@endsection

@section('content')
    <!-- Pindahkan bagian partner ke sini -->
    @include('partials.partner')
@endsection
