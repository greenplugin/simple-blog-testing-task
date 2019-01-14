@extends('frontend.layout')

@section('sidebar')
    @include('frontend.sidebar', ['category_slug' => $category_slug, 'categories' => $categories])
@endsection

@section('content')
    <div class="uk-padding">
        <h1>{{$article->title}}</h1>
        @markdown($article->content)
    </div>
@endsection