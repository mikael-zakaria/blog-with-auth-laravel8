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
                    <ul class="navbar-nav ms-3 mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('login') }}">Admin Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5">

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ $post->created_at }}</div>

                    <div class="card-body">

                        <div class="row">

                            <div class="col-12 text-center mb-3">
                                <img src="{{ url('images/admin/posts/', $post->picture) }}" class="img-fluid" alt="">
                            </div>

                            <div class="col-12">
                                <h1>{{$post->title}}</h1>
                            </div>

                            <div class="col-12 text-justify ">
                                <p>{{$post->content}}</p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <a href="{{ route('dashboard.post.index') }}">
            <button type="button" class="btn btn-outline-secondary mt-3 mb-5">
                {{ __('Back') }}
            </button>
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>
