@extends('panel.layout')

@section('content')
    <div uk-grid>
        <div class="uk-card-default uk-width-1-1">
            <div class="uk-card-body">
                <form action="{{route('manager.category.edit.action', ['slug' => $category->slug])}}" method="post">
                    @csrf
                    <fieldset class="uk-fieldset">
                        <legend class="uk-legend">Edit category</legend>
                        <div class="uk-margin">
                            <label for="category_title"></label>
                            <input id="category_title" value="{{old('title') ?? $category->title}}"
                                   name="title" class="uk-input" type="text" placeholder="Category title">
                        </div>
                        <div class="uk-margin">
                            <label for="category_slug"></label>
                            <input id="category_slug" value="{{old('slug') ?? $category->slug}}"
                                   name="slug" class="uk-input" type="text"
                                   placeholder="Category slug">
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
                    <a href="{{route('manager.categories.list')}}"
                       class="uk-margin-remove-bottom uk-button uk-button-default uk-align-right">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection