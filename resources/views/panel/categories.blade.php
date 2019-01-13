@extends('panel.layout')
@section('content')
    <div class="" uk-grid>
        <div class="uk-width-1-1">
            <a href="{{route('manager.category.create.form')}}"
               class="uk-button uk-button-secondary uk-align-right">Add</a>
            <a href="{{route('manager.home')}}"
               class="uk-button uk-button-default uk-align-right">Back</a>
        </div>
    </div>
    <div class="uk-card">
        <div class="uk-card-header">
            <h3 class="uk-card-title">title</h3>
        </div>
        <div class="uk-card-body">contents</div>
        <div class="uk-card-footer">buttons</div>
    </div>
@endsection