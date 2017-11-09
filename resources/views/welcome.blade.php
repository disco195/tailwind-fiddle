<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TailwindCSS Fiddle</title>

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@mkarnicki">
        <meta name="twitter:title" content="Tailwind Fiddle">
        <meta name="twitter:description" content="Fiddle with HTML and CSS Tailwind-style with instant visual feedback. It’s like your editor + browser in the browser, but you don’t have to save your source each time you want to see the result.">
        <meta name="twitter:image" content="https://tailwind.unravel.eu/storage/tailwind-fiddle.png">

        <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/preflight.min.css" rel="stylesheet">
        <style>
            html, body {
                height: 100vh;
                margin: 0;
            }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/utilities.min.css" rel="stylesheet">

        <script async src="{{ mix('js/app.js') }}"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('analytics.tracking_id') }}"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', '{{ config('analytics.tracking_id') }}');
        </script>

    </head>

    <body>
        <div id="app" class="w-screen h-screen">
            @include('twfiddle')
        </div>

        <svg class="absolute h-0 w-0 invisible">
            <defs>
                <linearGradient x1="0%" y1="0%" y2="100%" id="logoGradient">
                    <stop stop-color="#2383AE" offset="0%"></stop>
                    <stop stop-color="#6DD7B9" offset="100%"></stop>
                </linearGradient>
            </defs>
        </svg>
    </body>
</html>
