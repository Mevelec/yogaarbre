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

        @include('components.advantages')
        <div class="col-xs-12">

        <hr>

        <p>
            L'association L'ARBRE, créée en 1986, 
            est née d'une des démarches spirituelles et 
            humaniste qui s'adresse à la personne et à sa liberté intérieure.
            <br>
            L'association L’ARBRE vous propose une activité d'HATA-YOGA, 
            centrée sur un éveil du corps et une respiration profonde, 
            à la portée de tous pour améliorer, à votre rythme votre vie quotidienne.
        </p>

        <hr>

        <h2>Horaires et lieux des cours</h2>
        <p>Le mardi de 10h à 11h 30 à la Résidence "Bocage parc",
                21-27 Rue Croix Montoire, 37100 Tours,
                arrêt de tram "Tranchée"</p>
        <p>Le mercredi de 18h 45 à 20h 15 au Centre Social Pluriel(le)s,
                6 avenue du GAL de Gaulle (quartier du Sanitas), 
                arrêt tram: Liberté
                </p>
        </div>
    </div>
    @stop
{{-- JS--}}
    @push('js')
        
    @endpush