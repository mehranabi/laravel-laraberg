<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') | Laraberg Sample</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.7.4/dist/semantic.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .ui.content.container {
            padding-top: 3em;
            padding-bottom: 5em;
        }
    </style>

    @yield('style')
</head>
<body>
<div class="ui content container">
    <div class="ui secondary  menu">
        <a class="@yield('menu.home') item" href="{{ route('home') }}">Home</a>
        <a class="@yield('menu.posts') item" href="{{ route('posts') }}">Posts</a>
    </div>
    @yield('content')
    <div class="ui raised center aligned segment">
        <p>Developer: Mehran Abghari</p>
        <p>Email: <a href="mailto:mehran.ab80@gmail.com">mehran [dot] ab80 [at] gmail.com</a></p>
        <p>Github: <a href="https://github.com/mehranabi">github.com/mehranabi</a></p>
        <div class="ui divider"></div>
        <p>It's using <a href="https://github.com/VanOns/laraberg">Laraberg</a> for the editor in the home page!</p>
        <p>It's using <a href="https://fomantic-ui.com">Fomantic UI</a> as the UI library which is a fork of <a href="https://semantic-ui.com">Semantic UI</a>!</p>
        <p>It's using <a href="https://laravel.com">Laravel</a> as the web framework!</p>
    </div>
</div>

@yield('script')
</body>
</html>
