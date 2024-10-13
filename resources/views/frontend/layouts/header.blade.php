<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tooplate's Little Fashion</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

    <link href="{{ url('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/css/bootstrap-icons.css') }}"  rel="stylesheet">

    <link rel="stylesheet" href="{{ url('frontend/css/slick.css') }}"/>

    <link href="{{ url('frontend/css/tooplate-little-fashion.css')}}" rel="stylesheet">
    <!--

    Tooplate 2127 Little Fashion

    https://www.tooplate.com/view/2127-little-fashion

    -->
</head>

<body>

<section class="preloader">
    <div class="spinner">
        <span class="sk-inner-circle"></span>
    </div>
</section>

<main>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand" href="{{ route('home') }}">
                <strong><span>Little</span> Fashion</strong>
            </a>

            <div class="d-lg-none">
                <a href="{{ route('sign-up') }}" class="bi-person custom-icon me-3"></a>

                <a href="{{ route('products.details') }}" class="bi-bag custom-icon"></a>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('home') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('story.index') }}">Story</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.index') }}">Products</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('faqs.index') }}">FAQs</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact.index') }}">Contact</a>
                    </li>
                </ul>


                <div class="d-none d-lg-block">
                    <a href="{{ route('sign-up') }}" class="bi-person custom-icon me-3"></a>
                    <a href="{{ route('products.details') }}" class="bi-bag custom-icon"></a>
                </div>
            </div>
        </div>
    </nav>
