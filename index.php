<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="/BOOTSTRAP/css/bootstrap.min.css">
</head>
<style>
    .bg-card{
        background-color: rgb(222,235,247);
    }
    .img-contacto{
        background-image: url(/IMG/contacto.jpg);
        background-position: center center;
        background-size: cover;
        height: 400px;
    }
    .bg-blog{
        background-color: rgb(126,105,88);

    }
   
</style>
<body>
<!--NAVBAR-->
<?php require('Navbar.php');?>

<!--HEADER-->
    <header class="container">
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
               
    </header>   

    <div class="row m-2">
        <div class="col-12 shadow text-center bg-light bg-gradient ">
            <p class="display-5">Consultor??a Externa</p>
            <h3 class="text-muted">Servicio de asesor??a especializada</h2>
            <p class="fs-5">Diagn??stico en Comunicaci??n Organizacional  y Capacitaci??n en <mark>Recursos Humanos</mark> </p>
        </div>
    </div>
<!--SERVICIOS-->
    <main class="container">
        <div class="row">
            <div class="col">
                <p class="display-4 text-center">Servicios</p>
                <hr>
            </div>  
        </div>

        <div class="row mb-3 ">
            <div class="col-12  col-md-6 pb-2 align-self-center">
                <div class=" p-2 bg-card rounded">
                    <img class="img-fluid p-1" src="/IMG/Servicios1.png" width="75" alt="">
                    <h5 class="card-title">Diagn??stico en Comunicaci??n Organizacional</h5>
                    <p class="card-text">Es el an??lisis que tiene como prop??sito examinar y mejorar los sistemas y pr??cticas de comunicaci??n interna y externa de una organizaci??n en todos sus niveles.
                    <a href="Servicios.php" class="text-muted text-decoration-none">  Ver m??s</a></p>
                </div>
            </div>

            <div class="col-12 col-md-6 ">
                <a href="Servicios.php" class="text-decoration-none text-dark">
                    <div class="bg-card rounded p-2">
                        <h5 >Capacitaci??n</h5>           
                        <p>Ofrecemos capacitaci??n mediante dise??o e imparticion de cursos </p>
                        <hr>
                        <div class="row text-center ">
                            <div class="col-6 ">
                                <a href="Cursos.php" class="text-decoration-none text-dark">            
                                    <p class="lead">Dise??o de Cursos</p>
                                    <img class="img-fluid " src="/IMG/Diseno-de-Cursos.png" width="100" alt="">
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="Cursos.php"  class="text-decoration-none text-dark">
                                    <p class="lead">Impartici??n de Cursos</p>
                                    <img class="img-fluid " src="/IMG/Imparticion-de-Cursos.png" width="100" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>  
            
        </div>
    </main>

<!--CONTACTO-->
<div class="img-contacto">
    <div class="container  ">
        <div class="row text-white align-items-center p-5">
            <p class="display-6 pb-3 ">Que tu negocio tenga mejor organizaci??n</p>
            <h4 class="pb-2">??Cont??ctanos!</h4>
            <p class="fs-5">Llena el formulario y con gusto te atenderemos</p>
        </div>
        <a href="#mi-modal" data-bs-toggle="modal" data-bs-target="#mi-modal" type="button" class="btn btn-primary">Contacto</a>
        <?php require('Contacto.php');?>
    </div>
</div>

<!--BLOG-->
<section class="container">
    <div class="row">
        <div class="col">
            <p class="display-4 text-center">Blog</p>
            <hr>
        </div>  
    </div>

    <p class="text-center fs-5">Conoce mas sobre las Metodolog??as y los beneficios</p>
    
    <div class="row justify-content-evenly " >
        <div class="col-12 col-md-6 col-lg-3 pb-2 ">
            <div class="p-3 border rounded bg-blog shadow text-light">
                <h4>Metodolog??a </h5>
                <h6 class="text-white-50">Necesidad de diagn??stico del sistema de Comunicaci??n Organizacional</h6>
                <p class="text-white-50">Un diagn??stico de comunicaci??n organizacional es el an??lisis que tiene como prop??sito examinar y mejorar los sistemas y pr??cticas de comunicaci??n interna y externa de una organizaci??n en todos sus niveles.
                <a href="MetodologiaNDSCO.php" class="text-black-50 ">  Ver m??s</a></p>
    
            </div>
        </div>
        
        <div class="col-12 col-md-6 col-lg-3 pb-2">
            <div class="p-3 border rounded bg-blog shadow text-light">
                <h4>Metodolog??a </h5>
                <h6 class="text-white-50">Detecci??n de Necesidades de Capacitaci??n (DNC)</h6>
                <p class="text-white-50">El diagn??stico de necesidades de capacitaci??n es el proceso mediante el cual nos
                    aproximamos al estado real de conocimiento y destrezas del recurso humano en el ??mbito
                    organizacional, en relaci??n a los objetivos y las funciones de cada puesto.
                <a href="MetodologiaDNC.php" class="text-black-50">  Ver m??s</a></p>
                
            </div>

        </div>  
        <div class="col-12 col-md-6 col-lg-3 pb-2">
            <div class="p-3 border rounded bg-blog shadow text-light">
                <h4>Definici??n </h5>
                <h6 class="text-white-50">Qu?? es, qu?? hace una consultora y c??mo elegir a la mejor</h6>
                <p class="text-white-50">Las consultoras de Recursos Humanos realizan un trabajo que implica an??lisis, identificaci??n de problemas y creaci??n de estrategias para resolverlos. Adem??s, produce las modificaciones pertinentes para mejorar dicho departamento.
                <a href="Definicion.php" class="text-black-50">  Ver m??s</a></p>

            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 pb-2">
            <div class="p-3 border rounded bg-blog shadow text-light">
                <h4>Beneficios </h5>
                <h6 class="text-white-50">En que ayuda el optener una consulta</h6>
                <p class="text-white-50">Las ventajas que ofrece el contar con los servicios de consultoras de personal, es que se encargan de llevar a cabo una serie de procedimientos y t??cnicas especializadas para la selecci??n, evaluaci??n y capacitaci??n del recurso humano, y que tienen en com??n la planificaci??n de actividades para la b??squeda del recurso humano m??s calificado para el puesto.
                <a href="Beneficios.php" class="text-black-50">  Ver m??s</a></p>

            </div>
        </div>  
    </div>

</section>

<!--OPINIONES-->
<article class="bg-secondary ">
    <div class="row align-items-center mx-2" style="height: 200px;">
        <div class="col ">
            <figure class="text-center">
                <blockquote class="blockquote">
                    <p>Todo ser?? por el bien de tu empresa</p>
                </blockquote>
               <!-- <figcaption class="blockquote-footer text-body">
                    
                </figcaption>-->
            </figure>
        </div>
    </div>
</article>

    

    


<!--FOOTER-->
<?php include('Footer.php');?>

<script src="/BOOTSTRAP/js/bootstrap.bundle.js"></script>
</body>
</html>