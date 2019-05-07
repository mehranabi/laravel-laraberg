@extends('layout')
@section('title', $post['title'])
@section('style')
    <link rel="stylesheet" href="{{asset('vendor/laraberg/css/laraberg.css')}}">
@endsection
@section('content')
    <div class="ui segment">
        <h1 class="ui brown header">{{ $post['title'] }}</h1>
        <p>Created at: {{ $post['created_at'] }}</p>
        <p>Last Updated at: {{ $post['updated_at'] }}</p>
        <div class="ui raised segment">
            {!! $post['laraberg'] !!}
        </div>
    </div>
@endsection
@section('script')
@endsection
