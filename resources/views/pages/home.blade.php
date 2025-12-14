@extends('layouts.app')

@section('content')
    
    {{-- Hero Section --}}
    @include('sections.hero')

    @include('sections.about')

    @include('sections.services')
    @include('sections.articles')
    @include('sections.gallery')
    @include('sections.contact')

@endsection