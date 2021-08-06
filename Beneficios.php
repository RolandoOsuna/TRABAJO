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



    <h1>Beneficios</h1>
    <header></header>

    <section class="container">
    <div class="row">
        <div class="col">
            <p class="display-4 text-center">Blog</p>
            <hr>
        </div>  
    </div>

    <p class="text-center fs-5">Descubre más información </p>
    
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
         
    </div>

</section>
<?php include('Footer.php');?>
<script src="/BOOTSTRAP/js/bootstrap.bundle.js"></script>
</body>
</html>