<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<?php require('Navbar.php');?>

<div class="container">
    <header>
        <div class="row">
            <div class="col">
                <div class="carousel slide carousel-fade" id="mi-carousel" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!--<div class="carousel-item active" data-bs-interval="5000">
                            <div class="carousel-caption">
                                <h5>Titulo de mi articulo</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, hic.</p>
                            </div>
                            <img class="img-fluid w-100 d-block" src="/IMG/CARRUSEL2.jpg alt=">
                        </div>-->
                        <div class="carousel-item active">
                            <img src="/IMG/CARRUSEL6.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="/IMG/CARRUSEL1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/IMG/CARRUSEL2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/IMG/CARRUSEL3.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/IMG/CARRUSEL4.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/IMG/CARRUSEL5.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <!-- Controles -->
                    <button 
                        class="carousel-control-prev"
                        type="button"
                        data-bs-target="#mi-carousel"
                        data-bs-slide="prev"
                    >
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>        
                    <button 
                        class="carousel-control-next"
                        type="button"
                        data-bs-target="#mi-carousel"
                        data-bs-slide="next"
                    >
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </button>        
                    <!-- Indicadores -->
                    <div class="carousel-indicators">
                        <button 
                            type="button"
                            class="active"
                            data-bs-target="#mi-carousel"
                            data-bs-slide-to="0"
                            aria-label="Slide 1"
                        ></button>
                        <button 
                            type="button"
                            class=""
                            data-bs-target="#mi-carousel"
                            data-bs-slide-to="1"
                            aria-label="Slide 2"
                        ></button>
                        <button 
                            type="button"
                            class=""
                            data-bs-target="#mi-carousel"
                            data-bs-slide-to="2"
                            aria-label="Slide 3"
                        ></button>
                        <button 
                            type="button"
                            class=""
                            data-bs-target="#mi-carousel"
                            data-bs-slide-to="3"
                            aria-label="Slide 4"
                        ></button>
                        <button 
                            type="button"
                            class=""
                            data-bs-target="#mi-carousel"
                            data-bs-slide-to="4"
                            aria-label="Slide 5"
                        ></button>
                        <button 
                            type="button"
                            class=""
                            data-bs-target="#mi-carousel"
                            data-bs-slide-to="5"
                            aria-label="Slide 6"
                        ></button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row my-2">
            <div class="col-12 shadow text-center bg-light bg-gradient">
                <p class="display-5">Consultoría Externa</p>
                <h3 class="text-muted">Servicio de asesoría especializada</h2>
                <p class="fs-5">Diagnóstico en Comunicación Organizacional  y Capacitación en <mark>Derechos Humanos</mark> </p>
            </div>
        </div>
    
    </header>   
    
    <main>
        <div class="row">
            <div class="col">
                <p class="display-4 text-center">Servicios</p>
                <hr>
            </div>  
        </div>

        <div class="row mb-3 ">
            <div class="col-12 col-sm-6 col-md-5">
                <div class="card p-1">
                    <div class="card-body">
                        <img class="img-fluid p-1" src="/IMG/Servicios1.png" width="75" alt="">
                        <h5 class="card-title">Diagnóstico en Comunicación Organizacional</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error nam, praesentium numquam id debitis quod?</p>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-sm-6 col-md-7">
                <div class="card">
                    <div class="card-body pt-2">
                        <h5 class="card-title">Capacitación</h5>
                        <p class="card-text" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Error nam, praesentium numquam id debitis quod?</p>
                    </div>
                </div>
            </div>  
            
        </div>
    </main>

</div>
    

    



<?php include('Footer.php');?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>