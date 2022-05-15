@extends('layouts.app')

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

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-12">
            @livewire('dashboard.container')
        </div>
    </div>
</div>
@endsection
