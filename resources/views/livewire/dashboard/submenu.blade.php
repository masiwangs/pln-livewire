<div class="d-sm-flex align-items-center justify-content-between border-bottom mb-4">
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a role="button" class="nav-link @if($currentDisplay == 'overview') active @endif ps-0" wire:click="changeDisplay('overview')">Overview</a>
        </li>
        <li class="nav-item">
            <a role="button" class="nav-link @if($currentDisplay == 'basket-1') active @endif" wire:click="changeDisplay('basket-1')">Basket 1</a>
        </li>
        <li class="nav-item">
            <a role="button" class="nav-link @if($currentDisplay == 'basket-2') active @endif" wire:click="changeDisplay('basket-2')">Basket 2</a>
        </li>
        <li class="nav-item">
            <a role="button" class="nav-link @if($currentDisplay == 'basket-3') active @endif border-0" wire:click="changeDisplay('basket-3')">Basket 3</a>
        </li>
    </ul>
    <div>
        <div class="btn-wrapper">
            <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i>
                Share</a>
            <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
            <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</a>
        </div>
    </div>
</div>