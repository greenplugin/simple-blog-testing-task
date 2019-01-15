@extends('panel.layout')

@section('content')
    <div uk-grid>
        <div class="uk-card-default uk-width-1-1">
            <div class="uk-card-body">
                <form action="{{route('manager.articles.store')}}" method="post">
                    @csrf
                    <fieldset class="uk-fieldset">
                        <legend class="uk-legend">New article</legend>
                        <div class="uk-margin">
                            <label for="article_title">Title</label>
                            <input id="article_title" name="title" value="{{old('title')}}" class="uk-input" type="text"
                                   placeholder="Article title">
                        </div>
                        <div class="uk-margin">
                            <label for="article_slug">Slug</label>
                            <input id="article_slug" name="slug" value="{{old('slug') }}" class="uk-input" type="text"
                                   placeholder="Article slug">
                        </div>
                        <div class="uk-margin">
                            <label for="article_category">Category</label>
                            <select id="article_category" name="category_id" class="uk-select">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="uk-margin">
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="uk-alert uk-alert-danger">
                                        {{ $error }}
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </fieldset>
                    <button type="submit"
                            class="uk-margin-remove-bottom uk-button uk-button-secondary uk-align-right">Create
                    </button>
                    <a href="{{route('manager.articles.index')}}"
                       class="uk-margin-remove-bottom uk-button uk-button-default uk-align-right">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection