@extends('layouts.main')

@section('title', 'Page Title')

{{-- HEADER--}}
    @push('header')
        
    @endpush
    @push('css')
        
    @endpush

{{-- BODY --}}
    @section('menu')
        @include('components.menus.menu')
    @stop

    @section('content')
    <div class="home-content">
        <div class="col-xs-12 title background-center">
            <h2>Stressé ? Fatiqué ?</h2>
            <h1>Yoga L'arbre</h1>
        </div>

        @include('components.advantages.advantages')
        <hr>
        @include('components.history.history')
        <hr>
        @include('components.lessonsTimes.lessonsTimes')
        <hr>
        @include('components.plansSubscription.plansList')

    </div>
    @stop
    
    @section('footer')
        @include('components.footers.mainFooter')
        {{--@include('components.footers.copyrights')--}}
    @stop
{{-- JS--}}
    @push('js')
        
    @endpush