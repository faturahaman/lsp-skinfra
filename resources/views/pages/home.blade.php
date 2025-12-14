@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    
    {{-- Hero Section --}}
    @include('sections.hero')

    @include('sections.about')

    @include('sections.services')
    
    @include('sections.article')
    
    @include('sections.gallery')
    
    <div id="contact">
        @include('sections.contact')
    </div>

@endsection