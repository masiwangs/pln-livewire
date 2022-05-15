<div class="home-tab">
    @livewire('dashboard.submenu')

    @livewire('dashboard.subdisplay.statistic')

    @livewire('dashboard.subdisplay.percentage')

    @livewire('dashboard.subdisplay.cost')

    @if($display == 'overview')
    <div class="row mb-4">
        <div class="col-4">
            @livewire('dashboard.subdisplay.recent-pengadaan')
        </div>
        <div class="col-8">
            @livewire('dashboard.subdisplay.recent-pelaksanaan')
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-4">
            @livewire('dashboard.recent-file')
        </div>
        <div class="col-4">
            @livewire('dashboard.recent-log')
        </div>
        <div class="col-4">
            @livewire('dashboard.recent-login')
        </div>
    </div>
    @endif
</div>