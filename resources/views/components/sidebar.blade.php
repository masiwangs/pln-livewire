@php $route_name = (\Route::current())->getName(); @endphp
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item @if($route_name == 'dashboard') active @endif">
            <a class="nav-link" href="/">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item nav-category">Tahapan Project</li>
        <li class="nav-item @if(in_array($route_name, ['prk', 'prk.create'])) active @endif">
            <a href="/prk" class="nav-link">
                <i class="menu-icon mdi mdi-puzzle"></i>
                <span class="menu-title">PRK</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="menu-icon mdi mdi-file-document"></i>
                <span class="menu-title">SKKI</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="menu-icon mdi mdi-cart-outline"></i>
                <span class="menu-title">Pengadaan</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="menu-icon mdi mdi-file-check"></i>
                <span class="menu-title">Kontrak</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="menu-icon mdi mdi-radioactive"></i>
                <span class="menu-title">Pelaksanaan</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="menu-icon mdi mdi-credit-card-multiple"></i>
                <span class="menu-title">Pembayaran</span>
            </a>
        </li>
        <li class="nav-item nav-category">Database</li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="menu-icon mdi mdi-file-tree"></i>
                <span class="menu-title">File</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="menu-icon mdi mdi-package-variant"></i>
                <span class="menu-title">Material</span>
            </a>
        </li>
        <li class="nav-item nav-category">Administrasi</li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="menu-icon mdi mdi-account-multiple"></i>
                <span class="menu-title">User</span>
            </a>
        </li>
    </ul>
</nav>