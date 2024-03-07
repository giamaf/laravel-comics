<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME', 'DC Comics') }} | @yield('title')</title>

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    {{-- Header --}}
    @include('includes.header')

    {{-- todo Jumbo --}}
    @yield('jumbo')

    {{-- # Main --}}
    <main>
        @yield('main')
    </main>

    {{-- * Aside --}}
    <aside>
        @include('includes.aside')
    </aside>

    {{-- ! Footer --}}
    <footer>

        {{-- ! Footer-top --}}
        @include('includes.footer_top')


        {{-- ! Footer-bottom --}}
        @include('includes.footer_bottom')

    </footer>

    {{-- Scripts --}}
    @yield('scripts')
</body>

</html>
