@extends('layouts.app', ['title' => 'Update Post'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col md-4">
                <div class="card">
                    <div class="card-header">Update : {{ $post->title }}</div>

                    <div class="card-body">

                            <form action="/posts/{{ $post->slug }}/update" method="post">
                                @csrf
                                @method('patch')
                                @include('posts.partials.form-controller', ['submit' => 'Update'])
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
