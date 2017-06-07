<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('layouts.partials._head')
<body>
    <div id="app" >
        @include('layouts.partials._navigation')
        <div class="container">
            @yield('content')
        </div>
    </div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
