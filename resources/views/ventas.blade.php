<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>
@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #eeeeee;
    }

    .card {
        width: fit-content;
    }

    .image-container {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 10px;
    }

    html,
    body {
        position: relative;
        height: 100%;
    }

    body {
        background: #eee;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #000;
        margin: 0;
        padding: 0;
    }

    .swiper {
        width: 100%;
        text-align: center;
        height: 100%;
    }

    .swiper-slide {
        text-align: center !important;
        font-size: 18px;
        /* background: #fff; */
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mt-2">
                <div class="card bg-white">
                    <div class="image-container">
                        <img src="https://th.bing.com/th/id/R.448bbbd63994d20d96c7a1c960fae724?rik=6IwV42YHFxsq1w&pid=ImgRaw&r=0" class="" style="width: 50%;" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Flor de Ca&ntilde;a</h5>
                        <p class="card-text">Centenario 25 A&ntilde;os 750ml.</p>
                        <a href="#" class="btn btn-primary d-block">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt-2">
                <div class="card bg-white">
                    <div class="image-container">
                        <img src="https://th.bing.com/th/id/R.448bbbd63994d20d96c7a1c960fae724?rik=6IwV42YHFxsq1w&pid=ImgRaw&r=0" class="" style="width: 50%;" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Flor de Ca&ntilde;a</h5>
                        <p class="card-text">Centenario 25 A&ntilde;os 750ml.</p>
                        <a href="#" class="btn btn-primary d-block">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt-2">
                <div class="card bg-white">
                    <div class="image-container">
                        <img src="https://th.bing.com/th/id/R.448bbbd63994d20d96c7a1c960fae724?rik=6IwV42YHFxsq1w&pid=ImgRaw&r=0" class="" style="width: 50%;" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Flor de Ca&ntilde;a</h5>
                        <p class="card-text">Centenario 25 A&ntilde;os 750ml.</p>
                        <a href="#" class="btn btn-primary d-block">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card bg-white">
                    <div class="image-container">
                        <img src="https://th.bing.com/th/id/R.448bbbd63994d20d96c7a1c960fae724?rik=6IwV42YHFxsq1w&pid=ImgRaw&r=0" class="" style="width: 50%;" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Flor de Ca&ntilde;a</h5>
                        <p class="card-text">Centenario 25 A&ntilde;os 750ml.</p>
                        <a href="#" class="btn btn-primary d-block">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card bg-white">
                    <div class="image-container">
                        <img src="https://th.bing.com/th/id/R.448bbbd63994d20d96c7a1c960fae724?rik=6IwV42YHFxsq1w&pid=ImgRaw&r=0" class="" style="width: 50%;" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Flor de Ca&ntilde;a</h5>
                        <p class="card-text">Centenario 25 A&ntilde;os 750ml.</p>
                        <a href="#" class="btn btn-primary d-block">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card bg-white">
                    <div class="image-container">
                        <img src="https://th.bing.com/th/id/R.448bbbd63994d20d96c7a1c960fae724?rik=6IwV42YHFxsq1w&pid=ImgRaw&r=0" class="" style="width: 50%;" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Flor de Ca&ntilde;a</h5>
                        <p class="card-text">Centenario 25 A&ntilde;os 750ml.</p>
                        <a href="#" class="btn btn-primary d-block">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-2">
        <form>
            <div>
                <div class="mb-3">
                    <label for="example" class="form-label">Suscribete con su email</label>
                    <input type="email" class="form-control" id="example" aria-describedby="text-form" placeholder="example@example.us">
                    <div id="text-form" class="form-text">Escribe tu email para suscribirte a nuestro portal de noticias.
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </form>
        <!-- Inicio del carrusel -->
        <div class="container-fluid">
            <div class="row col-12 d-flex justify-content-center align-items-center">
                <div class="col-12 col-sm-8 col-md-6">
                    <div id="carouselExampleCaptions" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://therecordhub.com/cdn/shop/products/DaftPunk_2048x.png?v=1677083643" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <!-- <h5>NUEVO!</h5> -->
                                    <p>Disco de vinilo RAM 10th Anniversary Daft Punk <br> <a href="#">Mas info. acerca de este producto</a></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://therecordhub.com/cdn/shop/products/DaftPunk_2048x.png?v=1677083643" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Second slide label</h5>
                                    <p>Some representative placeholder content for the second slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://therecordhub.com/cdn/shop/products/DaftPunk_2048x.png?v=1677083643" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Third slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
@endsection

</html>