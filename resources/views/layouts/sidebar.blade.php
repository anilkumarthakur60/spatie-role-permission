<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('home') }}" class="brand-link">
        <img src="https://scontent.fktm4-1.fna.fbcdn.net/v/t1.6435-9/182093129_5434114139995236_7634369598449392346_n.jpg?_nc_cat=103&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=jhuImtrVPIUAX9o3fUC&_nc_ht=scontent.fktm4-1.fna&oh=e1ef6045412753751a5cf3461c155d3b&oe=60D3B23A"
             alt="{{ config('app.name') }} Logo"
             class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>

</aside>
