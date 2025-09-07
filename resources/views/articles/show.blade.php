@extends('layouts.app')

@section('content')
    <h2>{{ $article->title }}</h2>
    <p>{{ $article->content }}</p>

    <a href="{{ route('articles.index') }}">⬅️ Retour à la liste</a>
@endsection
