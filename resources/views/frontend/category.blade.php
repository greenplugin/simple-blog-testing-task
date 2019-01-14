@extends('frontend.layout')

@section('sidebar')
    @include('frontend.sidebar', ['category_slug' => $category_slug, 'categories' => $categories])
@endsection


@section('content')
    <div uk-grid>
        <div class="uk-width-1-1">
            @include('frontend.articles', ['articles' => $articles])
        </div>
        <div class="uk-width-1-1">
            {{ $articles->links() }}
        </div>
    </div>
@endsection