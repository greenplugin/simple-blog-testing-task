<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{mix('css/panel/app.css')}}">
    <title>Document</title>
</head>
<body>

<nav class="uk-background-secondary uk-light" uk-navbar>
    <div class="uk-navbar-center ">
        <ul class="uk-navbar-nav ">
            <li class="uk-active"><a href="{{route('manager.home')}}">Simple blog Dashboard</a></li>
            <li class="uk-active"><a href="{{route('frontend.home')}}">Simple blog Frontend</a></li>
        </ul>
    </div>
</nav>

<div class="uk-container uk-margin-top uk-margin-bottom">
    @yield('content')
</div>

<script src="{{mix('js/panel/app.js')}}"></script>
</body>
</html>