<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    {!! SEO::generate() !!}
</head>

<body>

    @include('includes._header')

    @yield('content')

    @include('includes._footer')

    @stack('footer-js')

</body>

</html>
