<!DOCTYPE html>
<html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>@yield('title')</title>

                {{-- Start Section Style --}}

                @stack('prepend-style')

                @include('includes.style')

                @stack('addon-style')

                {{-- End Section Style --}}

            </head>

    <body>

        <!-- Navbar -->

        @include('includes.navbar')

        {{-- End Section Navbar --}}

        {{-- Start Section Content --}}

        @yield('content')

        {{-- End Section Content --}}

        <!-- Footer -->

        @include('includes.footer')

        {{-- End Footer --}}

        {{-- Start Section Script --}}

        @stack('prepend-script')

        @include('includes.script')

        @stack('addon-script')

        {{-- End Section Script --}}

    </body>
</html>
