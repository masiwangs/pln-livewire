@extends('layouts.tahapan')

@section('navbar')
    @component('components.navbar')
        @section('title')
            Good Morning, <span class="text-black fw-bold">John Doe</span>
        @endsection
        @section('subtitle')
            Your performance summary this week 
        @endsection
    @endcomponent
@endsection

@section('basket-1')
    @livewire('project.table.basket', [
        'tahap' => 'prk',
        'basket' => 1
    ])
@endsection

@section('basket-2')
Basket2
@endsection

@section('basket-3')
Basket3
@endsection