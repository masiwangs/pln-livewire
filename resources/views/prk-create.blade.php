@extends('layouts.app')

@section('navbar')
    @component('components.navbar')
        @section('title')
            PRK <span class="text-black fw-bold">Baru</span>
        @endsection
        @section('subtitle')
            &nbsp;
        @endsection
    @endcomponent
@endsection

@section('content')
<div class="content-wrapper">
    <div class="row mb-4">
        <div class="col-12 col-lg-6">
            <div class="card card-rounded">
                <div class="card-body">
                    <h4>Informasi Project</h4>
                    <hr>
                    @livewire('project.form.prk-create')
                </div>
            </div>
        </div>
    </div>
    @livewire('project.table.rab-jasa')
    @livewire('project.table.rab-material')
</div>
@endsection
