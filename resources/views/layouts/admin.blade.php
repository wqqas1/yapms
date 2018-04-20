<!DOCTYPE html>
<html lang="en">
@include('layouts.admin.header')
    <body>
        @include('layouts.admin.navigation')

        @yield('content')

        @include('layouts.admin.footer')
    </body>
</html>
