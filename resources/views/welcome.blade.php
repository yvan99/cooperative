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
            background-image: url('homepage/login-bg-2.jpg');
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
            background-color: rgba(5, 35, 13, 0.6);
        }
        .hero-container{
            margin-top: 100px;
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <div class="container">
            <a class="navbar-brand text-white" href="#">{{ env('APP_NAME') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="btn btn-sm btn-light" href="/auditor/login">Auditor Portal</a>
                    </li> &nbsp;
                    <li class="nav-item">
                        <a class="btn btn-sm btn-warning" href="/staff/login">Staff Portal</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-section text-center text-white py-5">
        <div class="overlay"></div>
        <div class="container position-relative hero-container">
            <h1 class="display-5" style="font-weight: 500;text-transform:capitalize">{{env("APP_TITLE")}}</h1>
            <p class="lead">{{env("APP_DESCRIPTION")}}</p>
            <a href="/owner/register" class="btn btn-light">Create Account</a>
            <a href="/owner/login" class="btn btn-warning">Login</a>
        </div>
    </section>

    <footer class="text-left py-3 bg-dark text-white">
        <div class="container">
            <p>&copy; {{ date('Y') }} All rights reserved , Developed by {{ env('APP_OWNER') }}</p>
        </div>
       
    </footer>
</body>

</html>
