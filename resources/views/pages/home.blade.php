@extends('layouts.main')

@section('title', 'Page Title')

{{-- HEADER--}}
    @push('header')
        
    @endpush
    @push('css')
        
    @endpush

{{-- BODY --}}
    @section('sidebar')
        @parent

        <p>This is appended to the master sidebar.</p>
    @stop

    @section('content')
        <p>This is my body content.</p>
    @stop
{{-- JS--}}
    @push('js')
        
    @endpush