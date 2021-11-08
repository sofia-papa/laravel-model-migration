<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>Laravel Model Migration</title>
</head>
<body>
    @include('partials.header')


    <main class="container">
        <section id="@yield('main-section-id')" class="@yield('main-section-classes')">
            <div class="main-card">
             @yield('main-content')
            </div>
        </section>

    </main>

    @include('partials.footer')

    @yield('script-section')
    <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>