@extends('layouts.app')

@section('content')
    <h1>{{ $article->name }}</h1>
    <div>{{ $article->body }}</div>
    <a href="{{ route('articles.edit', $article->id) }}">Изменить статью</a>
    <form action="{{ route('articles.destroy', $article->id) }}" method="POST" onsubmit="return confirm('Точно удалить?')">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-link text-danger p-0">Удалить</button>
    </form>
@endsection
