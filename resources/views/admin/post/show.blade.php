@extends('layouts.app')

@section('content')
<div class="container">

    <a href="{{ route('admin.post.index') }}">
        <button type="button" class="btn btn-outline-secondary mb-3">
            {{ __('Back') }}
        </button>
    </a>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ $post->created_at }}</div>

                <div class="card-body">

                    <div class="row">

                        <div class="col-12 text-center mb-3">
                            <img src="{{ asset('storage/posts/'.$post->picture) }}" class="img-fluid" alt="">
                        </div>

                        <div class="col-12">
                            <h1>{{$post->title}}</h1>
                        </div>

                        <div class="col-12 text-justify">
                            <p>{{$post->content}}</p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
