<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>

    <style>
        .hero-section {
            background-image: url('homepage/hero.jpg');
            background-size: cover;
            position: relative;
            color: #fff;
            height: 500px;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">{{ env('APP_NAME') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-section text-center text-white py-5">
        <div class="overlay"></div>
        <div class="container position-relative mt-5">
            <h1 class="display-4">{{env("APP_TITLE")}}</h1>
            <p class="lead">{{env("APP_DESCRIPTION")}}</p>
            <a href="#features" class="btn btn-dark">Create Account</a>
            <a href="#features" class="btn btn-secondary">Login</a>
        </div>
    </section>

    {{-- <section id="features" class="py-5">
        <div class="container text-center">
            <h2 class="display-4">Features</h2>
            <div class="row">
                <div class="col-md-4">
                    <h3>Feature 1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="col-md-4">
                    <h3>Feature 2</h3>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                </div>
                <div class="col-md-4">
                    <h3>Feature 3</h3>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                </div>
            </div>
        </div>
    </section> --}}


    <footer class="text-left py-3 container">
        <p>&copy; {{ date('Y') }} All rights reserved , Developed by {{ env('APP_OWNER') }}</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
