@extends('layouts.app')

@section('content')
    <h2>➕ Créer un nouvel article</h2>

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

    <form action="{{ route('articles.store') }}" method="POST">
        @csrf {{-- token de sécurité obligatoire dans Laravel --}}

        <div>
            <label for="title">Titre :</label><br>
            <input type="text" name="title" id="title" value="{{ old('title') }}" required>
        </div>

        <div>
            <label for="content">Contenu :</label><br>
            <textarea name="content" id="content" rows="5" required>{{ old('content') }}</textarea>
        </div>

        <button type="submit">💾 Enregistrer</button>
        <a href="{{ route('articles.index') }}">⬅️ Annuler</a>
    </form>
@endsection
