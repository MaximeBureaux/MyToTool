<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Favicon -->
        <link rel="icon" type="image/svg+xml" href="{{ asset('/img/noun-pen-4549112.svg') }}" id="dark-icon" />
        <link rel="icon" type="image/svg+xml" href="{{ asset('/img/noun-pen-4549112-light.svg') }}" id="light-icon" />

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
    <script>
        window.setTimeout("closeHelpDiv();", 5000);

        function closeHelpDiv() {
        document.getElementById("helpdiv").style.display=" none";
        }

        matcher = window.matchMedia('(prefers-color-scheme: dark)');
        matcher.addListener(onUpdate);
        onUpdate();
        
        function onUpdate() {
            lightSchemeIcon = document.querySelector('link#light-icon');
            darkSchemeIcon = document.querySelector('link#dark-icon');

            if (matcher.matches) {
                lightSchemeIcon.remove();
                document.head.append(darkSchemeIcon);
            } else {
                document.head.append(lightSchemeIcon);
                darkSchemeIcon.remove();
            }
        }
    </script>
</html>
