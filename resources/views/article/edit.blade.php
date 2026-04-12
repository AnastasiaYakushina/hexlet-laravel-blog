@extends('layouts.app')

@section('content')
    {{ html()->modelForm($article, 'PATCH', route('articles.update', ['id' => $article->id]))->open() }}
    @include('article.form')
    {{ html()->submit('Сохранить изменения') }}
    {{ html()->closeModelForm() }}
@endsection
