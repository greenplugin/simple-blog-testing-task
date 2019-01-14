@extends('panel.layout')

@section('content')
    <div uk-grid>
        <div class="uk-card-default uk-width-1-1">
            <div class="uk-card-body">
                <form action="{{route('manager.category.create.action')}}" method="post">
                    @csrf
                    <fieldset class="uk-fieldset">
                        <legend class="uk-legend">New category</legend>
                        <div class="uk-margin">
                            <label for="category_title"></label>
                            <input id="category_title" name="title" value="{{old('title')}}" class="uk-input" type="text"
                                   placeholder="Category title">
                        </div>
                        <div class="uk-margin">
                            <label for="category_slug"></label>
                            <input id="category_slug" name="slug" value="{{old('slug')}}" class="uk-input" type="text"
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
                            class="uk-margin-remove-bottom uk-button uk-button-secondary uk-align-right">Create</button>
                    <a href="{{route('manager.categories.list')}}"
                            class="uk-margin-remove-bottom uk-button uk-button-default uk-align-right">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection