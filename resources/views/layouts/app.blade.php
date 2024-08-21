<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Otogard</title>
    <meta name="publisher" content="RajaMobil.com">

    <meta name="description" content="Joy For Your Car Life." />
    <meta name="keywords" content="Mobil, produk perawatan mobil" />
    <meta property="og:title" content="Otogard, Produk Perawatan Mobil Yang Diakui Dunia " />
    <meta property="og:description" content="otogard menawarkan produk untuk memecahkan semua kekhawatiran Anda dalam hal perawatan mobil." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.otogard.jp" />
    <meta property="og:image" content="http://www.otogard.jp/images/common/ogp_image.jpg" />
    <meta property="og:site_name" content="Otogard, Produk Perawatan Mobil Yang Diakui Dunia " />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon" />

    <!-- import css file -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @yield('style')

    <!-- import js file -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" defer></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js" defer></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js" defer></script>
    <script src="{{ mix('js/app.js') }}"></script>
    @yield('scripts')
    @stack('push-scripts')
</head>

<body>

    <main role="main" class="max-w-[1800px] mx-auto">

        <x-header></x-header>
        <div class="mt-40 max-sm:mt-[83px]">
            @yield('main')
        </div>
        <x-footer></x-footer>

    </main>

</body>

</html>