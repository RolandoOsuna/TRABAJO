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
        .bg-blog{
            background-color: rgb(126,105,88);
            
        }
    </style>
<body>
    <?php require('Navbar.php');?> 

    <div class="fs-5">

    <header class="container">
        <p class="display-4 text-center ">Servicios</p>
        <hr>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-8">
                <h4>Diagnóstico en Comunicación Organizacional</h4>
                <p>Un diagnóstico de comunicación organizacional es el análisis que tiene como
                    propósito examinar y mejorar los sistemas y prácticas de comunicación interna y
                    externa de una organización en todos sus niveles. Examina también los productos
                    comunicacionales de una organización y puede contemplar las formas de distorsión
                    de la comunicación como los rumores y ruidos que generan las estructuras de
                    poder en una organización</p>
            </div>
            <aside class="col-12 col-md-6 col-lg-4 align-self-center">
            <img class="img-fluid" src="/IMG/contenido1.jpg" alt="">
            </aside>
        </div>
    
        <div class="row pt-5 ">
            <p class="display-6 text-center">Capacitación</p>
            <aside class="col-12 col-md-6 col-lg-4 align-self-center text-center">
           <img class="img-fluid" src="/IMG/contenido2.png" alt="">
            </aside>
            <div class="col-12 col-md-6 col-lg-8">
                <h4>Diseño de Cursos</h4>
                <p>En esta modalidad, solo se diseña el curso de acuerdo a las necesidades del cliente, para que lo imparta la persona que la misma indique; quedándose bajo propiedad de la misma y pueda ser replicado las veces que sea necesaria.  Con el diseño del curso se entregará</p>
                <hr>
                <h4> Diseño e Impartición de Cursos</h4>
                <p>En esta modalidad, se diseña el curso de acuerdo a las necesidades del cliente y se imparte.  Con el diseño del curso se entregará:  <a href="Cursos.php" class=" link-primary">Ver más</a></p>
    
            </div>
        </div>

        <div class="row py-5 justify-content-end text-center">
            <div class="col-12 col-sm-6 col-md-5 col-lg-4 p-5 bg-warning rounded-pill">
                <figure>
                    <blockquote class="blockquote">
                        <p class="display-6 mb-0">Solicita tu Cotización</p>
                        <hr>
                        <p class="lead">Ponte en contacto con nosotros.</p>
                    </blockquote>
                    <a href="#mi-modal" data-bs-toggle="modal" data-bs-target="#mi-modal" type="button" class="btn btn-light">Contacto</a>
                </figure>
            </div>
        </div>

    </div>

</div>     



<section class="container">
    <div class="row">
        <div class="col">
            <p class="display-4 text-center">Blog</p>
            <hr>
        </div>  
    </div>

    <p class="text-center fs-5">Descubre más información</p>
    
    <div class="row justify-content-evenly " >
        <div class="col-12 col-md-6 col-lg-3 pb-2 ">
            <div class="p-3 border rounded bg-blog shadow text-light">
                <h4>Metodología </h5>
                <h6 class="text-white-50">Necesidad de diagnóstico del sistema de Comunicación Organizacional</h6>
                <p class="text-white-50">Un diagnóstico de comunicación organizacional es el análisis que tiene como propósito examinar y mejorar los sistemas y prácticas de comunicación interna y externa de una organización en todos sus niveles.
                <a href="MetodologiaNDSCO.php" class="text-black-50 ">  Ver más</a></p>
    
            </div>
        </div>
        
        <div class="col-12 col-md-6 col-lg-3 pb-2">
            <div class="p-3 border rounded bg-blog shadow text-light">
                <h4>Metodología </h5>
                <h6 class="text-white-50">Detección de Necesidades de Capacitación (DNC)</h6>
                <p class="text-white-50">El diagnóstico de necesidades de capacitación es el proceso mediante el cual nos
                    aproximamos al estado real de conocimiento y destrezas del recurso humano en el ámbito
                    organizacional, en relación a los objetivos y las funciones de cada puesto.
                <a href="MetodologiaDNC.php" class="text-black-50">  Ver más</a></p>
                
            </div>

        </div>  
        <div class="col-12 col-md-6 col-lg-3 pb-2">
            <div class="p-3 border rounded bg-blog shadow text-light">
                <h4>Definición </h5>
                <h6 class="text-white-50">Qué hace un consultor y cómo elegir al mejor</h6>
                <p class="text-white-50">Las consultoras de Recursos Humanos realizan un trabajo que implica análisis, identificación de problemas y creación de estrategias para resolverlos. Además, produce las modificaciones pertinentes para mejorar dicho departamento.
                <a href="Definicion.php" class="text-black-50">  Ver más</a></p>

            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 pb-2">
            <div class="p-3 border rounded bg-blog shadow text-light">
                <h4>Beneficios </h5>
                <h6 class="text-white-50">En que ayuda el optener una consulta</h6>
                <p class="text-white-50">Las ventajas que ofrece el contar con los servicios de consultoras de personal, es que se encargan de llevar a cabo una serie de procedimientos y técnicas especializadas para la selección, evaluación y capacitación del recurso humano, y que tienen en común la planificación de actividades para la búsqueda del recurso humano más calificado para el puesto.
                <a href="Beneficios.php" class="text-black-50">  Ver más</a></p>

            </div>
        </div>  
    </div>

</section>

<?php include('Footer.php');?>
<script src="/BOOTSTRAP/js/bootstrap.bundle.js"></script>
</body>
</html>