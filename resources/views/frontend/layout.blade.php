<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{mix('css/frontend/app.css')}}">
    <title>Document</title>
</head>
<body>

<nav class="uk-background-primary uk-light" uk-navbar>
    <div class="uk-navbar-center">
        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="{{route('manager.home')}}">Simple blog Dashboard</a></li>
            <li class="uk-active"><a href="{{route('frontend.home')}}">Simple blog Frontend</a></li>
        </ul>
    </div>
</nav>

<div class="uk-container uk-margin-top">
    <div class="uk-grid-small" uk-grid>
        <div class="uk-width-1-5">
            <div class="uk-background-primary uk-padding uk-light uk-height-1-1">
                <ul class="uk-nav uk-nav-default">
                    @section('sidebar')
                        <li class="uk-active"><a href="#">placeholder</a></li>
                    @show
                </ul>
            </div>
        </div>
        <div class="uk-width-4-5">
            @yield('content')
        </div>
    </div>
</div>

<script src="{{mix('js/frontend/app.js')}}"></script>
</body>
</html>