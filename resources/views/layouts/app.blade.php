<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mini Blog</title>
</head>
<body>
    <h1>Mini Blog</h1>
    <nav>
        <a href="{{ route('articles.index') }}">Articles</a>
    </nav>
    <main>
        @yield('content') 
        <!-- l'echange de contenu de page-->
    </main>
</body>
</html>
