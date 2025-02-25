<nav class="navbar bg-slate-900 navbar-expand-lg flex-wrap top-0 px-0 py-0">
    <div class="container py-2">
        <nav aria-label="breadcrumb">
            <div class="d-flex align-items-center">
                <span class="px-3 font-weight-bold text-lg text-white me-4">Corporate UI</span>
            </div>
        </nav>
        <ul class="navbar-nav d-none d-lg-flex">
            <li class="nav-item px-3 py-3 border-radius-sm  d-flex align-items-center">
                <a href="{{ route('dashboard') }}" class="nav-link text-white p-0">
                    Dashboard
                </a>
            </li>
            <li class="nav-item px-3 py-3 border-radius-sm  d-flex align-items-center">
                <a href="{{ route('tables') }}" class="nav-link text-white p-0">
                    Tables
                </a>
            </li>
            <li class="nav-item px-3 py-3 border-radius-sm bg-slate-800 d-flex align-items-center">
                <a href="{{ route('wallet') }}" class="nav-link text-white p-0">
                    Wallet
                </a>
            </li>
            <li class="nav-item px-3 py-3 border-radius-sm  d-flex align-items-center">
                <a href="{{ route('RTL') }}" class="nav-link text-white p-0">
                    RTL
                </a>
            </li>
        </ul>
    </div>

</nav>
