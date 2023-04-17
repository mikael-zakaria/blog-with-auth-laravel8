@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-success text-white">{{ __('Edit Post') }}</div>

                <div class="card-body">

                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}

                    <form action="{{ route('admin.post.update', ['post' => $post->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                            <input type="hidden" id="user_id" name="user_id" value="{{Auth::user()->id}}">

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ $post->title }}">

                                @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content">{{$post->content}}</textarea>

                                @error('content')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="picture" class="form-label">Upload a Picture</label>
                                <input type="file" class="form-control" id="picture" name="picture">

                                @error('picture')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-outline-success my-2">Post</button>
                        </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
