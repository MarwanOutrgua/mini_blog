@extends('layouts.app')

@section('content')
<h2>Liste des Articles</h2>

{{-- Message flash de succès --}}
@if(session('success'))
<div style="color: green; margin-bottom: 15px;">
    {{ session('success') }}
</div>
@endif

<form action="{{ route('articles.index') }}" method="GET" style="margin-bottom:20px;">
    <input type="text" name="search" placeholder="Rechercher un article..." value="{{ request('search') }}">
    <button type="submit" class="btn btn-primary">Chercher</button>
</form>
<br>
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
        <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="delete-form">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
    </li>

    @endforeach
    <div class="pagination">
        {{ $articles->links('pagination::simple-bootstrap-5') }}
    </div>
</ul>
@endsection