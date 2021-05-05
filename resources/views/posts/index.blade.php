@extends('layouts.app')

@section('title', )


@section('content')
    <div class="container">
        <div class="d-flex justify-content-between">
            <div class="">
                <h4>All Post</h4>
                <hr>
            </div>
            <div class="">
                <a href="/posts/create" class="btn btn-primary">New Post</a>
            </div>

        </div>

        <div class="row">

                @forelse ($posts as $post)
                    <div class="col-md-4">
                        <div class="card mb-3">
                                    <div class="card-header">
                                        {{ $post->title }}
                                    </div>

                                    <div class="card-body">
                                        <div>
                                        {{ Str::limit($post->body, 100, '.') }}
                                        </div>

                                        <a class="nav-link" href="/posts/{{ $post->slug }}">Read more</a>

                                    </div>

                                    <div class="card-footer d-flex justify-content-between">
                                        Published on {{ $post->created_at->diffForHumans() }}
                                        <a href="/posts/{{ $post->slug }}/edit" class="btn btn-sm btn-success">Edit</a>
                                    </div>
                        </div>
                    </div>

                @empty
                    <div class="col md-6">
                        <div class="alert alert-info">
                            There's no post.
                        </div>
                    </div>

                @endforelse

        </div>

        <div class="d-flex justify-content-center">
            <div>
                {{ $posts->links() }}
            </div>

        </div>

    </div>

@endsection

