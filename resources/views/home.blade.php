{{-- @extends('layouts.app') --}}
@extends('layouts.blog')

@section('title', 'Eleven Plus (11+)')
@include('components.head') 
{{-- @include('partials.blog.nav') --}}
{{-- @include('partials.blog.profile') --}}

@section('content')
{{-- @include('components.services') --}}

@include('components.services')

@include('components.why-us')

@endsection
