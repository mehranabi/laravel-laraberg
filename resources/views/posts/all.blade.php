@extends('layout')
@section('title', 'Posts')
@section('menu.posts', 'active')
@section('style')
@endsection
@section('content')
    <div class="ui segment">
        @foreach($posts as $post)
            <div class="ui raised segment">
                <a href="{{ route('post', ['id' => $post['id']]) }}" class="ui blue header">
                    {{ $post['title'] }}
                </a>
                <p>Created at: {{ $post['created_at'] }}</p>
            </div>
        @endforeach
    </div>
@endsection
@section('script')
@endsection