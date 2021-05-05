@extends('layouts.app', ['title' => 'New Post'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col md-4">
                <div class="card">
                    <div class="card-header">New Post</div>

                    <div class="card-body">

                        <form action="/posts/store" method="post">
                            @csrf
                            @include('posts.partials.form-controller', ['submit' => 'create'])
                          </form>

                    </div>
                </div>


            </div>

        </div>

    </div>


@endsection
