@include('layouts.header')
<div class="container-fluid d-flex dash-area">
    @include('layouts.sidenav')
    @yield('main-section')
</div>
@include('layouts.footer')