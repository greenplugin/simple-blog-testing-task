@extends('panel.layout')

@section('content')
    <div uk-grid>
        <div class="uk-card-default uk-width-1-1">
            <div class="uk-card-body">
                <form action="{{route('manager.article.edit.action', ['slug' => $article->slug])}}" method="post">
                    @csrf
                    <fieldset class="uk-fieldset">
                        <legend class="uk-legend">Edit article</legend>
                        <div class="uk-margin">
                            <label for="article_title"></label>
                            <input id="article_title" value="{{old('title') ?? $article->title}}"
                                   name="title" class="uk-input" type="text" placeholder="Article title">
                        </div>
                        <div class="uk-margin">
                            <label for="article_slug"></label>
                            <input id="article_slug" value="{{old('slug') ?? $article->slug}}"
                                   name="slug" class="uk-input" type="text"
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
                            <textarea hidden name="content">{{old('content') ?? $article->content}}</textarea>
                            <a href="#" id="content_edit"
                               class="uk-margin-remove-bottom uk-button uk-button-secondary uk-align-center">
                                Edit content
                            </a>
                            <div class="uk-padding uk-card uk-card-default" id="content">
                                @markdown((old('content') ?? $article->content))
                            </div>
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
                            class="uk-margin-remove-bottom uk-button uk-button-secondary uk-align-right">Update
                    </button>
                    <a href="{{route('manager.articles.list')}}"
                       class="uk-margin-remove-bottom uk-button uk-button-default uk-align-right">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection