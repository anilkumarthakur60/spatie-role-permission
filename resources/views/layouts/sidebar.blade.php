<aside class="main-sidebar sidebar-dark-light  elevation-4">
    <a href="{{ url('/home') }}" class="brand-link">
        <img src="https://assets.infyom.com/logo/blue_logo_150x150.png" alt="{{ config('app.name') }} Logo"
            class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>
    <div class="sidebar">
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>
</aside>
