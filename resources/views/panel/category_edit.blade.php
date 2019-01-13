@extends('panel.layout')

@section('content')
    <div uk-grid>
        <div class="uk-card-default uk-width-1-1">
            <div class="uk-card-body">
                <form action="{{route('manager.article.create.action')}}">
                    @csrf
                    <fieldset class="uk-fieldset">
                        <legend class="uk-legend">New category</legend>
                        <div class="uk-margin">
                            <label for="category_title">Title</label>
                            <input id="category_title" value="{{$category->title}}" name="category_title"
                                   class="uk-input" type="text" placeholder="Category title">
                        </div>
                        <div class="uk-margin">
                            <label for="category_slug">Slug</label>
                            <input id="category_slug" value="{{$category->slug}}" name="category_slug"
                                   class="uk-input" type="text" placeholder="Category slug">
                        </div>
                    </fieldset>
                    <button type="submit"
                            class="uk-margin-remove-bottom uk-button uk-button-secondary uk-align-right">Create
                    </button>
                    <a href="{{route('manager.categories.list')}}"
                       class="uk-margin-remove-bottom uk-button uk-button-default uk-align-right">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection