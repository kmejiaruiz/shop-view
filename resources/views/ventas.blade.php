<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprar</title>

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
    </div>
</body>
@endsection

</html>