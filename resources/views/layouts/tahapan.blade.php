@extends('layouts.app')
@section('navbar')
    @yield('navbar')
@endsection
@section('content')
<div class="content-wrapper">
    <div class="row mb-4">
        <div class="col-sm-12">
            @yield('basket-1')  
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-sm-12">
        @yield('basket-2')  
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-sm-12">
        @yield('basket-3')  
        </div>
    </div>
</div>
@endsection
