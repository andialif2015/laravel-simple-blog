@extends('layouts.app')

@section('title', $post->slug)
@section('content')
    <div class="container">
        <h1> {{ $post->title }} </h1>
        <p> {{ $post->body }} </p>

        <div>
            <a class="nav-link" href="/posts"> back </a>
        </div>
    </div>

@endsection
