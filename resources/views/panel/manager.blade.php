@extends('panel.layout')

@section('content')
    <div class="uk-card uk-card-default uk-card-body uk-position-center">
        <ul class="uk-nav-primary uk-nav-center uk-nav-parent-icon" uk-nav>
            <li class="uk-active"><a href="{{route('manager.home')}}">Panel</a></li>
            <li><a href="{{route('manager.categories.list')}}">Categories</a></li>
            <li><a href="{{route('manager.articles.list')}}">Articles</a></li>
        </ul>
    </div>
@endsection