@extends('layouts.app')

@section('content')
    <h2>Liste des Articles</h2>

    {{-- Message flash de succès --}}
    @if(session('success'))
        <div style="color: green; margin-bottom: 15px;">
            {{ session('success') }}
        </div>
    @endif

    {{-- Lien pour créer un nouvel article --}}
    <a href="{{ route('articles.create') }}">➕ Nouvel Article</a>

    <ul>
        @foreach ($articles as $article)
            <li style="margin: 10px 0;">
                <strong>{{ $article->title }}</strong>

                {{-- Lien vers la page show --}}
                <a href="{{ route('articles.show', $article) }}">👁 Voir</a>

                {{-- Lien vers la page edit --}}
                <a href="{{ route('articles.edit', $article) }}">✏️ Modifier</a>

                {{-- Formulaire pour supprimer --}}
                <form action="{{ route('articles.destroy', $article) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Voulez-vous vraiment supprimer cet article ?')">🗑 Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
