@extends('layouts.app')

@section('content')
    <h2>✏️ Modifier l'article</h2>

    {{-- Gestion des erreurs de validation --}}
    @if ($errors->any())
        <div style="color:red; margin-bottom:10px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>⚠️ {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('articles.update', $article) }}" method="POST">
        @csrf
        @method('PUT') {{-- important pour update --}}

        <div>
            <label for="title">Titre :</label><br>
            <input type="text" name="title" id="title" value="{{ old('title', $article->title) }}" required>
        </div>

        <div>
            <label for="content">Contenu :</label><br>
            <textarea name="content" id="content" rows="5" required>{{ old('content', $article->content) }}</textarea>
        </div>

        <button type="submit">💾 Mettre à jour</button>
        <a href="{{ route('articles.index') }}">⬅️ Annuler</a>
    </form>
@endsection
