@extends('panel.layout')
@section('content')
    <div class="" uk-grid>
        <div class="uk-width-1-1">
            <div class="" uk-grid>
                <div class="uk-width-expand">
                    <h1>Articles</h1>
                </div>
                <div class="uk-width-auto">
                    <a href="{{route('manager.articles.create')}}"
                       class="uk-button uk-button-secondary uk-align-right">Add</a>
                    <a href="{{route('manager.home')}}"
                       class="uk-button uk-button-default uk-align-right">Back</a>
                </div>
            </div>
        </div>
        @foreach($articles as $article)
            <div class="uk-card uk-card-default uk-width-1-1">
                <div class="uk-card-header">
                    <h3 class="uk-card-title">{{$article->title}}</h3>
                    <div class="uk-label uk-light">
                        <a href="{{route('frontend.article', ['category_slug' => $article->category->slug, 'slug' => $article->slug])}}">{{$article->slug}}</a>
                    </div>
                </div>
                <div class="uk-card-body">
                    @markdown($article->getTruncatedContent())
                </div>
                <div class="uk-card-footer">
                    <button data-url="{{route('manager.articles.destroy', ['article' => $article])}}"
                            class="uk-button uk-button-danger uk-align-right delete">Delete
                    </button>
                    <a href="{{route('manager.articles.edit', ['article'=> $article])}}"
                       class="uk-button uk-button-default uk-align-right">Edit</a>
                </div>
            </div>
        @endforeach
        <div class="uk-width-1-1">
            {{ $articles->links() }}
        </div>
    </div>
@endsection