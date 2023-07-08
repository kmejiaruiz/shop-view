<title>Compras</title>
@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #eeeeee;
        font-family: Arial, Helvetica, sans-serif;
    }

    .card {
        width: fit-content;
    }

    .carousel-caption>p {
        margin: 0;
    }

    .carousel-indicators {
        margin: 0;
        padding: 0;
    }

    .divider {
        height: 1px;
        background: #000000;
        background: linear-gradient(90deg,
                #fff 0%,
                #000 50%,
                #fff 100%);
    }

    .image-container {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 10px;
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
                        <img src="https://carulla.vtexassets.com/arquivos/ids/838450/Reloj-Hombre-Curren-Pulso-Cuero-Cronografos-Funcionales---Fecha-Automatica.jpg?v=637190570053030000" class="" style="width: 50%;" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Reloj de pulsera</h5>
                        <p class="card-text">Curren, reloj para caballero.</p>
                        <a href="#" class="btn btn-primary d-block">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt-2">
                <div class="card bg-white">
                    <div class="image-container">
                        <img src="https://farmacenter.cdn1.dattamax.com/userfiles/images/productos/600/604336.jpg?v=1620685308" class="" style="width: 50%;" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Lentes para caballero</h5>
                        <p class="card-text">Lentes para caballero - Undefinied.</p>
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
                        <img src="https://images-na.ssl-images-amazon.com/images/I/81ies9QLArL._AC_UL600_SR600,600_.jpg" class="" style="width: 50%;" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Impresora Canon</h5>
                        <p class="card-text">Impresora de Pixma de impresi&oacute;n de tinta todo en uno Canon.</p>
                        <a href="#" class="btn btn-primary d-block">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card bg-white">
                    <div class="image-container">
                        <img src="https://mobomx.vteximg.com.br/arquivos/ids/206125-600-600/TSNIPH1264BCOGB_01.jpg?v=638212896333830000" class="" style="width: 50%;" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Apple iPhone 12</h5>
                        <p class="card-text">iPhone 12 64 GB de almacenamiento, Apple 14 Bionic, 6 meses de garantia.</p>
                        <a href="#" class="btn btn-primary d-block">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card bg-white">
                    <div class="image-container">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTktso2XTzkHQ9kUxm655XSBq-b4DKYQeIiQ&usqp=CAU" class="" style="width: 50%;" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Apple iPhone 11</h5>
                        <p class="card-text">Apple iPhone 11 128 GB de almacenamiento, procesador Apple A13 Bionic, 6 meses de garantia.</p>
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
                    <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
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
                                <img src="https://therecordhub.com/cdn/shop/products/GUNSNROSESUSEYOURILL2_2019-11-06_13-19-30_QBeYUaTQxk_2048x.png?v=1595512045" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <!-- <h5>Second slide label</h5> -->
                                    <p>Disco de vinilo Use Your Illusion II Guns n' Roses <br> <a href="#">Mas info. acerca de este producto</a></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.nextrecords.cl/wp-content/uploads/2022/05/Lana-Del-Rey-NFR.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <!-- <h5>Third slide label</h5> -->
                                    <p>Disco de vinilo Norman Fucking Rockwell Lana del Rey <br> <a href="#">Mas info. acerca de este producto</a></p>
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
    <div class="divider mb-3 mt-3"></div>
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://m.media-amazon.com/images/I/71Q05lZFo3L.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Somos distribuidores autorizados de Turtle Beach.</p>
                    </div>
                    <div class="d-flex justify-content-around p-3">
                        <button class="btn btn-danger">Comparar precios</button>
                        <button class="btn btn-success">Comprar</button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://play-lh.googleusercontent.com/M69NNlG5X8rSh4xJXVlexwff-nWscILWHrtDpflRqcLlt9xavgZf-20PszMAKJ50I4c" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Somos afiliados y distribuidores de Beats by Dre.</p>
                    </div>
                    <div class="d-flex justify-content-around p-3">
                        <button class="btn btn-danger">Comparar precios</button>
                        <button class="btn btn-success">Comprar</button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://siman.vtexassets.com/arquivos/ids/1495985-800-800?v=637598890178200000&width=800&height=800&aspect=true" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Encuetra y cotiza con nosotros los productos de JBL by HARMAN.</p>
                    </div>
                    <div class="d-flex justify-content-around p-3">
                        <button class="btn btn-danger">Comparar precios</button>
                        <button class="btn btn-success">Comprar</button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://cdn.icon-icons.com/icons2/2845/PNG/512/xbox_logo_icon_181359.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Encuentra con nosotros los productos de Microsoft Xbox.</p>
                    </div>
                    <div class="d-flex justify-content-around p-3">
                        <button class="btn btn-danger">Comparar precios</button>
                        <button class="btn btn-success">Comprar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-2">
        <div class="row col-12 d-flex justify-content-center align-items-center">
            <div class="col-12 col-sm-8 col-md-6">
                <div class="card text-bg-dark">
                    <img src="https://www.lg.com/mx/images/televisores/md07505992/gallery/D-08.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Te presentamos el LGTV 43" Smart TV</h5>
                        <p class="card-text">
                        <ul>
                            <li>webOS 3.5 de uso simple y divertido</li>
                            <li>Enriquece todos los colores a niveles nunca antes vistos</li>
                            <li>Full HD que revoluciona la claridad y color de la imagen</li>
                            <li>Mejora cualquier imagen con Resolution Upscaler</li>
                            <li>Entretente con Virtual Surround Plus</li>
                            <li>Conecta una unidad USB para más contenido</li>
                        </ul>
                        </p>
                        <p class="card-text"><small>LG Electronics</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5 mb-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12 col-sm-8 col-md-6 text-center">
                <div class="disapear">
                    <span class="message">Cargando...</span> <br>
                    <div class="spinner-border" role="status"></div>
                </div>
                <div class="appear" style="display: none;">
                    <div class="alert alert-danger">
                        Ups! Ha ocurrido un error al querer obtener los datos, nos disculpamos por los inconvenientes.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container-fluid text-center p-3" style="background: gray;">
            <div class="row">
                <div class="col-12">
                    <p class="m-0">2023 Todos los derechos reservados a sus respectivos dueños.</p>
                    Sitio en construccion, es posible que algunos elementos se encuentren incompletos, estamos trabajando por solucionar esto lo mas antes posible.
                </div>
            </div>
        </div>
    </footer>

    <script>
        let disapear = document.querySelector('.disapear');
        let appear = document.querySelector('.appear');

        setTimeout(() => {
            disapear.style.display = 'none';
            appear.style.display = 'block';
        }, 7000)
    </script>

    @endsection