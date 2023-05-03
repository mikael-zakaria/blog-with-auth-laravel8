<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Zaka Simple Blog</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        
    </head>
    <body class="antialiased">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            
            <a class="navbar-brand p-3" href="{{ route('dashboard.post.index') }}">Zaka Simple Blog</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <div class="d-flex">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            
                            @auth
                                <a class="nav-link d-none" aria-current="page" href="{{ route('login') }}">Admin Login</a>
                            @else
                                <a class="nav-link" aria-current="page" href="{{ route('login') }}">Admin Login</a>
                            @endauth

                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </nav>

        <div class="container my-5">
    
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            
                @forelse ($posts as $post)

                    <div class="col">
                        <div class="card h-100">
                        <img src="{{ asset('storage/posts/'.$post->picture) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text text-truncate">{{ $post->content }}</p>
                            <a href="{{ route('dashboard.post.show', ['post' => $post->id]) }}" class="btn btn-primary">Read More</a>
                        </div>
                        <div class="card-footer text-muted">
                            Posted on {{ $post->created_at }} by WHOO???
                        </div>
                        </div>
                    </div>

                @empty
                    <div class="col-12 p-4">
                        <p class="fs-2">Post will be here...</p>
                    </div>
                
                @endforelse

            </div>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>
