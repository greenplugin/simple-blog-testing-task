@extends('panel.layout')
@section('content')
    <div class="" uk-grid>
        <div class="uk-width-1-1">
            <div class="" uk-grid>
                <div class="uk-width-expand">
                    <h1>Categories</h1>
                </div>
                <div class="uk-width-auto">
                    <a href="{{route('manager.categories.create')}}"
                       class="uk-button uk-button-secondary uk-align-right">Add</a>
                    <a href="{{route('manager.home')}}"
                       class="uk-button uk-button-default uk-align-right">Back</a>
                </div>
            </div>
        </div>
        @foreach($categories as $category)
            <div class="uk-card uk-card-default uk-width-1-1">
                <div class="uk-card-header">
                    <h2 class="uk-card-title">{{$category->title}}</h2>
                    <div class="uk-label uk-light">
                        <a href="{{route('frontend.category', ['slug' => $category->slug])}}">{{$category->slug}}</a>
                    </div>
                </div>
                <div class="uk-card-footer">
                    <button data-url="{{route('manager.categories.destroy', ['category' => $category])}}"
                            class="uk-button uk-button-danger uk-align-right delete">
                        Delete
                    </button>
                    <a href="{{route('manager.categories.edit', ['category'=> $category])}}"
                       class="uk-button uk-button-default uk-align-right">Edit</a>
                </div>
            </div>
        @endforeach
        <div class="uk-width-1-1">
            {{ $categories->links() }}
        </div>
    </div>
@endsection