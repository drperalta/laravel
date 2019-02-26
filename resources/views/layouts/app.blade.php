<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, intial-scale=1">

        {{-- Bootstrap CSS --}}
        @include('partials._stylesheets')

        <title>Laravel - @yield('title') </title>
    </head>
    <body>
        @include('partials._navbar')
        <div class="container">
            <div class="row">
                <div class="col-sm-12 pt-5">
                    @yield('content')
                </div>
            </div>
        </div>

        {{-- Bootstrap JS --}}
        @include('partials._scripts')
    </body>
</html>
