@extends('layouts.app')

@section('title', $post->slug)
@section('content')
    <div class="container">
        <h1> {{ $post->title }} </h1>
        <p> {{ $post->body }} </p>

        <div>
            <a class="nav-link" href="/posts"> back </a>
            <form action="/posts/{{ $post->slug }}/delete" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-link text-danger btn-sm">Delete</button>
            </form>
        </div>
    </div>

@endsection
