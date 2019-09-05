@extends('layouts.main')

@section('title', 'Page Title')

{{-- HEADER--}}
    @push('header')
        
    @endpush
    @push('css')
        <link rel="stylesheet" href="{{mix('/css/blog.css')}}">
    @endpush

{{-- BODY --}}
    @section('menu')
        @include('components.menus.menu')
    @stop

    @section('content')
    <div class="blog-content">
        @include('blog.components.postList.postList')
    </div>
    @stop
    
    @section('footer')
        @include('components.footers.thanks')
    @stop
{{-- JS--}}
    @push('js')
        
    @endpush