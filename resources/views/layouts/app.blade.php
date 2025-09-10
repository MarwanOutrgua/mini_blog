<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mini Blog</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Mini Blog</h1>
    <nav>
        <a href="{{ route('articles.index') }}">Tous Articles</a>
    </nav>
    <main>
        @yield('content') 
        <!-- l'echange de contenu de page-->
    </main>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
