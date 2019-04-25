@extends('layout')
@section('title', 'Home')
@section('menu.home', 'active')
@section('style')
    <link rel="stylesheet" href="{{asset('vendor/laraberg/css/laraberg.css')}}">
    <style>
        .ui.submit.button {
            margin-top: 1.5em;
            margin-bottom: 1.5em;
        }
        .hidden {
            display: none;
        }
    </style>
@endsection
@section('content')
    <form class="ui segment form">
        <p>Please fill this form and submit your post:</p>
        <div class="ui required field">
            <label>Title</label>
            <input name="title" type="text" placeholder="Title of this post...">
        </div>
        <div class="ui required field">
            <label>Content</label>
            <input id="laraberg_input" type="textarea" name="content" hidden>
        </div>
        <div class="ui center aligned container">
            <a class="ui submit primary button">Submit Post</a>
        </div>
        <div class="ui hidden success message">
            <p>Your post has been published!</p>
        </div>
        <div class="ui hidden error message">
            <p>Unfortunately there was an error during submitting your post! Please try again.</p>
        </div>
    </form>
@endsection
@section('script')
    <script src="https://unpkg.com/react@16.6.3/umd/react.production.min.js"></script>
    <script src="https://unpkg.com/react-dom@16.6.3/umd/react-dom.production.min.js"></script>
    <script src="https://unpkg.com/moment@2.22.1/min/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fomantic-ui@2.7.4/dist/semantic.min.js"></script>
    <script src="{{ asset('vendor/laraberg/js/laraberg.js') }}"></script>
    <script src="{{ asset('js/serialize.js') }}"></script>
    <script>
        $(document).ready(function () {
            Laraberg.initGutenberg('laraberg_input', { minHeight: '500px' })
        });

        $('.ui.form').form({
            inline: true,
            on: 'blur',
            fields: {
                title: 'empty',
            },
        }).api({
            method: 'POST',
            url: '/api/posts',
            serializeForm: true,
            beforeSend: function(settings) {
                settings.data.laraberg = Laraberg.getContent();
                return settings;
            },
            onSuccess: function(response) {
                $('.ui.error.message').hide();
                $('.ui.success.message').show();
            },
            onFailure: function(response) {
                $('.ui.success.message').hide();
                $('.ui.error.message').show();
            },
        })
    </script>
@endsection