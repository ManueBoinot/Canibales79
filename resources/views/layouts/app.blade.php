<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="CANIBALES79 est un club de CANICROSS - CANIVTT - CANIMARCHE basé près de Niort dans les Deux-Sèvres (79), pour la pratique en loisir comme en compétition. Venez nous rencontrer et essayer nos sports !">
    <title>CANIBALES 79 NIORT - Canicross caniVTT canimarche Deux-Sèvres</title>

    <!-- Banque d'icônes -->
    <script src="https://kit.fontawesome.com/cfc69e35cf.js" crossorigin="anonymous"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css','resources/js/app.js'])

</head>

<body class="max-vw-100 min-vh-100">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v16.0&appId=726488655856436&autoLogAppEvents=1"
        nonce="ktuzrnbz"></script>
    <div id="app">

        {{-- HEADER ------------------------------------- --}}
        @include('CompHeader')

        @if (session()->has('message'))
            <p class="alert alert-success text-center">{{ session()->get('message') }}</p>
        @endif

        @if (session()->has('status'))
            <p class="alert alert-success text-center">{{ session()->get('status') }}</p>
        @endif

        {{-- Affichage des erreurs --}}
        @if ($errors->any())
            <div class="alert alert-danger text-center">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- CORPS DE LA PAGE GÉNÉRÉ DYNAMIQUEMENT ------------------------------------- --}}
        <main class="position-relative">

            @yield('content')

            {{-- Balise retour haut de page --}}
            <div class="back_top"><a href="#" title="Haut de page"><i
                        class="fa-solid fa-angles-up p-1 me-1 
                        mb-1 border rounded text-secondary"></i></a>
            </div>

        </main>

        {{-- FOOTER ------------------------------------- --}}
        @include('CompFooter')

    </div>
</body>

</html>
