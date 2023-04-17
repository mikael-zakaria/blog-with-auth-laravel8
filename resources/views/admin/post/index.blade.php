@extends('layouts.app')

@section('content')
<div class="container">

    @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif

    <a href="{{ route('admin.post.create') }}">
        <button type="button" class="btn btn-outline-success mb-3">
            {{ __('Add New Post') }}
        </button>
    </a>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Post Dashboard') }}</div>

                <div class="card-body">

                    <table class="table table-hover">
                        <thead class="bg-light">
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Date</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            <!-- Perulangan Untuk Menampilkan Data Pada Tabel Jurusan -->
                            @forelse ($posts as $post)
                                <tr>
                                    <th>{{ $loop->iteration }}</th>

                                    <td><a href="{{ route('admin.post.show', ['post' => $post->id]) }}">{{ $post->title }}</a></td>

                                    <td class="text-truncate" style="max-width: 350px;">{{ $post->content }}</td>

                                    <td style="min-width: 85px;">{{ $post->created_at }}</td>

                                    <td style="width: 130px;" class="text-center">
                                        <a href="{{ route('admin.post.edit', ['post' => $post->id]) }}">Edit</a>

                                        <form action="{{ route('admin.post.destroy', ['post' => $post->id]) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" style=" color: red;
                                            padding: 0;
                                            border: none;
                                            background: none;">Delete</button>
                                        </form>
                                    </td>

                                </tr>

                            @empty
                                <td colspan="6" class="text-center">Data not found...</td>
                            @endforelse

                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
