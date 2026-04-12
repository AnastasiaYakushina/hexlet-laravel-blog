@extends('layouts.app')

@section('content')
    <h1>Список статей</h1>
    <a href="{{ route('articles.create') }}">Добавить новую статью</a>
    @foreach ($articles as $article)
        <h2><a href="{{ route('articles.show', $article->id) }}">{{ $article->name }}</a></h2>
        <a href="{{ route('articles.edit', $article->id) }}">Изменить</a>
        <form action="{{ route('articles.destroy', $article->id) }}" method="POST"
            onsubmit="return confirm('Точно удалить?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-link text-danger p-0">Удалить</button>
        </form>

        {{-- Str::limit – функция-хелпер, которая обрезает текст до указанной длины --}}
        {{-- Используется для очень длинных текстов, которые нужно сократить --}}
        <div>{{ Str::limit($article->body, 200) }}</div>
    @endforeach
@endsection
